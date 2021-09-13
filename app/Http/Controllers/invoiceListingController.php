<?php

namespace App\Http\Controllers;

use App\QuickPrintInvoice;
use App\Remittance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use App\Revenue;
use App\Agent;
use App\User;
use App\Log;
use App\Service;
use App\Category;
use App\UnremittedCash;

class invoiceListingController extends Controller
{
    //
    public function index()
    {
        return view('index');
    }



      function getInvoice($ref){




          if(!isset($ref)){

          }

            $data =[];

          $invoices = Revenue::where(['transaction_reference'=>$ref])->first();

           if($invoices->log_id != 0 )
           {
               $log = Log::where(['id'=>$invoices->log_id])->first();
                 $data['name'] = ($log->full_name)??$log->corporate_name;
           }
            else {
                $data['name'] = 'Bulk Transaction';
            }

             if($invoices->description){
                 $data['description']=$invoices->description;
             }
              else {
                   $service = Service::where(['id'=>$invoices->service_id])->first();
                  $data['description']=$service->name;
              }
          $data['ref']=$invoices->transaction_reference;
          $data['amount']=$invoices->amount;
          $data['invoice']= $invoices->invoice;
          $data['paid_at']=($invoices->status == 'success')? $invoices->updated_at:'';
          $data['payment_channel']=$invoices->payment_type;
          $data['status']= $invoices->status;




          return response()->json([
              'status' => 'success',
              'data' =>  $data
          ]);



      }

