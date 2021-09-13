<?php

namespace App\Http\Controllers;

use App\Category;
use App\QuickPrintInvoice;
use App\Remittance;
use App\Service;
use App\UnremittedCash;
use Illuminate\Http\Request;
use App\Agent;
use App\Revenue;
use App\Lga;
use App\User;
use App\CorporateTaxPayer;
use App\RevenuePoint;
 use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class agentDashboardController extends Controller
{
    //


      function metrics(Request $request){


          $user = Auth::user();
          $lga_id =  $user->lga_id;
          $category_id =  $user->category_id;


          $validate = $request->validate([
              'fromDate' => 'sometimes',
              'toDate' => 'sometimes',
              'agent_id'=>'sometimes',
              'lga_id'=>'sometimes',
          ]);


          $fromDate =  ($validate['fromDate']== '' )? Carbon::now()->copy()->startOfMonth()->toDateString():$validate['fromDate'];
          $toDate = ($validate['toDate'] == '') ? Carbon::now()->copy()->endOfMonth()->toDateString(): $validate['toDate'];

          $agent =  $validate['agent_id'];
          $lga =  $validate['lga_id'];

                   $quickPrintTotal =0;

          if($user->role_id == env('HOD')) {

              $categoryObj =  Category::where('id', $category_id)->get();   // get dept name of hod
              $category_name = $categoryObj[0]['name'];


              if (  (!isset($agent) ||  trim($agent == '' ) )  ) {


                  // bulk and single
                  $invoices = Revenue::leftjoin('agents', 'revenues.agent_id', '=', 'agents.id')
                      ->leftjoin('revenue_points', 'revenues.revenue_point_id',  'revenue_points.id')
                      ->where([['revenue_points.lga_id', $lga_id], ['agents.dept', 'LIKE', '%' . $category_name . '%']])
                //      ->leftjoin('users', 'users.userable_id', '=', 'revenues.agent_id')
                  //    ->where([['users.role_id','=',env('AGENT')],['users.lga_id', '=', $lga_id],['agents.dept', 'LIKE', '%'.$category_name.'%']])
                ->whereBetween(DB::raw('date(revenues.updated_at)'), [DB::raw('date("' . $fromDate . '")'), DB::raw('date("' . $toDate . '")')])
                      ->get();


                  // quick print
                  $quickPrintTotal = QuickPrintInvoice::leftjoin('agents', 'quick_print_invoices.agent_id', '=', 'agents.id')
                      ->leftjoin('revenue_points', 'quick_print_invoices.revenue_point_id',  'revenue_points.id')
                      ->where([['revenue_points.lga_id', $lga_id], ['agents.dept', 'LIKE', '%' . $category_name . '%']])
                    //  ->leftjoin('users', 'users.userable_id', '=', 'quick_print_invoices.agent_id')
                     // ->where([ ['users.role_id','=',env('AGENT')], ['users.lga_id', '=', $lga_id],['agents.dept', 'LIKE', '%'.$category_name.'%']])
                     // ->whereBetween('quick_print_invoices.updated_at', [ DB::raw('date("' . $fromDate . '")'), DB::raw('date("' . $toDate . '")')])
                      ->whereBetween(DB::raw('date(quick_print_invoices.updated_at)'), [DB::raw('date("' . $fromDate . '")'), DB::raw('date("' . $toDate . '")')])
                      ->sum('quick_print_invoices.amount');


                  $unremitted = Agent::
                  leftjoin('unremitted_cashes','agents.id','unremitted_cashes.agent_id')
                      ->where([['unremitted_cashes.lga_id',$lga_id],['agents.dept', 'LIKE', '%'.$category_name.'%'] ] )
                      ->sum('unremitted_cashes.amount');



//                  $unremitted = Agent::
//                  whereHas('user', function($query) use($lga_id){
//                      $query->where('lga_id','=',$lga_id);
//                  })
//                      ->where([['agents.dept', 'LIKE', '%'.$category_name.'%'],['userable_type','=','App\Agent']] )
//                      ->join('users','users.userable_id','=','agents.id')
//                      ->sum('agents.cash_remittance');


              }



              else if(  isset($agent)     )       // get only selected agent
              {

                  $invoices = Revenue::select('revenues.amount', 'revenues.status')
                      ->where('revenues.agent_id','=', $agent)
                      //->whereBetween('revenues.updated_at', [DB::raw('date("' . $fromDate . '")'), DB::raw('date("' . $toDate . '")')])
                      ->whereBetween(DB::raw('date(revenues.updated_at)'), [DB::raw('date("' . $fromDate . '")'), DB::raw('date("' . $toDate . '")')])
                      ->get();


                  $quickPrintTotal = QuickPrintInvoice::where('agent_id', $agent )
                    //  ->whereBetween('updated_at', [DB::raw('date("' . $fromDate . '")'), DB::raw('date("' . $toDate . '")')])
                      ->whereBetween(DB::raw('date(updated_at)'), [DB::raw('date("' . $fromDate . '")'), DB::raw('date("' . $toDate . '")')])
                      ->sum('amount');

                  $unremitted =  UnremittedCash::where('agent_id', $agent )
                      ->sum('amount');
              }


         }


          else if( ($user->role_id == env('DIR_REVENUE')) ) {


              if (  (!isset($agent) ||  trim($agent == '' ) )  ) {

                         $lga = $lga_id;
                  // bulk and single
                  $invoices =  Revenue::
                  leftjoin('revenue_points', 'revenues.revenue_point_id',  'revenue_points.id')
                      ->where('revenue_points.lga_id', $lga)
                //  leftjoin('users', 'users.userable_id', '=', 'revenues.agent_id')
                  //    ->where([['users.role_id','=',env('AGENT')],['users.lga_id', '=', $lga]])
                      ->whereBetween(DB::raw('date(revenues.updated_at)'), [DB::raw('date("' . $fromDate . '")'), DB::raw('date("' . $toDate . '")')])
                      ->get();

                  // quick print
                  $quickPrintTotal = QuickPrintInvoice::
                  leftjoin('revenue_points', 'quick_print_invoices.revenue_point_id',  'revenue_points.id')
                      ->where('revenue_points.lga_id', $lga)

                //  leftjoin('users', 'users.userable_id', '=', 'quick_print_invoices.agent_id')
                  //    ->where([['users.role_id','=',env('AGENT')],['users.lga_id', '=', $lga]])
                    ->whereBetween(DB::raw('date(quick_print_invoices.updated_at)'), [DB::raw('date("' . $fromDate . '")'), DB::raw('date("' . $toDate . '")')])
                    ->sum('quick_print_invoices.amount');


                  $unremitted = UnremittedCash::
                      where('unremitted_cashes.lga_id',$lga_id )
                      ->sum('unremitted_cashes.amount');

              }

              else if(  isset($agent)   )       // get only selected agent
              {

                  $invoices = Revenue::select('revenues.amount', 'revenues.status')
                      ->where('revenues.agent_id','=', $agent)
                      ->whereBetween(DB::raw('date(revenues.updated_at)'), [DB::raw('date("' . $fromDate . '")'), DB::raw('date("' . $toDate . '")')])
                      ->get();


                  $quickPrintTotal = QuickPrintInvoice::where('agent_id', $agent )
                    ->whereBetween(DB::raw('date(updated_at)'), [DB::raw('date("' . $fromDate . '")'), DB::raw('date("' . $toDate . '")')])
                      ->sum('amount');

                  $unremitted =  UnremittedCash::where('agent_id', $agent )
                      ->sum('amount');
              }


          }


          else {

              //if ($user->role_id == env('ADMIN') || $user->role_id == env('SUPER_ADMIN') ) {



              if (  (!isset($agent) ||  trim($agent == '' ) )  &&  (!isset($lga) ||  trim($lga == '' ) ) ) {


                  $invoices = Revenue::select('revenues.amount', 'revenues.status')
                      //->whereBetween('revenues.updated_at', [DB::raw('date("' . $fromDate . '")'), DB::raw('date("' . $toDate . '")')])
                      ->whereBetween(DB::raw('date(revenues.updated_at)'), [DB::raw('date("' . $fromDate . '")'), DB::raw('date("' . $toDate . '")')])
                      ->get();


                  $quickPrintTotal = QuickPrintInvoice::
                  whereBetween(DB::raw('date(updated_at)'), [DB::raw('date("' . $fromDate . '")'), DB::raw('date("' . $toDate . '")')])
                      ->sum('amount');

                  $unremitted = UnremittedCash::sum('amount');


              }

              else if((!isset($agent) ||  trim($agent == '' ) ) &&   isset($lga)   )   // select a lga with all agents
              {
                  $invoices = Revenue::select('revenues.amount', 'revenues.status')
                    ->leftjoin('revenue_points', 'revenues.revenue_point_id',  'revenue_points.id')
                         ->where('revenue_points.lga_id', $lga)

                    //  ->leftjoin('users', 'users.userable_id', '=', 'revenues.agent_id')
                      //    ->where([['users.role_id','=',env('AGENT')],['users.lga_id', '=', $lga]])
                      ->whereBetween(DB::raw('date(revenues.updated_at)'), [DB::raw('date("' . $fromDate . '")'), DB::raw('date("' . $toDate . '")')])
                      ->get();

                  $quickPrintTotal = QuickPrintInvoice::
                  leftjoin('revenue_points', 'quick_print_invoices.revenue_point_id',  'revenue_points.id')
                      ->where('revenue_points.lga_id', $lga)
                //  leftjoin('users', 'users.userable_id', '=', 'quick_print_invoices.agent_id')
                  //    ->where([['users.role_id','=',env('AGENT')],['users.lga_id', '=', $lga]])
                      ->whereBetween( DB::raw('date(quick_print_invoices.updated_at)'), [DB::raw('date("' . $fromDate . '")'), DB::raw('date("' . $toDate . '")')])
                      ->sum('quick_print_invoices.amount');

                  $unremitted =  UnremittedCash::where('unremitted_cashes.lga_id',$lga )
                      ->sum('amount');

                //  $unremitted = UnremittedCash::sum('amount');

              }

              else if(  isset($agent)  && isset($lga )    )       // get only selected agent
                        {

                  $invoices = Revenue::select('revenues.amount', 'revenues.status')
                      ->where('revenues.agent_id','=', $agent)
                      ->whereBetween('revenues.updated_at', [ DB::raw('date("' . $fromDate . '")'), DB::raw('date("' . $toDate . '")')])
                      ->get();

                  $quickPrintTotal = QuickPrintInvoice::where('agent_id', $agent )
                                ->whereBetween('updated_at', [DB::raw('date("' . $fromDate . '")'), DB::raw('date("' . $toDate . '")')])
                                ->sum('amount');

                  $unremitted = UnremittedCash::where('agent_id', $agent )->sum('amount');

                    }

          }


             // $paidInv = $TotalInv  = 0;
                 $sumPaidInv = $sumTotal =  0;
                     $i =0;
               foreach ($invoices as $invoice ){
                     if( $invoice['status'] == 'success'  )
                         $sumPaidInv  = $sumPaidInv + $invoice['amount'];
                   $sumTotal = $sumTotal + $invoice['amount'];
                   $i++;
               }
          $Total = $sumTotal + $quickPrintTotal;
          $PaidInv = $sumPaidInv + $quickPrintTotal;

          return response()->json([
              'status' => 'success',
              'data' => [
                  'paid_invoice' => $PaidInv,
                  'total_invoice' => $Total,
                  'unremitted_fund' => $unremitted
              ]
          ]);


      }



      function summary(Request $request){


          $user = Auth::user();
          $lga_id =  $user->lga_id;
          $category_id =  $user->category_id;



          $validate = $request->validate([
              'fromDate' => 'sometimes',
              'toDate' => 'sometimes',
              'agent_id'=>'sometimes',
              'lga_id'=>'sometimes',
          ]);


          $fromDate =  ($validate['fromDate']== '' )? Carbon::now()->copy()->startOfMonth()->toDateString():$validate['fromDate']  ;
          $toDate = ($validate['toDate'] == '') ? Carbon::now()->copy()->endOfMonth()->toDateString():$validate['toDate'] ;
          $agent =  $validate['agent_id'];
          $lga =  $validate['lga_id'];        // Only super admin

       $services ='' ; $invoices ='';

          $quickPrints =[];
          if($user->role_id == env('HOD')) {

              $categoryObj =  Category::where('id', $category_id)->get();   // get dept name of hod
              $category_name = $categoryObj[0]['name'];

//              $services = Service::select('services.id', 'services.name')
//                  ->where('category_id',$category_id)
//                  ->get();

              $services = Service::select('services.id','services.name')
                  ->get();

              if (  (!isset($agent) ||  trim($agent == '' ) ) ) {


                  // bulk and single
                  $invoices = Revenue::select('revenues.amount','revenues.service_id')
                      ->leftjoin('agents', 'revenues.agent_id', '=', 'agents.id')
                      ->leftjoin('revenue_points', 'revenues.revenue_point_id',  'revenue_points.id')
                      ->where([['revenues.status','success'],['revenue_points.lga_id', $lga_id], ['agents.dept', 'LIKE', '%' . $category_name . '%']])
                      //->leftjoin('users', 'users.userable_id', '=', 'revenues.agent_id')
                     // ->where([['revenues.status','success'],['users.role_id','=',env('AGENT')],['users.lga_id', '=', $lga_id],['agents.dept', 'LIKE', '%'.$category_name.'%']])
                      ->whereBetween(DB::raw('date(revenues.updated_at)'), [DB::raw('date("' . $fromDate . '")'), DB::raw('date("' . $toDate . '")')])
                      ->get();


                  // quick print
                  $quickPrints = QuickPrintInvoice::select('quick_print_invoices.amount','quick_print_invoices.service_id')
                      ->leftjoin('agents', 'quick_print_invoices.agent_id', '=', 'agents.id')
                      ->leftjoin('revenue_points', 'quick_print_invoices.revenue_point_id',  'revenue_points.id')
                      ->where([['revenue_points.lga_id', $lga_id], ['agents.dept', 'LIKE', '%' . $category_name . '%']])
                     // ->join('users', 'users.userable_id', '=', 'quick_print_invoices.agent_id')
                      // ->where([ ['users.role_id','=',env('AGENT')], ['users.lga_id', '=', $lga_id],['agents.dept', 'LIKE', '%'.$category_name.'%']])
                      ->whereBetween(DB::raw('date(quick_print_invoices.updated_at)'), [DB::raw('date("' . $fromDate . '")'), DB::raw('date("' . $toDate . '")')])
                      ->get();



              }


              else if( isset($agent)   )
              {
                  $invoices = Revenue::select('revenues.amount','revenues.service_id')
                      ->where([['revenues.status','success'],['revenues.agent_id','=', $agent]  ])
                      ->whereBetween(DB::raw('date(revenues.updated_at)'), [DB::raw('date("' . $fromDate . '")'), DB::raw('date("' . $toDate . '")')])
                      ->get();


                  $quickPrints = QuickPrintInvoice::select('quick_print_invoices.amount','quick_print_invoices.service_id')
                      ->where('quick_print_invoices.agent_id','=', $agent)
                      ->whereBetween(DB::raw('date(updated_at)'), [DB::raw('date("' . $fromDate . '")'), DB::raw('date("' . $toDate . '")')])
                      ->get();


              }

          }


          else if( ($user->role_id == env('DIR_REVENUE')) ) {

              $services = Service::select('services.id','services.name')
                  ->get();

              if (  (!isset($agent) ||  trim($agent == '' ) ) ) {

                  // bulk and single
                  $invoices =  Revenue::select('revenues.amount','revenues.service_id')
                   //   ->leftjoin('agents', 'revenues.agent_id', '=', 'agents.id')
                        ->leftjoin('revenue_points', 'revenues.revenue_point_id',  'revenue_points.id')
                       ->where([['revenues.status','success'],['revenue_points.lga_id', $lga_id]])
                     // ->leftjoin('users', 'users.userable_id', '=', 'revenues.agent_id')
                      //->where([['revenues.status','success'],['users.lga_id',$lga_id]])
                      ->whereBetween(DB::raw('date(revenues.updated_at)'), [DB::raw('date("' . $fromDate . '")'), DB::raw('date("' . $toDate . '")')])
                      ->get();

                  // quick print
                  $quickPrints = QuickPrintInvoice::select('quick_print_invoices.amount','quick_print_invoices.service_id')
                      // ->leftjoin('agents', 'quick_print_invoices.agent_id', '=', 'agents.id')
                        ->leftjoin('revenue_points', 'quick_print_invoices.revenue_point_id',  'revenue_points.id')
                            ->where('revenue_points.lga_id', $lga_id)
                      //->leftjoin('users', 'users.userable_id', '=', 'quick_print_invoices.agent_id')
                     // ->where('users.lga_id',$lga_id)
                      ->whereBetween(DB::raw('date(quick_print_invoices.updated_at)'), [DB::raw('date("' . $fromDate . '")'), DB::raw('date("' . $toDate . '")')])
                      ->get();


              }


              else if( isset($agent)   )
              {
                  $invoices = Revenue::select('revenues.amount','revenues.service_id')
                      ->where([['revenues.status','success'],['revenues.agent_id','=', $agent]])
                      ->whereBetween(DB::raw('date(revenues.updated_at)'), [DB::raw('date("' . $fromDate . '")'), DB::raw('date("' . $toDate . '")')])
                      ->get();


                  $quickPrints = QuickPrintInvoice::select('quick_print_invoices.amount','quick_print_invoices.service_id')
                      ->where('quick_print_invoices.agent_id','=', $agent)
                      ->whereBetween(DB::raw('date(updated_at)'), [DB::raw('date("' . $fromDate . '")'), DB::raw('date("' . $toDate . '")')])
                      ->get();


              }


          }

          else {

              //if ($user->role_id == env('ADMIN') || $user->role_id == env('SUPER_ADMIN') ) {

              $services = Service::select('services.id','services.name')
               ->get();

              if (  (!isset($agent) ||  trim($agent == '' ) )  &&  (!isset($lga) ||  trim($lga == '' ) ) ) {

                  $invoices = Revenue::select( 'revenues.service_id',  'revenues.amount')
                    //  ->leftjoin('users', 'users.userable_id', '=', 'revenues.agent_id')
                      ->where('revenues.status','success')
                      ->whereBetween(DB::raw('date(revenues.updated_at)'), [DB::raw('date("' . $fromDate . '")'), DB::raw('date("' . $toDate . '")')])
                      ->get();

                  $quickPrints = QuickPrintInvoice::select('quick_print_invoices.service_id',  'quick_print_invoices.amount')
                    //  ->leftjoin('users', 'users.userable_id', '=', 'quick_print_invoices.agent_id')
                      //->where('users.role_id', env('AGENT'))
                      ->whereBetween(DB::raw('date(quick_print_invoices.updated_at)'), [DB::raw('date("' . $fromDate . '")'), DB::raw('date("' . $toDate . '")')])
                      ->get();


              }

              else if((!isset($agent) ||  trim($agent == '' ) ) &&   isset($lga)   )
              {
                  $invoices = Revenue::select('revenues.amount','revenues.service_id')
                          ->leftjoin('revenue_points', 'revenues.revenue_point_id',  'revenue_points.id')
                              ->where([['revenues.status', '=', 'success'],['revenue_points.lga_id', $lga]])
                  //    ->leftjoin('agents', 'revenues.agent_id', '=', 'agents.id')
                    //  ->leftjoin('users', 'users.userable_id', '=', 'revenues.agent_id')
                     // ->where([['revenues.status', '=', 'success'], ['users.role_id', env('AGENT')],['users.lga_id',$lga]])
                      ->whereBetween(DB::raw('date(revenues.updated_at)'), [DB::raw('date("' . $fromDate . '")'), DB::raw('date("' . $toDate . '")')])
                      ->get();


                  $quickPrints = QuickPrintInvoice::select('quick_print_invoices.amount','quick_print_invoices.service_id')
                     // ->leftjoin('agents', 'quick_print_invoices.agent_id', '=', 'agents.id')
                     ->leftjoin('revenue_points', 'quick_print_invoices.revenue_point_id',  'revenue_points.id')
                      ->where('revenue_points.lga_id', $lga)

                   //  ->leftjoin('users', 'users.userable_id', '=', 'quick_print_invoices.agent_id')
                     // ->where([['users.role_id', env('AGENT')],['users.lga_id',$lga]])
                    //  ->where('revenue_points.lga_id','=', $lga)
                      ->whereBetween( DB::raw('date(quick_print_invoices.updated_at)'), [DB::raw('date("' . $fromDate . '")'), DB::raw('date("' . $toDate . '")')])
                      ->get();


              }

              else if( isset($agent)  && isset($lga)  )
              {
                  $invoices = Revenue::select('revenues.amount','revenues.service_id')
                      ->where([['revenues.status','success'],['revenues.agent_id','=', $agent]])
                      ->whereBetween(DB::raw('date(revenues.updated_at)'), [DB::raw('date("' . $fromDate . '")'), DB::raw('date("' . $toDate . '")')])
                      ->get();


                  $quickPrints = QuickPrintInvoice::select('quick_print_invoices.amount','quick_print_invoices.service_id')
                      ->where('quick_print_invoices.agent_id','=', $agent)
                      ->whereBetween(DB::raw('date(updated_at)'), [DB::raw('date("' . $fromDate . '")'), DB::raw('date("' . $toDate . '")')])
                      ->get();


              }

          }



                    $data = array();
                   $i=0;
                foreach( $services as $service) {

                    $data[$i]['sn'] = $i+1;
                    $data[$i]['serviceName'] = $service['name'];

                    $sumTotal = $sumBSInv = $sumQPInv = 0;
                       // $k=0;
                    foreach ($invoices as $invoice) {

                        if ($service['id'] == $invoice['service_id']){
                            $sumBSInv = $sumBSInv + $invoice['amount'];     // To add up identified payer invoice
                            $sumTotal = $sumTotal + $invoice['amount'];
                        }


                     //    $k++;
                    };

                    foreach ($quickPrints as $invoice2) {

                        if($service['id'] == $invoice2['service_id']  ) {
                            $sumQPInv = $sumQPInv + $invoice2['amount'];
                            $sumTotal = $sumTotal + $invoice2['amount'];
                        }
                            // To add up Quick

                      //  $k++;
                    };


                      $data[$i]['bulkSingle'] = $sumBSInv;
                    $data[$i]['quickPrint'] =$sumQPInv;
                    $data[$i]['total'] = $sumTotal;

                    $i++;

                }



          return response()->json([
              'status' => 'success',

              'data' => [

                  'summary' => $data
              ],
          ]);

      }



       function bulkSingleInvoice(Request $request){


           $user = Auth::user();
           $lga_id =  $user->lga_id;
           $category_id =  $user->category_id;



           $validate = $request->validate([
               'fromDate' => 'sometimes',
               'toDate' => 'sometimes',
               'agent_id'=>'sometimes',
               'lga_id'=>'sometimes',
           ]);

           $fromDate =  ($validate['fromDate']== '' )? Carbon::now()->copy()->startOfMonth()->toDateString():$validate['fromDate']  ;
           $toDate = ($validate['toDate'] == '') ? Carbon::now()->copy()->endOfMonth()->toDateString():$validate['toDate'] ;
           $agent =  $validate['agent_id'];
           $lga =  $validate['lga_id'];

           if($user->role_id == env('HOD')) {


               $categoryObj =  Category::where('id', $category_id)->get();   // get dept name of hod
               $category_name = $categoryObj[0]['name'];

               if (  (!isset($agent) ||  trim($agent == '' ) )  ) {

                   $singles = Revenue::select( 'logs.full_name','logs.birs_id as birsID','revenues.transaction_reference as txnRef',
                       'services.name as serviceName','lgas.name as lgaName','revenues.amount',
                       'revenue_points.name as revPointName','revenues.status')
                       ->join('revenue_points', 'revenues.revenue_point_id', '=', 'revenue_points.id')
                       ->join('lgas', 'lgas.id', '=', 'revenue_points.lga_id')
                       ->join('logs', 'logs.id', '=', 'revenues.log_id')
                       ->join('services', 'services.id', '=', 'revenues.service_id')
                       ->join('agents', 'revenues.agent_id', '=', 'agents.id')
                       ->where([['revenue_points.lga_id',$lga_id],['agents.dept', 'LIKE', '%'.$category_name.'%']])
                       ->whereBetween(DB::raw('date(revenues.updated_at)'), [DB::raw('date("' . $fromDate . '")'), DB::raw('date("' . $toDate . '")')])
                       ->get();

                   $bulks = Revenue::select('users.name', 'revenues.transaction_reference as txnRef',
                       'services.name as serviceName','lgas.name as lgaName','revenues.amount',
                       'revenue_points.name as revPointName','revenues.status')
                       ->join('revenue_points', 'revenues.revenue_point_id', '=', 'revenue_points.id')
                       ->join('users','users.userable_id','=','revenues.agent_id')
                       ->join('lgas', 'lgas.id', '=', 'revenue_points.lga_id')
                       ->join('services', 'services.id', '=', 'revenues.service_id')
                       ->join('agents', 'revenues.agent_id', '=', 'agents.id')
                       ->where([['users.role_id','=', env('AGENT')], ['agents.dept', 'LIKE', '%'.$category_name.'%'],['revenue_points.lga_id',$lga_id],['revenues.payment_category','=','bulk']] )
                       ->whereBetween(DB::raw('date(revenues.updated_at)'), [DB::raw('date("' . $fromDate . '")'), DB::raw('date("' . $toDate . '")')])
                       ->get();


               }

               else if(isset($agent) )
               {
                   $singles = Revenue::select( 'logs.full_name','logs.birs_id as birsID','revenues.transaction_reference as txnRef',
                       'services.name as serviceName','lgas.name as lgaName','revenues.amount',
                       'revenue_points.name as revPointName','revenues.status')
                       ->join('revenue_points', 'revenues.revenue_point_id', '=', 'revenue_points.id')
                       ->join('lgas', 'lgas.id', '=', 'revenue_points.lga_id')
                       ->join('logs', 'logs.id', '=', 'revenues.log_id')
                       ->join('services', 'services.id', '=', 'revenues.service_id')
                       ->where('revenues.agent_id','=', $agent)
                       ->whereBetween(DB::raw('date(revenues.updated_at)'), [DB::raw('date("' . $fromDate . '")'), DB::raw('date("' . $toDate . '")')])
                       ->get();

                   $bulks = Revenue::select('users.name', 'revenues.transaction_reference as txnRef',
                       'services.name as serviceName','lgas.name as lgaName','revenues.amount',
                       'revenue_points.name as revPointName','revenues.status')
                       ->join('revenue_points', 'revenues.revenue_point_id', '=', 'revenue_points.id')
                       ->join('users','users.userable_id','=','revenues.agent_id')
                       ->join('lgas', 'lgas.id', '=', 'revenue_points.lga_id')
                       ->join('services', 'services.id', '=', 'revenues.service_id')
                       ->where([['users.role_id','=', env('AGENT')],['revenues.agent_id','=', $agent],['revenues.payment_category','=','bulk']] )
                       ->whereBetween(DB::raw('date(revenues.updated_at)'), [DB::raw('date("' . $fromDate . '")'), DB::raw('date("' . $toDate . '")')])
                       ->get();

               }

           }

           else if( ($user->role_id == env('DIR_REVENUE'))  ) {

               if (  (!isset($agent) ||  trim($agent == '' ) )  ) {

                   $singles = Revenue::select( 'logs.full_name','logs.birs_id as birsID','revenues.transaction_reference as txnRef',
                       'services.name as serviceName','lgas.name as lgaName','revenues.amount',
                       'revenue_points.name as revPointName','revenues.status')
                       ->join('revenue_points', 'revenues.revenue_point_id', '=', 'revenue_points.id')
                       ->join('lgas', 'lgas.id', '=', 'revenue_points.lga_id')
                       ->join('logs', 'logs.id', '=', 'revenues.log_id')
                       ->join('services', 'services.id', '=', 'revenues.service_id')
                       ->where('revenue_points.lga_id',$lga_id)
                       ->whereBetween(DB::raw('date(revenues.updated_at)'), [DB::raw('date("' . $fromDate . '")'), DB::raw('date("' . $toDate . '")')])
                       ->get();

                   $bulks = Revenue::select('users.name', 'revenues.transaction_reference as txnRef',
                       'services.name as serviceName','lgas.name as lgaName','revenues.amount',
                       'revenue_points.name as revPointName','revenues.status')
                       ->join('revenue_points', 'revenues.revenue_point_id', '=', 'revenue_points.id')
                       ->join('users','users.userable_id','=','revenues.agent_id')
                       ->join('lgas', 'lgas.id', '=', 'revenue_points.lga_id')
                       ->join('services', 'services.id', '=', 'revenues.service_id')
                       ->where([['users.role_id','=', env('AGENT')],['revenue_points.lga_id',$lga_id],['revenues.payment_category','=','bulk']] )
                       ->whereBetween(DB::raw('date(revenues.updated_at)'), [DB::raw('date("' . $fromDate . '")'), DB::raw('date("' . $toDate . '")')])
                       ->get();


               }

               else if(isset($agent) )
               {
                   $singles = Revenue::select( 'logs.full_name','logs.birs_id as birsID','revenues.transaction_reference as txnRef',
                       'services.name as serviceName','lgas.name as lgaName','revenues.amount',
                       'revenue_points.name as revPointName','revenues.status')
                       ->join('revenue_points', 'revenues.revenue_point_id', '=', 'revenue_points.id')
                       ->join('lgas', 'lgas.id', '=', 'revenue_points.lga_id')
                       ->join('logs', 'logs.id', '=', 'revenues.log_id')
                       ->join('services', 'services.id', '=', 'revenues.service_id')
                       ->where('revenues.agent_id','=', $agent)
                       ->whereBetween(DB::raw('date(revenues.updated_at)'), [DB::raw('date("' . $fromDate . '")'), DB::raw('date("' . $toDate . '")')])
                       ->get();

                   $bulks = Revenue::select('users.name', 'revenues.transaction_reference as txnRef',
                       'services.name as serviceName','lgas.name as lgaName','revenues.amount',
                       'revenue_points.name as revPointName','revenues.status')
                       ->join('revenue_points', 'revenues.revenue_point_id', '=', 'revenue_points.id')
                       ->join('users','users.userable_id','=','revenues.agent_id')
                       ->join('lgas', 'lgas.id', '=', 'revenue_points.lga_id')
                       ->join('services', 'services.id', '=', 'revenues.service_id')
                       ->where([['users.role_id','=', env('AGENT')],['revenues.agent_id','=', $agent],['revenues.payment_category','=','bulk']] )
                       ->whereBetween(DB::raw('date(revenues.updated_at)'), [DB::raw('date("' . $fromDate . '")'), DB::raw('date("' . $toDate . '")')])
                       ->get();

               }


           }


           else{
               //if ($user->role_id == env('ADMIN') || $user->role_id == env('SUPER_ADMIN') ) {


               if (  (!isset($agent) ||  trim($agent == '' ) )  &&  (!isset($lga) ||  trim($lga == '' ) ) ) {
                   $singles = Revenue::select( 'logs.full_name','logs.birs_id as birsID','revenues.transaction_reference as txnRef',
                       'services.name as serviceName','lgas.name as lgaName','revenues.amount',
                       'revenue_points.name as revPointName','revenues.status')
                        ->join('revenue_points', 'revenues.revenue_point_id', '=', 'revenue_points.id')
                       ->join('lgas', 'lgas.id', '=', 'revenue_points.lga_id')
                       ->join('logs', 'logs.id', '=', 'revenues.log_id')
                       ->join('services', 'services.id', '=', 'revenues.service_id')
                       ->whereBetween(DB::raw('date(revenues.updated_at)'), [DB::raw('date("' . $fromDate . '")'), DB::raw('date("' . $toDate . '")')])
                       ->get();

                   $bulks = Revenue::select('users.name', 'revenues.transaction_reference as txnRef',
                       'services.name as serviceName','lgas.name as lgaName','revenues.amount',
                       'revenue_points.name as revPointName','revenues.status')
                       ->join('revenue_points', 'revenues.revenue_point_id', '=', 'revenue_points.id')
                       ->join('users','users.userable_id','=','revenues.agent_id')
                       ->join('lgas', 'lgas.id', '=', 'revenue_points.lga_id')
                       ->join('services', 'services.id', '=', 'revenues.service_id')
                       ->where([['users.role_id','=', env('AGENT')],['revenues.payment_category','=','bulk']] )
                       ->whereBetween(DB::raw('date(revenues.updated_at)'), [DB::raw('date("' . $fromDate . '")'), DB::raw('date("' . $toDate . '")')])
                       ->get();







               }

               else if( (!isset($agent) ||  trim($agent == '' ) ) &&   isset($lga)   )
               {




                   $singles = Revenue::select( 'logs.full_name','logs.birs_id as birsID','revenues.transaction_reference as txnRef',
                       'services.name as serviceName','lgas.name as lgaName','revenues.amount',
                       'revenue_points.name as revPointName','revenues.status')
                       ->join('revenue_points', 'revenues.revenue_point_id', '=', 'revenue_points.id')
                       ->join('lgas', 'lgas.id', '=', 'revenue_points.lga_id')
                       ->join('logs', 'logs.id', '=', 'revenues.log_id')
                       ->join('services', 'services.id', '=', 'revenues.service_id')
                       ->where('revenue_points.lga_id','=', $lga)
                       ->whereBetween(DB::raw('date(revenues.updated_at)'), [DB::raw('date("' . $fromDate . '")'), DB::raw('date("' . $toDate . '")')])
                       ->get();

                   $bulks = Revenue::select('users.name', 'revenues.transaction_reference as txnRef',
                       'services.name as serviceName','lgas.name as lgaName','revenues.amount',
                       'revenue_points.name as revPointName','revenues.status')
                       ->join('revenue_points', 'revenues.revenue_point_id', '=', 'revenue_points.id')
                       ->join('users','users.userable_id','=','revenues.agent_id')
                       ->join('lgas', 'lgas.id', '=', 'revenue_points.lga_id')
                       ->join('services', 'services.id', '=', 'revenues.service_id')
                       ->where([['users.role_id','=', env('AGENT')],['revenue_points.lga_id','=', $lga],['revenues.payment_category','=','bulk']] )
                       ->whereBetween(DB::raw('date(revenues.updated_at)'), [DB::raw('date("' . $fromDate . '")'), DB::raw('date("' . $toDate . '")')])
                       ->get();


               }

               else if(isset($agent) && isset($lga) )
               {
                   $singles = Revenue::select( 'logs.full_name','logs.birs_id as birsID','revenues.transaction_reference as txnRef',
                       'services.name as serviceName','lgas.name as lgaName','revenues.amount',
                       'revenue_points.name as revPointName','revenues.status')
                       ->join('revenue_points', 'revenues.revenue_point_id', '=', 'revenue_points.id')
                       ->join('lgas', 'lgas.id', '=', 'revenue_points.lga_id')
                       ->join('logs', 'logs.id', '=', 'revenues.log_id')
                       ->join('services', 'services.id', '=', 'revenues.service_id')
                       ->where('revenues.agent_id','=', $agent)
                       ->whereBetween(DB::raw('date(revenues.updated_at)'), [DB::raw('date("' . $fromDate . '")'), DB::raw('date("' . $toDate . '")')])
                       ->get();

                   $bulks = Revenue::select('users.name', 'revenues.transaction_reference as txnRef',
                       'services.name as serviceName','lgas.name as lgaName','revenues.amount',
                       'revenue_points.name as revPointName','revenues.status')
                       ->join('revenue_points', 'revenues.revenue_point_id', '=', 'revenue_points.id')
                       ->join('users','users.userable_id','=','revenues.agent_id')
                       ->join('lgas', 'lgas.id', '=', 'revenue_points.lga_id')
                       ->join('services', 'services.id', '=', 'revenues.service_id')
                       ->where([['users.role_id','=', env('AGENT')],['revenues.agent_id','=', $agent],['revenues.payment_category','=','bulk']] )
                       ->whereBetween(DB::raw('date(revenues.updated_at)'), [DB::raw('date("' . $fromDate . '")'), DB::raw('date("' . $toDate . '")')])
                       ->get();



               }

           }




                   $data = array();
                     $i=0;
                  foreach($singles as $invoice){

                      $data[$i]['sn'] = $i+1;
                      $data[$i]['name'] = ($invoice['full_name'] == '' )?'No Name':$invoice['full_name'];
                      $data[$i]['birsId'] = $invoice['birsID'];
                      $data[$i]['txnRef'] = $invoice['txnRef'];
                      $data[$i]['amount'] = $invoice['amount'];
                      $data[$i]['lgaName'] = $invoice['lgaName'];
                      $data[$i]['serviceName'] = $invoice['serviceName'];
                      $data[$i]['revPointName'] = $invoice['revPointName'];
                      $data[$i]['status'] = $invoice['status'];

                       $i++;
                  }

           foreach($bulks as $invoice){

               $data[$i]['sn'] = $i+1;
               $data[$i]['name'] =  $invoice['name'];   // ($invoice['name'] == '' )?'No Name':$invoice['full_name'];
               $data[$i]['birsId'] = '';
               $data[$i]['txnRef'] = $invoice['txnRef'];
               $data[$i]['amount'] = $invoice['amount'];
               $data[$i]['lgaName'] = $invoice['lgaName'];
               $data[$i]['serviceName'] = $invoice['serviceName'];
               $data[$i]['revPointName'] = $invoice['revPointName'];
               $data[$i]['status'] = $invoice['status'];

               $i++;
           }



           return response()->json([
               'status' => 'success',

               'data' => [
                   'identifiedPayer' => $data
               ],
           ]);

       }


       function collectionDetails(Request $request){

      $user = Auth::user();
      $lga_id =  $user->lga_id;
      $category_id =  $user->category_id;


      $validate = $request->validate([
          'fromDate' => 'sometimes',
          'toDate' => 'sometimes',
           'lga_id' => 'sometimes'
          //  'agent_id'=>'sometimes'
      ]);

           $fromDate =  ($validate['fromDate']== '' )? Carbon::now()->copy()->startOfMonth()->toDateString():$validate['fromDate']  ;
           $toDate = ($validate['toDate'] == '') ? Carbon::now()->copy()->endOfMonth()->toDateString():$validate['toDate'] ;
    //  $agent =  $validate['agent_id'];
           $lga =  $validate['lga_id'];

           $services ='' ; $invoices ='';

          $quickPrint=[];
      if($user->role_id == env('HOD')) {


          $categoryObj =  Category::where('id', $category_id)->get();   // get dept name of hod
          $category_name = $categoryObj[0]['name'];
          $lga = $user->lga_id;

          $invoices = Revenue::select('revenues.agent_id', 'revenues.amount', 'revenues.status')
            //  ->leftjoin('users', 'users.userable_id', 'revenues.agent_id')
             ->  leftjoin('revenue_points', 'revenues.revenue_point_id',  'revenue_points.id')
              ->leftjoin('agents', 'users.userable_id', 'agents.id')
              ->where([['revenue_point_invoices.lga_id',$lga],['agents.dept', 'LIKE', '%'.$category_name.'%'], ['users.role_id', env('AGENT')]])
              ->whereBetween(DB::raw('date(revenues.updated_at)'), [DB::raw('date("' . $fromDate . '")'), DB::raw('date("' . $toDate . '")')])
              ->get();

          $remits = Remittance::select('remittances.agent_id', 'remittances.amount')
                  ->leftjoin('agents', 'remittances.agent_id', '=', 'agents.id')
              ->where([['remittances.status', '=', 'success'],['remittances.lga_id','=',$lga_id],
                  ['agents.dept', 'LIKE', '%'.$category_name.'%']])
              ->whereBetween(DB::raw('date(remittances.updated_at)'), [DB::raw('date("' . $fromDate . '")'), DB::raw('date("' . $toDate . '")')])
              ->get();

          $quickPrint = QuickPrintInvoice::
         // leftjoin('revenue_points', 'quick_print_invoices.revenue_point_id', '=', 'revenue_points.id')
              leftjoin('users', 'users.userable_id', 'quick_print_invoices.agent_id')
             ->  leftjoin('revenue_points', 'quick_print_invoices.revenue_point_id',  'revenue_points.id')
              ->leftjoin('agents', 'quick_print_invoices.agent_id', '=', 'agents.id')
              ->where([['quick_print_invoices.lga_id', $lga_id],['users.role_id',env('AGENT')],['agents.dept', 'LIKE', '%'.$category_name.'%']] )
              ->whereBetween(DB::raw('date(quick_print_invoices.updated_at)'), [DB::raw('date("' . $fromDate . '")'), DB::raw('date("' . $toDate . '")')])
              ->get();

          $agents =  Agent::select('agents.id', 'lgas.name as lgName', 'users.name',DB::raw('sum(unremitted_cashes.amount) as unremitted'))
              ->leftjoin('unremitted_cashes', 'agents.id','unremitted_cashes.agent_id')
              -> leftjoin('users','users.userable_id','=','agents.id')
              ->leftjoin('lgas', 'users.lga_id', '=', 'lgas.id')
              ->where([['agents.dept', 'LIKE', '%'.$category_name.'%'],['unremitted_cashes.lga_id','=',$lga_id]] )
              ->groupBy('unremitted_cashes.agent_id')
              ->get();


      }



      else if( ($user->role_id == env('DIR_REVENUE')) ) {

          $lga = $user->lga_id;
          $invoices = Revenue::select('revenues.agent_id', 'revenues.amount', 'revenues.status')
             ->leftjoin('revenue_points', 'revenues.revenue_point_id', '=', 'revenue_points.id')
            // ->leftjoin('users','users.userable_id','revenues.agent_id')
             ->where('revenue_points.lga_id', '=', $lga )
              ->whereBetween(DB::raw('date(revenues.updated_at)'), [DB::raw('date("' . $fromDate . '")'), DB::raw('date("' . $toDate . '")')])
              ->get();

          $remits = Remittance::select('remittances.agent_id', 'remittances.amount')
//              ->leftjoin('users', 'users.userable_id', '=', 'remittances.agent_id')
              ->where([['remittances.status', 'success'],['remittances.lga_id', $lga]])
              ->whereBetween(DB::raw('date(remittances.updated_at)'), [DB::raw('date("' . $fromDate . '")'), DB::raw('date("' . $toDate . '")')])
              ->get();

          $quickPrint = QuickPrintInvoice::
          //leftjoin('users','users.userable_id','revenues.agent_id')
              leftjoin('revenue_points', 'quick_print_invoices.revenue_point_id', '=', 'revenue_points.id')
             // ->where('users.lga_id', '=', $lga )
              ->where('revenue_points.lga_id', $lga )
              -> whereBetween(DB::raw('date(quick_print_invoices.updated_at)'), [DB::raw('date("' . $fromDate . '")'), DB::raw('date("' . $toDate . '")')])
              ->get();

          $agents =  Agent::select('agents.id', 'lgas.name as lgName', 'users.name',DB::raw('sum(unremitted_cashes.amount) as unremitted'))
              ->leftjoin('unremitted_cashes', 'agents.id','unremitted_cashes.agent_id')
             -> leftjoin('users','users.userable_id','=','agents.id')
              ->leftjoin('lgas', 'unremitted_cashes.lga_id', '=', 'lgas.id')
              ->where('lgas.id','=',$lga_id )
              ->groupBy('unremitted_cashes.agent_id')
              ->get();



      }


      else {
          //if ( $user->role_id == env('ADMIN') || $user->role_id == env('SUPER_ADMIN')   ) {

          if (   (!isset($lga) ||  trim($lga == '' ) ) ) {

              $invoices = Revenue::select('revenues.agent_id', 'revenues.amount', 'revenues.status')
                  ->whereBetween(DB::raw('date(revenues.updated_at)'), [DB::raw('date("' . $fromDate . '")'), DB::raw('date("' . $toDate . '")')])
                  ->get();

          $remits = Remittance::select('remittances.agent_id', 'remittances.amount')
            //  ->leftjoin('agents', 'agents.id', 'remittances.agent_id')
//              ->leftjoin('users', 'users.userable_id', '=', 'agents.id')
              ->where('remittances.status', 'success')
              ->whereBetween(DB::raw('date(remittances.updated_at)'), [DB::raw('date("' . $fromDate . '")'), DB::raw('date("' . $toDate . '")')])
              ->get();

          $quickPrint = QuickPrintInvoice::
          whereBetween(DB::raw('date(updated_at)'), [DB::raw('date("' . $fromDate . '")'), DB::raw('date("' . $toDate . '")')])
              ->get();




          $agents = Agent::select('agents.id', 'lgas.name as lgName', 'users.name',DB::raw('sum(unremitted_cashes.amount) as unremitted'))
              ->leftjoin('unremitted_cashes', 'agents.id','unremitted_cashes.agent_id')
              ->leftjoin('users', 'users.userable_id',  'agents.id')
              ->leftjoin('lgas', 'unremitted_cashes.lga_id',  'lgas.id')
             // ->where('users.role_id',  env('AGENT'))
              ->groupBy('unremitted_cashes.agent_id')
              ->get();

         //  $unremitted = UnremittedCash::get();
      }
       else if( isset($lga)) {


           $invoices = Revenue::select('revenues.agent_id', 'revenues.amount', 'revenues.status')
                 ->leftjoin('revenue_points', 'revenues.revenue_point_id',  'revenue_points.id')
                     ->where('revenue_points.lga_id', $lga)
             // ->leftjoin('users','users.userable_id','revenues.agent_id')
               //    ->where([['users.lga_id', '=', $lga],['users.role_id',env('AGENT')]] )
                   ->whereBetween(DB::raw('date(revenues.updated_at)'), [DB::raw('date("' . $fromDate . '")'), DB::raw('date("' . $toDate . '")')])
                   ->get();

           $remits = Remittance::select('remittances.agent_id', 'remittances.amount')
              // ->leftjoin('users', 'users.userable_id', '=', 'remittances.agent_id')
               ->where([['remittances.status', '=', 'success'],['remittances.lga_id','=',$lga]])
               ->whereBetween(DB::raw('date(remittances.updated_at)'), [DB::raw('date("' . $fromDate . '")'), DB::raw('date("' . $toDate . '")')])
               ->get();

           $quickPrint = QuickPrintInvoice::
           leftjoin('revenue_points', 'quick_print_invoices.revenue_point_id',  'revenue_points.id')
               ->where('revenue_points.lga_id', $lga)
          // leftjoin('users','users.userable_id','quick_print_invoices.agent_id')
            //   ->where([['users.lga_id', '=', $lga],['users.role_id',env('AGENT')]] )
               ->whereBetween(DB::raw('date(quick_print_invoices.updated_at)'), [DB::raw('date("' . $fromDate . '")'), DB::raw('date("' . $toDate . '")')])
               ->get();

           $agents =  Agent::select('agents.id', 'lgas.name as lgName', 'users.name',DB::raw('sum(unremitted_cashes.amount) as unremitted'))
               ->leftjoin('unremitted_cashes', 'agents.id','unremitted_cashes.agent_id')
          //     -> leftjoin('users','users.userable_id','=','agents.id')
               ->leftjoin('lgas', 'unremitted_cashes.lga_id', '=', 'lgas.id')
               ->where('unremitted_cashes.lga_id',$lga )
               ->groupBy('unremitted_cashes.agent_id')
               ->get();


             }


      }



      $data = array();
      $i=0;
      foreach( $agents as $agent) {

          $data[$i]['sn'] = $i+1;
          $data[$i]['agentName'] = $agent['name'];
          $data[$i]['lgaName'] = $agent['lgName'];

          $sumTotal = $sumReceipt = 0;
          foreach ($invoices as $invoice) {
              if (  $agent['id'] == $invoice['agent_id'] ) {
                  $sumTotal = $sumTotal + $invoice['amount'];
                  if($invoice['status'] == 'success')
                      $sumReceipt=  $sumReceipt + $invoice['amount'];
              }

          };




          foreach ($quickPrint as $invoice2) {
              if (  $agent['id'] == $invoice2['agent_id'] ) {
                  $sumReceipt =  $sumReceipt + $invoice2['amount'];
                  $sumTotal = $sumTotal + $invoice2['amount'];
              }

          };



          $sumRemit = 0;
          foreach ($remits as $remit) {

              if ($agent['id'] == $remit['agent_id'])
                  $sumRemit = $sumRemit + $remit['amount'];

          }
//               $u=0;
//           foreach($unremitted as $unremit){
//               if ($agent['id'] == $unremit['agent_id'])
//                    $u = $u+ $unremit['amount'];
//           }

          $data[$i]['totalInvoice'] = $sumTotal;
          $data[$i]['totalReceipt'] = $sumReceipt ;
          $data[$i]['unremitted'] =$agent['unremitted'];
          $data[$i]['remitted'] = $sumRemit ;


          $i++;

      }



      return response()->json([
          'status' => 'success',
          'data' => [
              'collection' => $data
          ],
      ]);






  }


    function remittance(Request $request){       // remittance per agent

        $validate = $request->validate([
            'fromDate' => 'sometimes',
            'toDate' => 'sometimes',
             'agent_id'=>'required',
              'lga_id' => 'sometimes'
        ]);

        $fromDate =  ($validate['fromDate']== '' )? Carbon::now()->copy()->startOfMonth()->toDateString():$validate['fromDate']  ;
        $toDate = ($validate['toDate'] == '') ? Carbon::now()->copy()->endOfMonth()->toDateString():$validate['toDate'] ;
        $agent =  $validate['agent_id'];
        $lga =  $validate['lga_id'];

            $remits = Remittance::where('agent_id',$agent)
             ->whereBetween(DB::raw('date(remittances.created_at)'), [DB::raw('date("' . $fromDate . '")'), DB::raw('date("' . $toDate . '")')])
                ->get();


            $info = User::select('users.name', 'lgas.name as lga_name')
                    ->join('lgas','lgas.id','=','users.lga_id')
                    ->where([['users.lga_id',$lga],['userable_id','=',$agent]] )
                     ->get();

            $agent_data['agent_name'] = $info[0]['name'];
        $agent_data['lga_name'] = $info[0]['lga_name'];


        $data = array();
        $i=0;

           foreach($remits as $remit){

                 $data[$i]['sn'] = $i+1;
               $data[$i]['amount'] = $remit['amount'];
               $data[$i]['txn_ref'] = $remit['transaction_reference'];
               $data[$i]['payment_type'] = $remit['payment_type'];
               $data[$i]['status'] = $remit['status'];
               $data[$i]['created_date'] = $remit['created_at'];
               $data[$i]['payment_date'] = ($remit['status'] == 'pending')?'':$remit['updated_at'];

                $i++;
           }




        return response()->json([
            'status' => 'success',
            'data' => [
                'remit' => $data,
                'agent_data'=> $agent_data
            ],
        ]);

    }



    function remittanceForAllAgents(Request $request){       // remitance for all agents

        $validate = $request->validate([
            'fromDate' => 'sometimes',
            'toDate' => 'sometimes',
             'lga_id'=>'sometimes',
        ]);

        $fromDate =  ($validate['fromDate']== '' )? Carbon::now()->copy()->startOfMonth()->toDateString():$validate['fromDate']  ;
        $toDate = ($validate['toDate'] == '') ? Carbon::now()->copy()->endOfMonth()->toDateString():$validate['toDate'] ;
        $lga =  $validate['lga_id'];

        $user = Auth::user();
        $lga_id =  $user->lga_id;
        $category_id =  $user->category_id;


        if($user->role_id == env('HOD')) {

            $categoryObj =  Category::where('id', $category_id)->get();   // get dept name of hod
            $category_name = $categoryObj[0]['name'];

            $remits = Remittance::select('users.name', 'remittances.amount', 'remittances.transaction_reference', 'remittances.payment_type', 'remittances.amount', 'remittances.updated_at',
                'remittances.status', 'remittances.updated_at')
               ->join('users', 'users.userable_id', '=', 'remittances.agent_id')
                ->join('agents', 'remittances.agent_id', '=', 'agents.id')
                ->where([['remittances.lga_id',$lga_id],['agents.dept', 'LIKE', '%'.$category_name.'%']])
                ->whereBetween(DB::raw('date(remittances.updated_at)'), [DB::raw('date("' . $fromDate . '")'), DB::raw('date("' . $toDate . '")')])
                ->get();



        }

        else if( ($user->role_id == env('DIR_REVENUE')) ) {

                $remits = Remittance::select('users.name', 'remittances.amount', 'remittances.transaction_reference', 'remittances.payment_type', 'remittances.amount', 'remittances.updated_at',
                    'remittances.status', 'remittances.updated_at')
                   ->join('users', 'users.userable_id', '=', 'remittances.agent_id')
                    ->where('remittances.lga_id',$lga_id)
                    ->whereBetween(DB::raw('date(remittances.updated_at)'), [DB::raw('date("' . $fromDate . '")'), DB::raw('date("' . $toDate . '")')])
                    ->get();



        }


        else{
            //if( $user->role_id == env('ADMIN') || $user->role_id == env('SUPER_ADMIN') ) {

            if (!isset($lga) || trim($lga == '') )
                $remits = Remittance::select('users.name', 'remittances.amount', 'remittances.transaction_reference', 'remittances.payment_type', 'remittances.amount', 'remittances.updated_at',
                    'remittances.status', 'remittances.updated_at')
                   ->join('users', 'users.userable_id', '=', 'remittances.agent_id')
                  //  ->where([['users.role_id', '=', env('AGENT')]])
                    ->whereBetween(DB::raw('date(remittances.updated_at)'), [DB::raw('date("' . $fromDate . '")'), DB::raw('date("' . $toDate . '")')])
                    ->get();


            else
                $remits = Remittance::select('users.name', 'remittances.amount', 'remittances.transaction_reference', 'remittances.payment_type', 'remittances.amount', 'remittances.updated_at',
                    'remittances.status', 'remittances.updated_at')
                   ->join('users', 'users.userable_id', '=', 'remittances.agent_id')
                    ->where('remittances.lga_id', '=', $lga)
                    ->whereBetween('remittances.updated_at', [DB::raw('date("' . $fromDate . '")'), DB::raw('date("' . $toDate . '")')])
                    ->get();
        }


        $data = array();
        $i=0;

        foreach($remits as $remit){

            $data[$i]['sn'] = $i+1;
            $data[$i]['agent_name'] = $remit['name'];
            $data[$i]['amount'] = $remit['amount'];
            $data[$i]['txn_ref'] = $remit['transaction_reference'];
            $data[$i]['payment_type'] = $remit['payment_type'];
            $data[$i]['status'] = $remit['status'];
            $data[$i]['updated_date'] = $remit['updated_at'];
            $data[$i]['payment_date'] = ($remit['status'] == 'pending')?'':$remit['updated_at'];

            $i++;
        }

        return response()->json([
            'status' => 'success',
            'data' => [
                'remit' => $data
            ],
        ]);

    }


        // chartData
      function getLastSixMonthRevenue(Request $request)
      {


          $validate = $request->validate([
              'agent_id' => 'sometimes',
              'lga_id' => 'sometimes',

          ]);


          $lga = $validate['lga_id'];
          $agent = $validate['agent_id'];

          $user = Auth::user();

          $BS= $QP =[];

          if ($user->role_id == env('HOD'))
          {
              $category_id =  $user->category_id;
              $categoryObj =  Category::where('id', $category_id)->get();   // get dept name of hod
              $category_name = $categoryObj[0]['name'];

              $lga = $user->lga_id;



              $BS = Revenue::select('revenues.amount','revenues.status', 'revenues.updated_at')

                  ->leftjoin('agents', 'revenues.agent_id', 'agents.id')
                  ->leftjoin('revenue_points', 'revenues.revenue_point_id',  'revenue_points.id')
                  ->where([['revenue_points.lga_id', $lga], ['agents.dept', 'LIKE', '%' . $category_name . '%']])
               //   ->leftjoin('users', 'users.userable_id', 'revenues.agent_id')
                 // ->leftjoin('agents', 'users.userable_id', 'agents.id')
                  //->where([['users.lga_id',$lga],['agents.dept', 'LIKE', '%'.$category_name.'%'], ['users.role_id', env('AGENT')]])

                  ->when($agent, function ($query) use($agent) {
                      return $query->where('revenues.agent_id', '=', $agent);
                  })
                  ->where('revenues.status', 'success')
                  ->whereBetween(DB::raw('date(revenues.updated_at)'),
                      [  DB::raw('date("' . Carbon::now()->copy()->startOfMonth()->subMonth(5)->toDateString(). '")'), DB::raw('date("' . Carbon::now()->copy()->endOfMonth()->toDateString(). '")')  ])
                  ->orderBy('revenues.updated_at')
                  ->get();

              $QP = QuickPrintInvoice::select('quick_print_invoices.amount', 'quick_print_invoices.updated_at')

                  ->leftjoin('agents', 'quick_print_invoices.agent_id', 'agents.id')
                  ->leftjoin('revenue_points', 'quick_print_invoices.revenue_point_id',  'revenue_points.id')
                  ->where([['revenue_points.lga_id', $lga], ['agents.dept', 'LIKE', '%' . $category_name . '%']])
                //  ->leftjoin('users', 'users.userable_id', 'quick_print_invoices.agent_id')
                 // ->leftjoin('agents', 'users.userable_id', 'agents.id')
                  // ->where([['users.lga_id',$lga],['agents.dept', 'LIKE', '%'.$category_name.'%'], ['users.role_id', env('AGENT')]])

                  ->when($agent, function ($query) use($agent) {
                      return $query->where('quick_print_invoices.agent_id', '=', $agent);
                  })
                  ->whereBetween(DB::raw('date(quick_print_invoices.updated_at)'),
                      [ DB::raw('date("'. Carbon::now()->copy()->startOfMonth()->subMonth(5)->toDateString(). '")'), DB::raw('date("' . Carbon::now()->copy()->endOfMonth()->toDateString(). '")')])
                  ->orderBy('quick_print_invoices.updated_at')
                  ->get();



          }
          else if ($user->role_id == env('DIR_REVENUE'))
          {

              $lga = $user->lga_id;
              $BS = Revenue::select('revenues.amount','revenues.status', 'revenues.updated_at')
                  ->leftjoin('revenue_points', 'revenues.revenue_point_id',  'revenue_points.id' )
                  ->where('revenue_points.lga_id', $lga )
                 // ->leftjoin('users', 'users.userable_id', 'revenues.agent_id')
                 // ->where(['users.lga_id' => $lga, 'users.role_id'=> env('AGENT')])
                  ->when($agent, function ($query) use($agent) {
                      return $query->where('revenues.agent_id', '=', $agent);
                  } )
                  ->where('revenues.status', 'success')
                  ->whereBetween(DB::raw('date(revenues.updated_at)'),
                      [  DB::raw('date("' . Carbon::now()->copy()->startOfMonth()->subMonth(5)->toDateString(). '")'), DB::raw('date("' . Carbon::now()->copy()->endOfMonth()->toDateString(). '")')  ])
                  ->orderBy('revenues.updated_at')
                  ->get();

              $QP = QuickPrintInvoice::select('quick_print_invoices.amount', 'quick_print_invoices.updated_at')
                ->leftjoin('revenue_points', 'quick_print_invoices.revenue_point_id',  'revenue_points.id')
                  ->where('revenue_points.lga_id', $lga)

                 // ->leftjoin('users', 'users.userable_id', 'quick_print_invoices.agent_id')
                 // ->where(['users.lga_id' => $lga, 'users.role_id'=> env('AGENT')])
                  ->when($agent, function ($query) use($agent) {
                      return $query->where('quick_print_invoices.agent_id', '=', $agent);
                  })
                  ->whereBetween(DB::raw('date(quick_print_invoices.updated_at)'),
                      [ DB::raw('date("'. Carbon::now()->copy()->startOfMonth()->subMonth(5)->toDateString(). '")'), DB::raw('date("' . Carbon::now()->copy()->endOfMonth()->toDateString(). '")')])
                  ->orderBy('quick_print_invoices.updated_at')
                  ->get();



          } else

          {

              $BS = Revenue::select('revenues.amount', 'revenues.status', 'revenues.updated_at')
                  ->when($lga && !$agent, function ($query) use ($lga) {
                      $query->leftjoin('revenue_points', 'revenues.revenue_point_id', '=', 'revenue_points.id')
                          ->where('revenue_points.lga_id', '=', $lga);
                      //$query->leftjoin('users', 'users.userable_id', 'revenues.agent_id')
                        //  ->where(['users.lga_id' => $lga, 'users.role_id'=> env('AGENT')]);
                  })
                  ->when($agent, function ($query) use ($agent) {
                      return $query->where('revenues.agent_id', '=', $agent);
                  })
                  ->where('revenues.status', 'success')
                  ->whereBetween(DB::raw('date(revenues.updated_at)'),
                      [DB::raw('date("' . Carbon::now()->copy()->startOfMonth()->subMonth(5)->toDateString() . '")'), DB::raw('date("' . Carbon::now()->copy()->endOfMonth()->toDateString() . '")')])
                  ->orderBy('revenues.updated_at')
                  ->get();

          $QP = QuickPrintInvoice::select('quick_print_invoices.amount', 'quick_print_invoices.updated_at')
              ->when($lga && !$agent, function ($query) use ($lga) {
                $query->leftjoin('revenue_points', 'quick_print_invoices.revenue_point_id', '=', 'revenue_points.id')
                      ->where('revenue_points.lga_id', '=', $lga);
               //   $query->leftjoin('users', 'users.userable_id', 'quick_print_invoices.agent_id')
                 //     ->where(['users.lga_id' => $lga, 'users.role_id'=> env('AGENT')]);
              })
               ->when($agent, function ($query) use ($agent) {
                  return $query->where('quick_print_invoices.agent_id', '=', $agent);
              })
              ->whereBetween(DB::raw('date(quick_print_invoices.updated_at)'),
                  [DB::raw('date("' . Carbon::now()->copy()->startOfMonth()->subMonth(5)->toDateString() . '")'), DB::raw('date("' . Carbon::now()->copy()->endOfMonth()->toDateString() . '")')])
              ->orderBy('quick_print_invoices.updated_at')
              ->get();

      }







          //quick_print_invoices



          $firstMonthName =    date('M', strtotime('-5 month')); // Carbon::now()->subMonth(5)->format('F');
          $secondMonthName = date('M', strtotime('-4 month')); // Carbon::now()->subMonth(4)->format('F');
          $thirdMonthName =  date('M', strtotime('-3 month')); // Carbon::now()->subMonth(3)->format('F');
          $forthMonthName =  date('M', strtotime('-2 month'));  //Carbon::now()->subMonth(2)->format('F');
          $fifthMonthName =  date('M', strtotime('-1 month'));   // Carbon::now()->subMonth(1)->format('F');
          $sixthMonthName =  date('M');



          // revenue of each month
          $month_rev[1] = $month_rev[2] = $month_rev[3]=  0;
          $month_rev[4] = $month_rev[5] = $month_rev[6] =0 ;
          //  $inv1 = $inv2 = $inv3 = $inv4 = $inv5 = $inv6 =0 ;





          foreach($BS as $rev){

              $m = substr($rev['updated_at'],5,2);
              $month_rev[$this->indexMonth($m)] = $month_rev[$this->indexMonth($m)] + $rev['amount'];
          }



          foreach($QP as $rev2){

              $mnth = substr($rev2['updated_at'],5,2);
              $month_rev[$this->indexMonth($mnth)] = $month_rev[$this->indexMonth($mnth)] + $rev2['amount'];    //add up rev
          }


          // Name of month
          $month[0] =$firstMonthName; $month[1] =$secondMonthName; $month[2] =$thirdMonthName; $month[3] =$forthMonthName; $month[4] = $fifthMonthName; $month[5] =$sixthMonthName;
//
     //     $month[5] =$firstMonthName; $month[4] =$secondMonthName; $month[3] =$thirdMonthName; $month[2] =$forthMonthName; $month[1] = $fifthMonthName; $month[0] =$sixthMonthName;
//




        //   Re-arrange the data in array
          $mnth_rev = $month_rev;
          $i=0;  $j= 1;
          foreach($month_rev as $rev ){
              $revenues[$i] = $mnth_rev[$j];
             // $paid_invoice[$i] = $month_paid[$j];
              $j++; $i++;
          }



          return response()->json([
              'status' => 'success',
              'data' => [
                  'lastSixMonthRev' => $revenues,
                  'monthName' => $month,
              ]
          ]);





      }



        function indexMonth($month){


             if( $month  == date('m', strtotime('-5 month')))
                  return 1;
            else if( $month  == date('m', strtotime('-4 month')) )
                return 2;
            else if( $month  ==  date('m', strtotime('-3 month'))  )
                return 3;
            else if( $month  == date('m', strtotime('-2 month')) )
                return 4;
            else if( $month  == date('m', strtotime('-1 month')) )
                return 5;
            else if( $month  == date('m'))
                return 6;

        }











}