    function noncashInvoices(Request $request){


        $user = Auth::user();
        $lga_id =  $user->lga_id;
        $category_id =  $user->category_id;



        $validate = $request->validate([
            'fromDate' => 'sometimes',
            'toDate' => 'sometimes',
            'status'=>'sometimes',
        ]);

       $fromDate =  ($validate['fromDate']== '' )? Carbon::now()->copy()->startOfMonth()->toDateString():$validate['fromDate'];
        $toDate = ($validate['toDate'] == '') ? Carbon::now()->copy()->endOfMonth()->toDateString(): $validate['toDate'];

        $status =  $validate['status'];


          if($user->role_id == env('HOD')) {

              $categoryObj = Category::where('id', $category_id)->get();   // get dept name of hod
              $category_name = $categoryObj[0]['name'];

              $roleName = 'HEAD OF DEPARTMENT';

              // bulk and single
              $invoices = Revenue::leftjoin('agents', 'revenues.agent_id',  'agents.id')
                 ->leftjoin('revenue_points', 'revenues.revenue_point_id',  'revenue_points.id')
                  ->where([['revenue_points.lga_id', $lga_id], ['agents.dept', 'LIKE', '%' . $category_name . '%']])
                  //->leftjoin('users', 'users.userable_id', '=', 'revenues.agent_id')
                  //  ->where([['users.role_id', '=', env('AGENT')], ['users.lga_id', '=', $lga_id], ['agents.dept', 'LIKE', '%' . $category_name . '%']])
                 // ->whereBetween('revenues.created_at', [$fromDate, $toDate])
                  ->whereBetween(DB::raw('date(revenues.updated_at)'), [ DB::raw('date("'.$fromDate.'")'), DB::raw('date("'.$toDate.'")')])

                  ->get();


              // quick print
              $quickPrintTotal = QuickPrintInvoice::
              leftjoin('agents', 'quick_print_invoices.agent_id', 'agents.id')
                  ->leftjoin('revenue_points', 'quick_print_invoices.revenue_point_id',  'revenue_points.id')
                  ->where([['revenue_points.lga_id', $lga_id], ['agents.dept', 'LIKE', '%' . $category_name . '%']])
                 // ->leftjoin('users', 'users.userable_id', '=', 'quick_print_invoices.agent_id')
                 // ->where([['users.role_id', '=', env('AGENT')], ['users.lga_id', '=', $lga_id], ['agents.dept', 'LIKE', '%' . $category_name . '%']])
                 // ->whereBetween('quick_print_invoices.created_at', [$fromDate, $toDate])
                  ->whereBetween(DB::raw('date(quick_print_invoices.updated_at)'), [ DB::raw('date("'.$fromDate.'")'), DB::raw('date("'.$toDate.'")')])
                  ->sum('quick_print_invoices.amount');


              $invoice_data = Revenue:: SELECT('users.name as agentName', 'services.name as description', 'revenue_points.name as revPtsName', 'lgas.name as lgaName',
                  'revenues.amount as amount', 'revenues.log_id as log_id', 'revenues.status as status',"revenues.created_at as create_date","revenues.updated_at as payment_date",
                  'revenues.transaction_reference as txn_ref','revenues.payment_type','revenues.bank'

              )

                  ->leftjoin('users', 'users.userable_id', '=', 'revenues.agent_id')
                  ->leftjoin('agents', 'revenues.agent_id', '=', 'agents.id')
                  ->leftjoin('revenue_points', 'revenue_points.id', '=', 'revenues.revenue_point_id')
                  ->leftjoin('lgas', 'lgas.id', '=', 'revenue_points.lga_id')
                  ->leftjoin('services', 'services.id', '=', 'revenues.service_id')
                  ->where([['users.role_id', env('AGENT')], ['revenue_points.lga_id', $lga_id], ['agents.dept', 'LIKE', '%' . $category_name . '%']])
                  ->when($status == 'cash', function ($query) {
                      return $query->where('revenues.payment_type', 'cash');
                  })
                  ->when($status == 'card', function ($query) {
                      return $query->where('revenues.payment_type', 'card');
                  })
                  ->when($status == 'paid_bank', function ($query) {
                      return $query->where(['revenues.payment_type' =>'bank', 'revenues.status' => 'success']);
                  })

                  ->when($status == 'paid_cheque', function ($query) {
                      return $query->where(['revenues.payment_type' => 'cheque', 'revenues.status' => 'success']);
                  })
                  ->when($status == 'paid', function ($query) {
                      return $query->where('revenues.status', 'success');
                  })
                  ->when( $status == 'unpaid' , function ($query) {
                      return  $query->whereIn('revenues.status',['pending','uncleared'] );

                  })
                  ->when($status == 'unpaid_bank', function ($query) {
                      return $query->where(['revenues.status' => 'pending', 'revenues.payment_type' => 'bank']);
                  })
                  ->when($status == 'uncleared_cheque', function ($query) {
                      return $query->where(['revenues.status' => 'uncleared', 'revenues.payment_type' => 'cheque']);
                  })
                  ->whereBetween(DB::raw('date(revenues.updated_at)'), [ DB::raw('date("'.$fromDate.'")'), DB::raw('date("'.$toDate.'")')])
                  ->orderBy('payment_date')
                  ->get();



              $invData = $invoice_data->load('log');

//              $agents = Agent::leftjoin('users','users.userable_id','=','agents.id')
//                  ->where([['users.role_id','=',env('AGENT')],['users.lga_id', '=', $lga_id],['agents.dept', 'LIKE', '%'.$category_name.'%']] )
//                  ->count();
//
//              $users = User::leftjoin('agents','users.userable_id','=','agents.id')
//                  ->where([['users.role_id','=',env('AGENT')],['users.lga_id', '=', $lga_id],['agents.dept', 'LIKE', '%'.$category_name.'%']] )
//                  ->count();

//              $unremitted_cash = Agent::leftjoin('users','users.userable_id','=','agents.id')
//                  ->where([['users.role_id','=',env('AGENT')],['users.lga_id', '=', $lga_id],['agents.dept', 'LIKE', '%'.$category_name.'%']] )
//                  ->sum('agents.cash_remittance');
              $unremitted_cash = Agent::
                 leftjoin('unremitted_cashes','agents.id','unremitted_cashes.agent_id')
              ->where([['unremitted_cashes.lga_id',$lga_id],['agents.dept', 'LIKE', '%'.$category_name.'%'] ] )
                  ->sum('unremitted_cashes.amount');



              $total_remitance = Remittance::leftjoin('agents','agents.id','remittances.agent_id')
                  ->where([['remittances.lga_id','=',$lga_id],['agents.dept', 'LIKE', '%'.$category_name.'%'],
                      ['remittances.status','=','success']] )
                  ->whereBetween(DB::raw('date(remittances.created_at)'), [ DB::raw('date("'.$fromDate.'")'), DB::raw('date("'.$toDate.'")')])
                  ->sum('remittances.amount');



          }


          else if( ($user->role_id == env('DIR_REVENUE')) ) {
              $roleName = 'Head of Revenue';

              // bulk and single
              $invoices = Revenue::
                  leftjoin('revenue_points', 'revenues.revenue_point_id',  'revenue_points.id')
                  ->where('revenue_points.lga_id', $lga_id)
                  // ->where('users.lga_id', '=', $lga_id )
                  // leftjoin('users','users.userable_id','revenues.agent_id')
                 // ->whereBetween('revenues.created_at', [$fromDate, $toDate])
                 ->whereBetween(DB::raw('date(revenues.updated_at)'), [ DB::raw('date("'.$fromDate.'")'), DB::raw('date("'.$toDate.'")')])

                  ->get();

              // quick print
              $quickPrintTotal = QuickPrintInvoice::
              leftjoin('revenue_points', 'quick_print_invoices.revenue_point_id',  'revenue_points.id')
                  ->where('revenue_points.lga_id', $lga_id)
            //  leftjoin('users','users.userable_id','quick_print_invoices.agent_id')
              //    ->where('users.lga_id', '=', $lga_id )
                  ->whereBetween(DB::raw('date(quick_print_invoices.updated_at)'), [ DB::raw('date("'.$fromDate.'")'), DB::raw('date("'.$toDate.'")')])
                  ->sum('quick_print_invoices.amount');


              $invoice_data = Revenue:: SELECT('users.name as agentName', 'services.name as description', 'revenue_points.name as revPtsName', 'lgas.name as lgaName',
                  'revenues.amount as amount', 'revenues.log_id as log_id', 'revenues.status as status',"revenues.created_at as create_date","revenues.updated_at as payment_date",
                  'revenues.transaction_reference as txn_ref','revenues.payment_type','revenues.bank'
              )
                  ->leftjoin('users', 'users.userable_id', '=', 'revenues.agent_id')
                  ->leftjoin('revenue_points', 'revenue_points.id', '=', 'revenues.revenue_point_id')
                  ->leftjoin('lgas', 'lgas.id', '=', 'revenue_points.lga_id')
                  ->leftjoin('services', 'services.id', '=', 'revenues.service_id')
                  ->where([['users.role_id', '=', env('AGENT')], ['revenue_points.lga_id', '=', $lga_id]])
                  ->when($status == 'cash', function ($query) {
                      return $query->where('revenues.payment_type', 'cash');
                  })
                  ->when($status == 'card', function ($query) {
                      return $query->where('revenues.payment_type', 'card');
                  })
                  ->when($status == 'paid_bank', function ($query) {
                      return $query->where(['revenues.payment_type' =>'bank', 'revenues.status' => 'success']);
                  })

                  ->when($status == 'paid_cheque', function ($query) {
                      return $query->where(['revenues.payment_type' => 'cheque', 'revenues.status' => 'success']);
                  })
                  ->when($status == 'paid', function ($query) {
                      return $query->where('revenues.status', 'success');
                  })
                  ->when( $status == 'unpaid' , function ($query) {
                      return  $query->whereIn('revenues.status',['pending','uncleared'] );

                  })
                  ->when($status == 'unpaid_bank', function ($query) {
                      return $query->where(['revenues.status' => 'pending', 'revenues.payment_type' => 'bank']);
                  })
                  ->when($status == 'uncleared_cheque', function ($query) {
                      return $query->where(['revenues.status' => 'uncleared', 'revenues.payment_type' => 'cheque']);
                  })
                //  ->whereBetween('revenues.created_at', [$fromDate, $toDate])
                  ->whereBetween(DB::raw('date(revenues.updated_at)'), [ DB::raw('date("'.$fromDate.'")'), DB::raw('date("'.$toDate.'")')])

                  ->orderBy('payment_date')
                  ->get();


//              if($status == 'cash' || $status == 'paid' || empty($status) ){
//              $quickPrint_data = QuickPrintInvoice::SELECT('users.name as agentName', 'services.name as description', 'quick_print_invoices.amount as amount',
//                  'revenue_points.name as revPtsName', 'lgas.name as lgaName', "quick_print_invoices.created_at as date",
//                  'quick_print_invoices.invoice as txn_ref'
//                  )
//                  ->leftjoin('users', 'users.userable_id', '=', 'quick_print_invoices.agent_id')
//                  ->leftjoin('revenue_points', 'revenue_points.id', '=', 'quick_print_invoices.revenue_point_id')
//                  ->leftjoin('lgas', 'lgas.id', '=', 'revenue_points.lga_id')
//                  ->leftjoin('services', 'services.id', '=', 'quick_print_invoices.service_id')
//                  ->where([['users.role_id', '=', env('AGENT')], ['revenue_points.lga_id', '=', $lga_id]])
//                 // ->whereBetween('quick_print_invoices.created_at', [$fromDate, $toDate])
//                  ->whereBetween(DB::raw('date(quick_print_invoices.updated_at)'), [ DB::raw('date("'.$fromDate.'")'), DB::raw('date("'.$toDate.'")')])
//
//                  ->orderBy('date')
//                  ->get();
//                  }



              $invData = $invoice_data->load('log');
//
//              $agents = Agent::leftjoin('users','users.userable_id','=','agents.id')
//              ->where([['role_id','=',env('AGENT')],['users.lga_id','=',$lga_id]] )->count();
//
//              $users = User::where([['role_id','!=',env('AGENT')],['lga_id','=',$lga_id]] )->count();

              $unremitted_cash = UnremittedCash::where('lga_id',$lga_id )
                  ->sum('unremitted_cashes.amount');


              $total_remitance = Remittance::
                  where([['remittances.lga_id',$lga_id],['remittances.status','success']] )
                  ->whereBetween(DB::raw('date(remittances.updated_at)'), [ DB::raw('date("'.$fromDate.'")'), DB::raw('date("'.$toDate.'")')])
                  ->sum('remittances.amount');


          }

          else {
              //if ($user->role_id == env('ADMIN') || $user->role_id == env('SUPER_ADMIN')){
                $roleName ='All Local Government Areas';

                 // single & payment invoice
                $invoices =  Revenue::whereBetween(DB::raw('date(updated_at)'), [ DB::raw('date("'.$fromDate.'")'), DB::raw('date("'.$toDate.'")')])

                  ->get();


              $quickPrintTotal = QuickPrintInvoice::
              whereBetween(DB::raw('date(updated_at)'), [ DB::raw('date("'.$fromDate.'")'), DB::raw('date("'.$toDate.'")')])
                  ->sum('amount');



              $invoice_data =  Revenue:: SELECT('users.name as agentName','services.name as description', 'revenue_points.name as revPtsName','lgas.name as lgaName',
                  'revenues.amount as amount', 'revenues.log_id as log_id', 'revenues.status as status',"revenues.created_at as create_date","revenues.updated_at as payment_date",
                  'revenues.transaction_reference as txn_ref','revenues.payment_type','revenues.bank'
               )
                  ->leftjoin('users','users.userable_id','=', 'revenues.agent_id')
                  ->leftjoin('revenue_points',	'revenue_points.id',	'=', 'revenues.revenue_point_id')
                  ->leftjoin('lgas',	'lgas.id',	'=', 'revenue_points.lga_id')
                  ->leftjoin('services',	'services.id',	'=', 'revenues.service_id')
                  ->where([['users.role_id','=',env('AGENT')],['revenues.payment_type','!=','cash']])
//                  ->when($status == 'cash', function ($query) {
//                      return $query->where('revenues.payment_type', 'cash');
//                  })
                  ->when($status == 'card', function ($query) {
                      return $query->where('revenues.payment_type', 'card');
                  })
                  ->when($status == 'paid_bank', function ($query) {
                      return $query->where(['revenues.payment_type' =>'bank', 'revenues.status' => 'success']);
                  })

                  ->when($status == 'paid_cheque', function ($query) {
                      return $query->where(['revenues.payment_type' => 'cheque', 'revenues.status' => 'success']);
                  })
                  ->when($status == 'paid', function ($query) {
                      return $query->where('revenues.status', 'success');
                  })
                  ->when( $status == 'unpaid' , function ($query) {
                      return  $query->whereIn('revenues.status',['pending','uncleared'] );

                  })
                  ->when($status == 'unpaid_bank', function ($query) {
                      return $query->where(['revenues.status' => 'pending', 'revenues.payment_type' => 'bank']);
                  })
                  ->when($status == 'uncleared_cheque', function ($query) {
                      return $query->where(['revenues.status' => 'uncleared', 'revenues.payment_type' => 'cheque']);
                  })
               //  ->where(DB::raw('date(revenue.created_at)'))

                 ->whereBetween(DB::raw('date(revenues.updated_at)'), [ DB::raw('date("'.$fromDate.'")'), DB::raw('date("'.$toDate.'")')])

                  ->orderBy('payment_date')
                  ->get();


              $remittances = Remittance:: SELECT('users.name as agentName', 'lgas.name as lgaName',
                  'remittances.amount as amount',  'remittances.status as status',"remittances.updated_at as date",
                  'remittances.transaction_reference as txn_ref','remittances.payment_type'  )
                  ->leftjoin('users','users.userable_id','=', 'remittances.agent_id')
                  ->leftjoin('lgas',	'lgas.id',	'=', 'remittances.lga_id')
                  ->where('users.role_id','=',env('AGENT'))
                  ->whereBetween(DB::raw('date(remittances.updated_at)'), [ DB::raw('date("'.$fromDate.'")'), DB::raw('date("'.$toDate.'")')])
                  ->orderBy('date')
                  ->get();




              $invData = $invoice_data->load('log');

//              $agents = Agent::join('users','users.userable_id','=','agents.id')
//                  ->where('users.role_id','=',env('AGENT') )
//                  ->count();

            //  $users = User::where('role_id','!=',env('AGENT'))->count();

              $unremitted_cash = UnremittedCash::sum('amount');

//                  Agent::join('users','users.userable_id','=','agents.id')
//                  ->where('users.role_id','=',env('AGENT') )
//                  ->sum('agents.cash_remittance');


              $total_remitance = Remittance::where([['remittances.status','success']])
                  ->whereBetween(DB::raw('date(remittances.updated_at)'), [ DB::raw('date("'.$fromDate.'")'), DB::raw('date("'.$toDate.'")')])
                  ->sum('remittances.amount');

          }


                       $paidInv = $unpaidInv = $unclearedCheque = $total =  0;

                       $sumPaidInv = $sumUnpaidInv = $sumUnclearedCheque = $sumTotal = $paid = 0;
                       $i=0;
                    foreach($invoices as $invoice  ) {

                        if ($invoice['payment_type'] != 'cash'){
                            if ($invoice['status'] == 'success')
                                $sumPaidInv = $sumPaidInv + $invoice['amount'];
                            else if ($invoice['status'] == 'pending')
                                $sumUnpaidInv = $sumUnpaidInv + $invoice['amount'];
                            else if ($invoice['status'] == 'uncleared')
                                $sumUnclearedCheque = $sumUnclearedCheque + $invoice['amount'];
                            $sumTotal = $sumTotal + $invoice['amount'];
                     }

                        if($invoice['status'] ==  'success'){

                            $paid = $paid + $invoice['amount'];
                        }




                             $i++;


                    }

        $paidInv =  $sumPaidInv;
        $unpaidInv=$sumUnpaidInv;
        $unclearedCheque = $sumUnclearedCheque ;
        $total = $sumTotal;




        $data = array();
         $grandTotal = 0;

        $i=0;
        foreach($invData as  $inv_data){


            $data[$i]['sn'] = $i+1;
            $data[$i]['agent'] = $inv_data['agentName'];
            $data[$i]['revPtsName'] = $inv_data['revPtsName'];
            $data[$i]['lgaName'] = $inv_data['lgaName'];
            $data[$i]['description'] = $inv_data['description'];
            $data[$i]['amount'] = $inv_data['amount'];
            $data[$i]['payer'] =   (  $inv_data['log'] == null )? 'Bulk Txn' : $inv_data['log']['full_name'];       //$inv_data['description'];
            $data[$i]['txn_ref'] = $inv_data['txn_ref'];
            $data[$i]['payment_type'] = $inv_data['payment_type'];
            $data[$i]['status'] = $inv_data['status'];
            $data[$i]['bank'] = $inv_data['bank'];
            $data[$i]['payment_date'] = $inv_data['payment_date'];
            $data[$i]['create_date'] = $inv_data['create_date'];

            $grandTotal = $grandTotal +  $inv_data['amount'];

            $i++;

        }

        $total_generated = $quickPrintTotal + $paid;
        $bank = $total_remitance + $paidInv;







        return response()->json([
            'status' => 'success',
            'data' => [
                'unpaid_invoice' => $unpaidInv,
                'paid_invoice' => $paidInv,
                'unclear_cheque' => $unclearedCheque,
                'total' => $total,
                 'grand_total'=>$grandTotal,
                'unremitted_cash'=> $unremitted_cash,
                'total_remittance'=> $total_remitance,
                'total_generated' => $total_generated,
                'bank' => $bank,
                'invoice' => $data,
//                'agents' => $agents,
//                'users' => $users,
                 'role_name'=> $roleName





            ]
        ]);




    }



    function cashInvoices(Request $request){


        $user = Auth::user();
        $lga_id =  $user->lga_id;
        $category_id =  $user->category_id;



        $validate = $request->validate([
            'fromDate' => 'sometimes',
            'toDate' => 'sometimes',
            'status'=>'sometimes',
        ]);

        $fromDate =  ($validate['fromDate']== '' )? Carbon::now()->copy()->startOfMonth()->toDateString():$validate['fromDate'];
        $toDate = ($validate['toDate'] == '') ? Carbon::now()->copy()->endOfMonth()->toDateString(): $validate['toDate'];

        $status =  $validate['status'];


        if($user->role_id == env('HOD')) {

            $categoryObj = Category::where('id', $category_id)->get();   // get dept name of hod
            $category_name = $categoryObj[0]['name'];

            $roleName = 'HEAD OF DEPARTMENT';

            // bulk and single
            $invoices = Revenue::leftjoin('agents', 'revenues.agent_id', '=', 'agents.id')
                ->leftjoin('revenue_points', 'revenues.revenue_point_id',  'revenue_points.id')
                ->where([['revenue_points.lga_id', $lga_id], ['agents.dept', 'LIKE', '%' . $category_name . '%']])
              //  ->leftjoin('users', 'users.userable_id', '=', 'revenues.agent_id')
                // ->where([['users.role_id', '=', env('AGENT')], ['users.lga_id', '=', $lga_id], ['agents.dept', 'LIKE', '%' . $category_name . '%']])


                // ->whereBetween('revenues.created_at', [$fromDate, $toDate])
                ->whereBetween(DB::raw('date(revenues.updated_at)'), [ DB::raw('date("'.$fromDate.'")'), DB::raw('date("'.$toDate.'")')])

                ->get();


            // quick print
            $quickPrintTotal = QuickPrintInvoice::leftjoin('agents', 'quick_print_invoices.agent_id', '=', 'agents.id')
                ->leftjoin('revenue_points', 'quick_print_invoices.revenue_point_id',  'revenue_points.id')
                ->where([['revenue_points.lga_id', $lga_id], ['agents.dept', 'LIKE', '%' . $category_name . '%']])

              //  ->leftjoin('users', 'users.userable_id', '=', 'quick_print_invoices.agent_id')
               // ->where([['users.role_id', '=', env('AGENT')], ['users.lga_id', '=', $lga_id], ['agents.dept', 'LIKE', '%' . $category_name . '%']])
                // ->whereBetween('quick_print_invoices.created_at', [$fromDate, $toDate])
                ->whereBetween(DB::raw('date(quick_print_invoices.updated_at)'), [ DB::raw('date("'.$fromDate.'")'), DB::raw('date("'.$toDate.'")')])

                ->sum('quick_print_invoices.amount');




              $quickPrint_data = QuickPrintInvoice::SELECT('users.name as agentName', 'services.name as description', 'quick_print_invoices.amount as amount',
                  'revenue_points.name as revPtsName', 'lgas.name as lgaName', "quick_print_invoices.created_at as date",
                  'quick_print_invoices.invoice as txn_ref'

                  )
                  ->leftjoin('users', 'users.userable_id', '=', 'quick_print_invoices.agent_id')
                  ->leftjoin('agents', 'quick_print_invoices.agent_id', '=', 'agents.id')
                  ->leftjoin('revenue_points', 'revenue_points.id', '=', 'quick_print_invoices.revenue_point_id')
                  ->leftjoin('lgas', 'lgas.id', '=', 'revenue_points.lga_id')
                  ->leftjoin('services', 'services.id', '=', 'quick_print_invoices.service_id')
                  ->where([['users.role_id', '=', env('AGENT')], ['users.lga_id', '=', $lga_id], ['agents.dept', 'LIKE', '%' . $category_name . '%']])
                 // ->whereBetween('quick_print_invoices.created_at', [$fromDate, $toDate])
                  ->whereBetween(DB::raw('date(quick_print_invoices.updated_at)'), [ DB::raw('date("'.$fromDate.'")'), DB::raw('date("'.$toDate.'")')])

                  ->orderBy('date')
                  ->get();


            $remittances = Remittance:: SELECT('users.name as agentName', 'lgas.name as lgaName',
                'remittances.amount as amount',  'remittances.status as status',"remittances.updated_at as date",
                'remittances.transaction_reference as txn_ref','remittances.payment_type'  )
                ->leftjoin('agents', 'remittances.agent_id', '=', 'agents.id')
                ->leftjoin('users','users.userable_id','=', 'remittances.agent_id')
                ->leftjoin('lgas',	'lgas.id',	'=', 'remittances.lga_id')
                ->when($status == 'paid', function ($query) {
                    return $query->where('remittances.status', 'success');
                })
                ->when($status == 'unpaid', function ($query) {
                    return $query->where('remittances.status', 'success');
                })
                ->where([['remittances.lga_id','=',$lga_id],['remittances.status','=','success'], ['agents.dept', 'LIKE', '%' . $category_name . '%']] )
                ->whereBetween(DB::raw('date(remittances.updated_at)'), [ DB::raw('date("'.$fromDate.'")'), DB::raw('date("'.$toDate.'")')])

                ->orderBy('date')
                ->get();




            $unremitted_cash = Agent::
            leftjoin('unremitted_cashes','agents.id','unremitted_cashes.agent_id')
                ->where([['unremitted_cashes.lga_id',$lga_id],['agents.dept', 'LIKE', '%'.$category_name.'%'] ] )
                ->sum('unremitted_cashes.amount');



            $total_remitance = Remittance::
            leftjoin('agents','agents.id','=','remittances.agent_id')
                ->where([['remittances.lga_id','=',$lga_id],['agents.dept', 'LIKE', '%'.$category_name.'%'],
                    ['remittances.status','=','success']] )
                ->whereBetween(DB::raw('date(remittances.updated_at)'), [ DB::raw('date("'.$fromDate.'")'), DB::raw('date("'.$toDate.'")')])
                ->sum('remittances.amount');



        }


        else if( ($user->role_id == env('DIR_REVENUE')) ) {
            $roleName = 'Head of Revenue';

            // bulk and single
            $invoices = Revenue::
            leftjoin('revenue_points', 'revenues.revenue_point_id',  'revenue_points.id')
                ->where('revenue_points.lga_id', $lga_id)
            //leftjoin('users','users.userable_id','revenues.agent_id')
              //  ->where('users.lga_id', '=', $lga_id )
                // ->whereBetween('revenues.created_at', [$fromDate, $toDate])
                ->whereBetween(DB::raw('date(revenues.updated_at)'), [ DB::raw('date("'.$fromDate.'")'), DB::raw('date("'.$toDate.'")')])

                ->get();

            // quick print
            $quickPrintTotal = QuickPrintInvoice::
            leftjoin('revenue_points', 'quick_print_invoices.revenue_point_id',  'revenue_points.id')
                ->where('revenue_points.lga_id', $lga_id)
            //leftjoin('users','users.userable_id','quick_print_invoices.agent_id')
             //   ->where('users.lga_id', '=', $lga_id )
                ->whereBetween(DB::raw('date(quick_print_invoices.updated_at)'), [ DB::raw('date("'.$fromDate.'")'), DB::raw('date("'.$toDate.'")')])
                ->sum('quick_print_invoices.amount');


              $quickPrint_data = QuickPrintInvoice::SELECT('users.name as agentName', 'services.name as description', 'quick_print_invoices.amount as amount',
                  'revenue_points.name as revPtsName', 'lgas.name as lgaName', "quick_print_invoices.created_at as date",
                  'quick_print_invoices.invoice as txn_ref'
                  )
                  ->leftjoin('users', 'users.userable_id', '=', 'quick_print_invoices.agent_id')
                  ->leftjoin('revenue_points', 'revenue_points.id', '=', 'quick_print_invoices.revenue_point_id')
                  ->leftjoin('lgas', 'lgas.id', '=', 'revenue_points.lga_id')
                  ->leftjoin('services', 'services.id', '=', 'quick_print_invoices.service_id')
                  ->where([['users.role_id', '=', env('AGENT')], ['revenue_points.lga_id', '=', $lga_id]])
                 // ->whereBetween('quick_print_invoices.created_at', [$fromDate, $toDate])
                  ->whereBetween(DB::raw('date(quick_print_invoices.updated_at)'), [ DB::raw('date("'.$fromDate.'")'), DB::raw('date("'.$toDate.'")')])

                  ->orderBy('date')
                  ->get();



            $unremitted_cash = UnremittedCash::
                where('lga_id',$lga_id )
                ->sum('amount');


            $remittances = Remittance:: SELECT('users.name as agentName', 'lgas.name as lgaName',
                'remittances.amount as amount',  'remittances.status as status',"remittances.updated_at as date",
                'remittances.transaction_reference as txn_ref','remittances.payment_type'  )
                ->leftjoin('users','users.userable_id','=', 'remittances.agent_id')
                ->leftjoin('lgas',	'lgas.id',	'=', 'remittances.lga_id')
                ->when($status == 'paid', function ($query) {
                    return $query->where('remittances.status', 'success');
                })
                ->when($status == 'unpaid', function ($query) {
                    return $query->where('remittances.status', 'success');
                })
                ->where([['remittances.lga_id','=',$lga_id],['remittances.status','=','success']] )
                ->whereBetween(DB::raw('date(remittances.updated_at)'), [ DB::raw('date("'.$fromDate.'")'), DB::raw('date("'.$toDate.'")')])

                ->orderBy('date')
                ->get();



            $total_remitance = Remittance::
                where([['remittances.lga_id','=',$lga_id],['remittances.status','=','success']] )
                // ->whereBetween('remittances.updated_at', [ $fromDate, $toDate])
                ->whereBetween(DB::raw('date(remittances.updated_at)'), [ DB::raw('date("'.$fromDate.'")'), DB::raw('date("'.$toDate.'")')])
                ->sum('remittances.amount');


        }

        else {
            //if ($user->role_id == env('ADMIN') || $user->role_id == env('SUPER_ADMIN')){
            $roleName ='All Local Government Areas';

            // single & payment invoice
            $invoices =  Revenue::whereBetween(DB::raw('date(updated_at)'), [ DB::raw('date("'.$fromDate.'")'), DB::raw('date("'.$toDate.'")')])

                ->get();

            $quickPrintTotal = QuickPrintInvoice::
            whereBetween(DB::raw('date(updated_at)'), [ DB::raw('date("'.$fromDate.'")'), DB::raw('date("'.$toDate.'")')])
                ->sum('amount');


            $remittances = Remittance:: SELECT('users.name as agentName', 'lgas.name as lgaName',
                'remittances.amount as amount',  'remittances.status as status',"remittances.updated_at as date",
                'remittances.transaction_reference as txn_ref','remittances.payment_type'  )
                ->leftjoin('users','users.userable_id','=', 'remittances.agent_id')
                ->leftjoin('lgas',	'lgas.id',	'=', 'remittances.lga_id')
                ->when($status == 'paid', function ($query) {
                    return $query->where('remittances.status', 'success');
                })
                ->when($status == 'unpaid', function ($query) {
                    return $query->where('remittances.status', 'success');
                })


                ->where('users.role_id','=',env('AGENT'))

                ->whereBetween(DB::raw('date(remittances.updated_at)'), [ DB::raw('date("'.$fromDate.'")'), DB::raw('date("'.$toDate.'")')])

                ->orderBy('date')
                ->get();

              $quickPrint_data =  QuickPrintInvoice::SELECT('users.name as agentName','services.name as description','quick_print_invoices.amount as amount',
                  'revenue_points.name as revPtsName','lgas.name as lgaName',"quick_print_invoices.created_at as date",
                  'quick_print_invoices.invoice as txn_ref'

              )
                  ->leftjoin('users','users.userable_id','=', 'quick_print_invoices.agent_id')
                  ->leftjoin('revenue_points',	'revenue_points.id',	'=', 'quick_print_invoices.revenue_point_id')
                  ->leftjoin('lgas',	'lgas.id', 'revenue_points.lga_id')
                  ->leftjoin('services',	'services.id', 'quick_print_invoices.service_id')
                  ->where('users.role_id',env('AGENT'))
              ->whereBetween(DB::raw('date(quick_print_invoices.updated_at)'), [ DB::raw('date("'.$fromDate.'")'), DB::raw('date("'.$toDate.'")')])
                  ->orderBy('date')
                  ->get();



            $unremitted_cash = UnremittedCash::sum('amount');



            $total_remitance = Remittance::where([['remittances.status','success']])
                ->whereBetween(DB::raw('date(remittances.updated_at)'), [ DB::raw('date("'.$fromDate.'")'), DB::raw('date("'.$toDate.'")')])
                ->sum('remittances.amount');

        }

        $paid = $paidInv = $sumPaidInv  = 0;
        $TotalCashReceipt =0;
        $i=0;
        foreach($invoices as $invoice  ) {

            if ($invoice['payment_type'] == 'cash'){
                if ($invoice['status'] == 'success')
                    $TotalCashReceipt= $TotalCashReceipt+ $invoice['amount'];
            }

            if ($invoice['payment_type'] != 'cash' && $invoice['status'] == 'success')
                    $sumPaidInv = $sumPaidInv + $invoice['amount'];



            if($invoice['status'] ==  'success'){
                $paid = $paid + $invoice['amount'];
            }




            $i++;


        }

     $paidInv =  $sumPaidInv;




        $total_generated = $quickPrintTotal + $paid;
        $bank = $total_remitance + $paidInv;


        $i=0;
        $dataRemit =  $data = array();

        foreach($remittances as  $remit){


            $dataRemit[$i]['sn'] = $i+1;
            $dataRemit[$i]['payer'] = $remit['agentName'];
            $dataRemit[$i]['lgaName'] = $remit['lgaName'];
            $dataRemit[$i]['amount'] = $remit['amount'];
            $dataRemit[$i]['txn_ref'] = $remit['txn_ref'];
            $dataRemit[$i]['payment_type'] = $remit['payment_type'];
            $dataRemit[$i]['status'] = $remit['status'];
            $dataRemit[$i]['date'] = ($remit['status'] == 'pending')?'': $remit['date'];

            $i++;

        }

              $i=0;
        foreach($quickPrint_data as  $inv_data2){

            $data[$i]['sn'] = $i+1;
            $data[$i]['agent'] = $inv_data2['agentName'];
            $data[$i]['revPtsName'] = $inv_data2['revPtsName'];
            $data[$i]['lgaName'] = $inv_data2['lgaName'];
            $data[$i]['bank'] = $inv_data2['bank'];
            $data[$i]['description'] = $inv_data2['description'];
            $data[$i]['amount'] = $inv_data2['amount'];
            $data[$i]['payer'] =  env('QUICK_PRINT');
            $data[$i]['status'] = 'success';
            $data[$i]['txn_ref'] = $inv_data2['txn_ref'];
            $data[$i]['payment_type'] = 'cash';
            $data[$i]['date'] = $inv_data2['date'];
            $TotalCashReceipt = $TotalCashReceipt +  $inv_data2['amount'];

            $i++;
        }






        return response()->json([
            'status' => 'success',
            'data' => [

                'grand_total'=>$TotalCashReceipt,
                'unremitted_cash'=> $unremitted_cash,
                'total_remittance'=> $total_remitance,
                'total_generated' => $total_generated,
                'bank' => $bank,
                'cash_receipt' => $data,
                'remittance' => $dataRemit,
                'role_name'=> $roleName

            ]
        ]);




    }




    function getpaymentStatus(){


        $status = [];

//        $status[0]['name'] = 'Paid (Cash)';
//        $status[0]['value'] = 'cash';
        $status[1]['name'] = 'Paid (Card)';
        $status[1]['value'] = 'card';
        $status[2]['name'] = 'Paid (Bank)';
        $status[2]['value'] = 'paid_bank';
        $status[3]['name'] = 'Paid (Cheque)';
        $status[3]['value'] = 'paid_cheque';
        $status[4]['name'] = 'Paid (All)';
        $status[4]['value'] = 'paid';
        $status[5]['name'] = 'Uncleared (Cheque)';
        $status[5]['value'] = 'uncleared_cheque';
        $status[6]['name'] = 'Unpaid (Bank)';
        $status[6]['value'] = 'unpaid_bank';
        $status[7]['name'] = 'Unpaid (All)';
        $status[7]['value'] = 'unpaid';

        return $status;

    }





}
