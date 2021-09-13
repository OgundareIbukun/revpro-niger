<?php

namespace App\Http\Controllers;

use App\Agent;
use App\Lga;
use App\QuickPrintInvoice;
use App\Revenue;
use App\User;
use App\Remittance;
use App\UnremittedCash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class RemittanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $remittance = Remittance::all();

        return response()->json([
            'status' => 'success',
            'data' => $remittance
        ]);
    }



    // update full or part payment paid with card instead of bank
    public function updateTxnForChannelAndStatus(Request $request)
    {
//        $validator= $request->validate([
//            'payment_type' =>'required',
//            'status' => 'required',
//            'invoice' => 'required|exists:remittances,invoice',
//            'reference' => 'required',
//        ]);

        $validator = \Validator::make($request->all(), [
            'payment_type' =>'required',
            'status' => 'required',
            'invoice' => 'required|exists:remittances,invoice',
            'reference' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }


          $validate =[];
          $validate['payment_type'] = $request->input('payment_type');
        $validate['status'] = $request->input('status');
        $validate['invoice'] = $request->input('invoice');
        $validate['reference'] = $request->input('reference');


        DB::beginTransaction();
        try {

            $remit = Remittance::where('invoice', $validate['invoice'] );

            $remits = $remit->get();

            if($remits[0]['status'] == 'success')
            {
                return response()->json([
                    'status' => 'error',
                    'data' => 'transaction has updated before'
                ]);
            }

            $remit->update([
                'status' => 'success',
                'payment_type'=>$validate['payment_type'],
                'transaction_reference'=>$validate['reference'],
                'mac_id'=> request()->mac_id
            ]);


            $remit_details = $remit->get();

            //subtract amount from agent's cash remittance

            $agent = Agent::where('id', $remit_details[0]['agent_id']);
            $agent->decrement('cash_remittance', $remit_details[0]['amount']);

            DB::commit();

            return response()->json([
                'status' => 'success',
                'data' =>  $remit_details
            ]);


        }
        catch(\Exception $ex)
        {
            if (isset($ex->errorInfo[2])) {
                $msg = $ex->errorInfo[2];
            } else {
                $msg = $ex->getMessage();
            }
            // rollback operation for failure
            DB::rollback();

            return response()->json([
                'status' => 'error',
                'data' => $msg
            ]);

        }


    }





    /**
     * Display the specified resource.
     *
     * @param  \App\Remittance  $remittance
     * @return \Illuminate\Http\Response
     */
    public function show(Remittance $remittance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Remittance  $remittance
     * @return \Illuminate\Http\Response
     */
    public function edit(Remittance $remittance)
    {
        //
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Remittance  $remittance
     * @return \Illuminate\Http\Response
     */
    public function destroy(Remittance $remittance)
    {
        //
    }

    public function pending(Agent $agent){
        //pending = agents revenue not in remittance
        //agents revenue
        //$pending = $agent->revenue()
        //not in remittance
        //     ->sum('amount');

        return response()->json([
            'status' => 'success',
            'data' => [
                'amount' => $agent->cash_remittance
            ]
        ]);
    }

    public function history( Agent $agent){
        //pending = agents revenue not in remittance
        //agents revenue
        //$pending = $agent->revenue()
        //not in remittance
        //     ->sum('amount');

         $history = Remittance::where('agent_id',$agent->id)->get();

        return response()->json([
            'status' => 'success',
            'data' => [
                'amount' => $history
            ]
        ]);
    }


    public function remit(Request $request){
//        $validate = request()->validate([
//            'agent_id' => 'required|numeric|exists:agents,id',
//            'payment_type' =>'required',
//            'status' => 'required',
//            'amount' => 'required|numeric',
//            'transaction_reference' => 'required|unique:revenues,transaction_reference',
//        ]);


        $validator = \Validator::make($request->all(), [
            'agent_id' => 'required|numeric|exists:agents,id',
            'payment_type' =>'required',
            'status' => 'required',
            'amount' => 'required|numeric',
            'month' => 'required',
            'lga_id' => 'required|numeric|exists:lgas,id',
            'bank' => 'sometimes',
            'transaction_reference' => 'required|unique:remittances,transaction_reference',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }


        $validate =[];
        $validate['month'] =    date('Y-m', strtotime($request->input('month')));  //$request->input('month');
        $validate['payment_type'] = $request->input('payment_type');
        $validate['status'] = $request->input('status');
        $validate['amount'] = $request->input('amount');
        $validate['transaction_reference'] = $request->input('transaction_reference');
        $validate['agent_id'] = $request->input('agent_id');
        $validate['lga_id'] = $request->input('lga_id');

        $validate['invoice'] = 'BRI'.date('Ymd').$validate['agent_id'].random_int(0,9).strtotime(date('Ymdhsi',time()));

        DB::beginTransaction();
        try{

         $validate['mac_id'] =  request()->mac_id;
        $remittance = Remittance::create($validate);

                if($validate['status'] == 'success'){

//                    $agent = Agent::where('id',  $remittance['agent_id']);
//                    $agent->decrement('cash_remittance',  $remittance['amount']);

                        $unremitObj =  UnremittedCash::where([['agent_id', $validate['agent_id']],['month',$validate['month']]]);
                            // reduce the amount
                           $unremitObj->decrement('amount',  $validate['amount']);
                            $unremit = $unremitObj->first();
                             // update inv ids in remittance table
                          $remittance->update(['invoice_id'=>$unremit->invoice_id]);
                               // empty  inv_ ids in unremitted cashes table
                            $unremitObj->update(['invoice_id'=>'']);


                }

            DB::commit();

                  return response()->json([
                     'status' => 'success',
                     'data' => $remittance

                  ]);



        }   catch(\Exception $ex){

            if (isset($ex->errorInfo[2])) {
                $msg = $ex->errorInfo[2];
            } else {
                $msg = $ex->getMessage();
            }

            // rollback operation for failure
            DB::rollback();

            return response()->json([
                'status' => 'error',
                'data' => $msg
            ],400);

        }


    }

    public function unremitList($agent){

        $unrmt = UnremittedCash::where('agent_id',$agent)->get();
        return response()->json([
            'status' => 'success',
            'data' => $unrmt

        ]);

    }


    public  function remittanceList(Request $request)
    {
        $validate = $request->validate([
            'fromDate' => 'sometimes',
            'toDate' => 'sometimes',
            'status' => 'sometimes',      // success or pending
            'type' => 'sometimes',     // card , bank
            'lga_id' => 'sometimes',
            'bank' => 'sometimes'
        ]);

        $fromDate = ($validate['fromDate'] == '') ? Carbon::now()->copy()->startOfMonth()->toDateString() : $validate['fromDate'];
        $toDate = ($validate['toDate'] == '') ? Carbon::now()->copy()->endOfMonth()->toDateString() : $validate['toDate'];

        $status = $validate['status'];
        $type = $validate['type'];
        $lga = $validate['lga_id'];
        $bank = $validate['bank'];


        $remits = Remittance::select('users.name', 'remittances.amount', 'remittances.transaction_reference', 'remittances.payment_type', 'remittances.amount', 'remittances.created_at',
            'remittances.status', 'remittances.updated_at', 'lgas.name as lgaName', 'remittances.bank'    )
            ->join('users', 'users.userable_id', '=', 'remittances.agent_id')
            ->join('lgas', 'remittances.lga_id', '=', 'lgas.id')
            ->where([['users.role_id', '=', env('AGENT')]])
            ->when($type == 'bank', function ($query) {
                return $query->where('remittances.payment_type', 'bank');
            })
            ->when($type == 'card', function ($query) {
                return $query->where('remittances.payment_type', 'card');
            })
            ->when($lga, function ($query) use ($lga) {
                return $query->where('remittances.lga_id', $lga);
            })
            ->when($status == 'success', function ($query) use ($fromDate, $toDate) {

                return $query->where('remittances.status', 'success')
                    ->whereBetween(DB::raw('date(remittances.updated_at)'), [DB::raw('date("' . $fromDate . '")'), DB::raw('date("' . $toDate . '")')]);

            })

            ->when($bank, function ($query) use ($bank) {
                return $query->where('remittances.bank','LIKE','%'.$bank.'%');
            })
            ->when($status == 'pending', function ($query) use ($fromDate, $toDate) {

                return $query->where('remittances.status', 'pending')
                    ->whereBetween(DB::raw('date(remittances.created_at)'), [DB::raw('date("' . $fromDate . '")'), DB::raw('date("' . $toDate . '")')]);

            })
            ->when((empty($status)), function ($query) use ($fromDate, $toDate) {
                return $query->whereBetween(DB::raw('date(remittances.created_at)'), [DB::raw('date("' . $fromDate . '")'), DB::raw('date("' . $toDate . '")')]);

            })
            ->orderBy('remittances.created_at', 'DESC')
            ->get();

            if($lga)
            {
                 $lg = LGA::where('id', $lga)->get();
                  $lga_name = $lg[0]['name'];
            } else
                $lga_name ='';

        $data = array();
         $total = 0;
        $i=0;

        foreach($remits as $remit){

            $data[$i]['sn'] = $i+1;
            $data[$i]['agent_name'] = $remit['name'];
            $data[$i]['lga_name'] = $remit['lgaName'];
            $data[$i]['amount'] = $remit['amount'];
            $data[$i]['txn_ref'] = $remit['transaction_reference'];
            $data[$i]['ref'] = $remit['transaction_reference'];
            $data[$i]['payment_type'] = $remit['payment_type'];
            $data[$i]['status'] = $remit['status'];
            $data[$i]['bank'] = $remit['bank'];
            $data[$i]['created_date'] = $remit['created_at'];
            $data[$i]['payment_date'] = ($remit['status'] == 'pending')?'':$remit['updated_at'];
            $total = $total + $remit['amount'];
            $i++;
        }

               return response()->json(['status' => 'success',
                 'data' => $data,
                   'total'=> $total,
                   'lgaName'=> $lga_name
      ]);

    }


       // get cash receipts per txn reference
    public function getCashReceipt($txn_ref){

        $remits = Remittance::where('transaction_reference',$txn_ref)->first();
        $data =[];

        if($remits ){

            $invoiceIds  = json_decode($remits->invoice_id,true);

             $year  =  substr($remits->month, 0,4);
            $month  =  substr($remits->month, 5,2);
             $BS = Revenue::select('revenues.id','users.name as agentName','services.name as serviceName','revenue_points.name as revPtName',
                 'lgas.name as lgaName','revenues.invoice','revenues.amount','revenues.created_at as date')
           ->join('users','users.userable_id','revenues.agent_id')
                 ->join('services','services.id','revenues.service_id')
                 ->join('revenue_points','revenue_points.id','revenues.revenue_point_id')
                 ->join('lgas','lgas.id','revenue_points.lga_id')
                 ->whereYear('revenues.created_at', '=', $year)
                 ->whereMonth('revenues.created_at', '=', $month)
                 ->where('users.role_id',env('AGENT'))
             //->where([[DB::raw('date(revenues.created_at)'),DB::raw('date("' . $remits->month . '")')],['users.role_id',env('AGENT')]] )
                    ->get();


            $QP = QuickPrintInvoice::select('quick_print_invoices.id','users.name as agentName','services.name as serviceName','revenue_points.name as revPtName',
                'lgas.name as lgaName','quick_print_invoices.invoice','quick_print_invoices.amount','quick_print_invoices.created_at as date')
                ->join('users','users.userable_id','quick_print_invoices.agent_id')
                ->join('services','services.id','quick_print_invoices.service_id')
                ->join('revenue_points','revenue_points.id','quick_print_invoices.revenue_point_id')
                ->join('lgas','lgas.id','revenue_points.lga_id')
               ->whereYear('quick_print_invoices.created_at', '=', $year)
                ->whereMonth('quick_print_invoices.created_at', '=', $month)
                ->where('users.role_id',env('AGENT'))

                // ->where([[DB::raw('date(quick_print_invoices.created_at)'),DB::raw('date("' . $remits->month . '")')],['users.role_id',env('AGENT')]])

                ->get();



            $invoiceIds  = json_decode($remits->invoice_id,true);

             if(!empty($invoiceIds)){
              extract($invoiceIds);

                   $i=0;
                 foreach($BS as $bs){

                     foreach ($b as $id){
                         if($bs['id'] == $id )
                         {
                             $data[$i]['sn'] = $i+1;
                            $data[$i]['collectorName'] = $bs['agentName'];
                             $data[$i]['serviceName'] = $bs['serviceName'];
                             $data[$i]['lgaName'] = $bs['lgaName'];
                             $data[$i]['revPtName'] = $bs['revPtName'];
                             $data[$i]['amount'] = $bs['amount'];
                             $data[$i]['invoice'] = $bs['invoice'];
                             $data[$i]['date'] = $bs['date'];
                            $i++;
                         }
                     }
                 }

                 foreach($QP as $qp){

                     foreach ($q as $id){
                         if($qp['id'] == $id )
                         {
                             $data[$i]['sn'] = $i+1;
                             $data[$i]['collectorName'] = $qp['agentName'];
                             $data[$i]['serviceName'] = $qp['serviceName'];
                             $data[$i]['lgaName'] = $qp['lgaName'];
                             $data[$i]['revPtName'] = $qp['revPtName'];
                             $data[$i]['amount'] = $qp['amount'];
                             $data[$i]['invoice'] = $qp['invoice'];
                             $data[$i]['date'] = $qp['date'];
                             $i++;
                         }
                     }
                 }

             }



        }




        return response()->json(['status' => 'success',
            'data' => $data
        ]);

    }

    // get amount to be pay per  agent in a month
    public function getAmountDue(Request $request){


        $data = UnremittedCash::where(['agent_id'=>$request->agent_id,'month'=>$request->month])->first();

        if($data)
            $amount = $data->amount;
          else
              $amount =0.00;

        return response()->json(['status' => 'success',
            'data' => $amount
        ]);

    }



    /*
     *
     *    mm m      m mm  oo o oo o  nnnnnnn    ii     tt      a a aa aa a
     *    mm  m    m  mm  oo     oo  nn   nn    ii   tttt ttt aaaa a a  aa
     *    mm   m  m   mm  oo     oo  nn   nn    ii     tt     aa        aaa
     *    mm    m     mm  oo oo  oo  nn   nn    ii     tt ttt  aa aaa a aa aa
     *
     * */




    // initialize  full payment
    public function initialize(Request $request)
    {

        $validate = $request->validate( [
            'agent_id' => 'sometimes',
            'amount' => 'sometimes',
            'amountCard' => 'sometimes',
            'payment_type' => 'sometimes',
            'month' => 'sometimes',


        ]);


        $user = User::where([['userable_id', $validate['agent_id']],['role_id', env('AGENT')]])
                ->first();

        $email = $user->email;
        $payment_type = $validate['payment_type'];
       $fname = $user->name;
        $lname = '';
        $oname ='';
        $phone = $user->phone;


        $mac = env('MAC_KEY');
   		 $token = env('MONETA_TOKEN');
        $metadata =  null;
        $customerinfo = json_encode(array('first_name' => $fname, 'other_name' => $oname ?: '', 'last_name' => $lname, 'phone' => $phone));

      if($payment_type == 'card'){

          $amount = $validate['amountCard'];
          if (filter_var($amount, FILTER_VALIDATE_FLOAT)) {
              $amount *= 100;   //amount in kobo;
          } else {
              $amount .= "00";  //the amount in kobo.
          }

          $callback_url =  env('APP_URL').'/api/v1/remittance/monetacallback/card/'.$validate['agent_id'].'/'.$validate['month'].'/'.$validate['amount'];
          $string = $email.$amount.$payment_type.$callback_url;   //concatenate these values
          $hash = hash_hmac('sha512',$string,$mac, false);
          $queryparams = http_build_query(
              array(
                  'amount' => $amount,
                  'email' => $email,
                  "callback_url" => $callback_url,
                  'payment_type' => $payment_type,
                  'customerinfo' => $customerinfo,
                  'metadata' => $metadata,
                  'channel'=>$payment_type,
                  'serviceCode'=>env('SERVICE_CODE'),
                  'serviceType'=>'Remittance',
                  'serviceCategory'=>env('SERVICE_CATEGORY')
              )
          );



          $curl = curl_init();

          curl_setopt_array($curl, array(
              CURLOPT_URL => env('MONETA_URL')."/transaction/initialize?" . $queryparams . '&hash='.$hash,
              CURLOPT_CUSTOMREQUEST => "GET",
              CURLOPT_HTTPHEADER => ["Authorization: Bearer $token"],
          ));


      }
       else {

           $amount = $validate['amount'];
           if (filter_var($amount, FILTER_VALIDATE_FLOAT)) {
               $amount *= 100;   //amount in kobo;
           } else {
               $amount .= "00";  //the amount in kobo.
           }
           $callback_url =  env('APP_URL').'/api/v1/remittance/monetacallback/'.$validate['agent_id'].'/'.$validate['month'].'/'.$validate['amount'];
           $string = $email.$amount.$payment_type.$callback_url;   //concatenate these values
           $hash = hash_hmac('sha512',$string,$mac, false);
           $queryparams = http_build_query(
               array(
                   'amount' => $amount,
                   'email' => $email,
                   "callback_url" => $callback_url,
                   'payment_type' => $payment_type,
                   'customerinfo' => $customerinfo,
                   'metadata' => $metadata,
                   'hash'=>$hash,
                   'serviceCode'=>env('SERVICE_CODE'),
                   'serviceType'=>'Remittance',
                   'serviceCategory'=>env('SERVICE_CATEGORY')

               )
           );

           $curl = curl_init();
           curl_setopt_array($curl, array(
               CURLOPT_URL => env('MONETA_URL')."/transaction/initialize",
               CURLOPT_RETURNTRANSFER => true,
               CURLOPT_ENCODING => "",
               CURLOPT_MAXREDIRS => 10,
               CURLOPT_TIMEOUT => 0,
               CURLOPT_FOLLOWLOCATION => true,
               CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
               CURLOPT_CUSTOMREQUEST => "POST",
               CURLOPT_POSTFIELDS => $queryparams,
               CURLOPT_HTTPHEADER => array(
                   "Authorization: Bearer $token",
                   "Content-Type: application/x-www-form-urlencoded"
               ),

           ));
//           $response =curl_exec($curl);
//           curl_close($curl);
//           echo $response;


       }









  $response =curl_exec($curl);
curl_close($curl);
echo $response;
    

    }


    // store and verify card payment
    function   storeCardPayment($agent_id,$month,$amount){

      //  if(request()->status == 0){
            $reference = request()->reference;
            $user = User::where([['userable_id', $agent_id],['role_id', env('AGENT')]] )
                ->first();

            $invoice = env('IRS_CODE').date('Ymd').$user->userable_id.random_int(0,9).strtotime(date('Ymdhsi',time()));

            $remittance =  Remittance::create([
                'agent_id'=> $agent_id,
                'lga_id'=> $user->lga_id,
                'amount'=> $amount,
                'month'=> $month,
                'payment_type'=> 'card',
                'transaction_reference' => $reference,
                'invoice'=> $invoice,
                'mac_id'=> request()->ip()
            ]);




       // }
      //  else if(request()->status == 1){


            DB::beginTransaction();
            try {

                $remits = Remittance::where('transaction_reference', request()->reference )->firstorFail();

                if($remits->status ==  'success' )
                    return  redirect(  env('APP_URL').'/home#/remittance')->with('message', request()->reference.' has successfully paid!');



//
//                $remit->update([
//                    'status' => 'success',
//                    'mac_id'=> request()->ip()
//                ]);

                $res = '';
                $curl = curl_init();

                $reference= request()->reference;
                $type='card';
                $string = $reference.$type;  //concatenate these values
                $mac = env('MAC_KEY');
                $hash = hash_hmac('sha512',$string,$mac, false);
                $token = env('MONETA_TOKEN');


                curl_setopt_array($curl, array(
                    CURLOPT_URL => env('MONETA_URL')."/transaction/verify/card/".$reference."?hash=".$hash,
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => "",
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 0,
                    CURLOPT_FOLLOWLOCATION => true,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => "GET",
                    CURLOPT_HTTPHEADER => array(
                        "Authorization: Bearer $token",
                        "Accept: application/json"
                    ),
                ));

                $response = curl_exec($curl);

                $err = curl_error($curl);
                curl_close($curl);

                if ($err) {
                    return 'CRITICAL ERROR OCCURED!.';

                }

                $result = json_decode($response, true);

         if( array_key_exists('data',$result)){


             if($result['data']['status'] == 'success'){

                 $payment_date =  $result['data']['paid_at'];

                     $bank = $result['authorization']['bank'];


                     $unremitObj =  UnremittedCash::where([['agent_id', $remits->agent_id],['month',$remits->month]]);

                     $unremitObj->decrement('amount',  $amount);

                     $unremit = $unremitObj->first();

                     // $remittance->update(['invoice_id'=>$unremit->invoice_id]);

                     $remits->status = 'success';
                     $remits->mac_id = request()->ip();
                     $remits->timestamps = false;
                     $remits->bank = $bank;
                     $remits->updated_at = date("Y-m-d H:i:s", strtotime($payment_date));
                     $remits->invoice_id = $unremit->invoice_id;
                     $res =  $remits->save();

                     // set invoice id of unremitted to empty
                     $unremitObj->update(['invoice_id'=>'']);


             }

         }
                DB::commit();

                return  redirect(  env('APP_URL').'/home#/remittance')->with('message', request()->reference.' has successfully paid!');

                //return 'success';
//                if($res)
//                    return 'success';
//                else
//                    return 'failed';

            }
            catch(\Exception $ex){

                if (isset($ex->errorInfo[2])) {
                    $msg = $ex->errorInfo[2];
                } else {
                    $msg = $ex->getMessage();
                }

                // rollback operation for failure
                DB::rollback();

                //   return $msg;
                return response()->json([
                    'status' => 'error',
                    'data' => $msg
                ]);

            }




    //    }*/


    }



    // store or update  full payment via bank
    function   storePayment($agent_id,$month,$amount){


        if(request()->status == 0){

            $user = User::where([['userable_id', $agent_id],['role_id', env('AGENT')]] )
                ->first();

            $invoice = env('IRS_CODE').date('Ymd').$user->userable_id.random_int(0,9).strtotime(date('Ymdhsi',time()));

            $remittance = Remittance::create([
                'agent_id'=> $user->userable_id,
                'lga_id'=> $user->lga_id,
                'amount'=> $amount,
                'month'=> $month,
                'payment_type'=> 'bank',
                'transaction_reference'=> request()->reference,
                'invoice'=> $invoice,
                'mac_id'=> request()->ip()
            ]);


            return  redirect(  env('APP_URL').'/home#/remittance')->with('message', request()->reference.' has initialized!');


        }
        else if(request()->status == 1){


            DB::beginTransaction();
            try {

                $remits = Remittance::where('transaction_reference', request()->reference )->firstorFail();

                if($remits->status ==  'success' )
                {
                    return response()->json([
                        'status' => 'error',
                        'message' => 'transaction has updated before'
                    ]);
                }

//
//                $remit->update([
//                    'status' => 'success',
//                    'mac_id'=> request()->ip()
//                ]);

                 $res = '';
                $curl = curl_init();

                $reference= request()->reference;
                $type='bank';
                $string = $reference.$type;  //concatenate these values
                $mac = env('MAC_KEY');
                $hash = hash_hmac('sha512',$string,$mac, false);
            	$token = env('MONETA_TOKEN');


                curl_setopt_array($curl, array(
                    CURLOPT_URL => env('MONETA_URL')."/transaction/verify/bank/".$reference."?hash=".$hash,
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => "",
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 0,
                    CURLOPT_FOLLOWLOCATION => true,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => "GET",
                    CURLOPT_HTTPHEADER => array(
                       "Authorization: Bearer $token",
   						 "Accept: application/json"
                    ),
                ));

                $response = curl_exec($curl);

                $err = curl_error($curl);
                curl_close($curl);

                if ($err) {
                    return response()->json([
                        'status' => 'error',
                        'message' =>  'error occurred!'
                    ]);

                }

                $result = json_decode($response, true);


                if($result['status'] == 'success'){

                    $payment_date =  $result['customer']['updated_at'];
                    if($result['customer']['Status'] ==  1){

                        $bank =  $result['transaction']['BankName'].' '.$result['transaction']['BranchName'];


                        $unremitObj =  UnremittedCash::where([['agent_id', $remits->agent_id],['month',$remits->month]]);

                        $unremitObj->decrement('amount',  $result['customer']['AmountDue']);

                        $unremit = $unremitObj->first();

                        // $remittance->update(['invoice_id'=>$unremit->invoice_id]);

                        $remits->status = 'success';
                        $remits->mac_id = request()->ip();
                        $remits->timestamps = false;
                        $remits->bank = $bank;
                        $remits->updated_at = date("Y-m-d H:i:s", strtotime($payment_date));
                        $remits->invoice_id = $unremit->invoice_id;
                         $res =  $remits->save();

                        // set invoice id of unremitted to empty
                        $unremitObj->update(['invoice_id'=>'']);
//
//                        if($response)
//                        echo 'success';
//                         else
//                              echo 'failed';



                    } else {

                        return response()->json([
                            'status' => 'error',
                            'message' => 'Unpaid transaction reference.'
                        ]);
                    }

                } else {
                    return response()->json([
                        'status' => 'error',
                        'message' =>  $result['message']
                    ]);


                }




                DB::commit();
                //return 'success';
               if($res)
                 return 'success';
              else 
                return 'failed';


            }
            catch(\Exception $ex){

                if (isset($ex->errorInfo[2])) {
                    $msg = $ex->errorInfo[2];
                } else {
                    $msg = $ex->getMessage();
                }

                // rollback operation for failure
                DB::rollback();

                //   return $msg;
                return response()->json([
                    'status' => 'error',
                    'data' => $msg
                ]);

            }




        }


    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Remittance  $remittance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
//        $response = $request->validate( [
//            'status' => 'required',
//            'reference' => 'required|exists:remittances,transaction_reference'
//        ]);

        $validator = \Validator::make($request->all(), [
            'status' => 'required',
            'reference' => 'required|exists:remittances,transaction_reference'
        ]);

        if ($validator->fails()) {
            return response()->json(['status'=>'error','message'=>$validator->errors()]);
        }


        $response =[];
        $response['status'] = $request->input('status');
        $response['reference'] = $request->input('reference');


        DB::beginTransaction();
        try {

            if ( $response['status'] == 1) {

                $remits = Remittance::where('transaction_reference', $response['reference'])->firstorFail();
                //$remits = $remit->firstorFail();

                if($remits->status ==  'success' )
                {
                    return response()->json([
                        'status' => 'error',
                        'message' => 'transaction has updated before'
                    ]);
                }

//
//                $remit->update([
//                    'status' => 'success',
//                    'mac_id'=> request()->ip()
//                ]);

            $res ='';
                $curl = curl_init();

                $reference= $response['reference'];
                $type='bank';
                $string = $reference.$type;  //concatenate these values
                $mac = env('MAC_KEY');
                $hash = hash_hmac('sha512',$string,$mac, false);
            $token = env('MONETA_TOKEN');


                curl_setopt_array($curl, array(
                    CURLOPT_URL => env('MONETA_URL')."/transaction/verify/bank/".$reference."?hash=".$hash,
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => "",
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 0,
                    CURLOPT_FOLLOWLOCATION => true,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => "GET",
                    CURLOPT_HTTPHEADER => array(
                          "Authorization: Bearer $token",
    						"Accept: application/json"
                    ),
                ));




                $response = curl_exec($curl);
                $err = curl_error($curl);
                curl_close($curl);

                if ($err) {
                    return response()->json([
                        'status' => 'error',
                        'message' =>  'error occurred!'
                    ]);

                }

                $result = json_decode($response, true);


                if($result['status'] == 'success'){

                    $payment_date =  $result['customer']['updated_at'];
                    if($result['customer']['Status'] ==  1){
                        $bank =  $result['transaction']['BankName'].' '.$result['transaction']['BranchName'];


                        $unremitObj =  UnremittedCash::where([['agent_id', $remits->agent_id],['month',$remits->month]]);

                        $unremitObj->decrement('amount',  $result['customer']['AmountDue']);

                        $unremit = $unremitObj->first();

                        // $remittance->update(['invoice_id'=>$unremit->invoice_id]);

                        $remits->status = 'success';
                        $remits->mac_id = request()->ip();
                        $remits->timestamps = false;
                        $remits->bank = $bank;
                        $remits->updated_at = date("Y-m-d H:i:s", strtotime($payment_date));
                        $remits->invoice_id = $unremit->invoice_id;
                         $res =  $remits->save();

                        // set invoice id of unremitted to empty
                        $unremitObj->update(['invoice_id'=>'']);


                        //  $remit_details = $remit->get();

                        //subtract amount from agent's cash remittance

                        //  $agent = Agent::where('id', $remits->agent_id);   // old
                        //  $agent->decrement('cash_remittance', $result['customer']['AmountDue']);



                    } else {

                        return response()->json([
                            'status' => 'error',
                            'message' => 'Unpaid transaction reference.'
                        ]);
                    }

                } else {
                    return response()->json([
                        'status' => 'error',
                        'message' =>  $result['message']
                    ]);


                }


                DB::commit();
            
                if($res)
                 return 'success';
              else 
                return 'failed';

                // return response()->json([
                //     'status' => 'success',
                //     'data' => []
                // ]);
            
            
            }
       

        }
        catch(\Exception $ex){

            if (isset($ex->errorInfo[2])) {
                $msg = $ex->errorInfo[2];
            } else {
                $msg = $ex->getMessage();
            }

            // rollback operation for failure
            DB::rollback();

            return response()->json([
                'status' => 'error',
                'data' => $msg
            ]);

        }

    }

    public function verifyPendingTxn(Request $request){


        DB::beginTransaction();
        try {

            $remits = Remittance::where('transaction_reference', $request->reference )->firstorFail();

//                if($remits->status ==  'success' )
//                    return  redirect(  env('APP_URL').'/home#/remittance');




            $curl = curl_init();

            $res= false;
            $reference= $request->reference;
            $type='bank';
            $string = $reference.$type;  //concatenate these values
            $mac = env('MAC_KEY');
            $hash = hash_hmac('sha512',$string,$mac, false);
          $token = env('MONETA_TOKEN');


            curl_setopt_array($curl, array(
                CURLOPT_URL => env('MONETA_URL')."/transaction/verify/bank/".$reference."?hash=".$hash,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "GET",
                CURLOPT_HTTPHEADER => array(
                       "Authorization: Bearer $token",
   						 "Accept: application/json"
                ),
            ));

            $response = curl_exec($curl);

            $err = curl_error($curl);
            curl_close($curl);

            if ($err) {
                return response()->json([
                    'status' => 'error',
                    'message' =>  'error occurred!'
                ]);

            }

            $result = json_decode($response, true);


            if($result['status'] == 'success'){

                $payment_date =  $result['customer']['updated_at'];
                if($result['customer']['Status'] ==  1){


                    $bank =  $result['transaction']['BankName'].' '.$result['transaction']['BranchName'];
                    $unremitObj =  UnremittedCash::where([['agent_id', $remits->agent_id],['month',$remits->month]]);

                    $unremitObj->decrement('amount',  $result['customer']['AmountDue']);

                    $unremit = $unremitObj->first();

                    // $remittance->update(['invoice_id'=>$unremit->invoice_id]);

                    $remits->status = 'success';
                    $remits->bank = $bank;
                    $remits->mac_id = request()->ip();
                    $remits->timestamps = false;
                    $remits->updated_at = date("Y-m-d H:i:s", strtotime($payment_date));
                    $remits->invoice_id = $unremit->invoice_id;
                     $res = $remits->save();

                    // set invoice id of unremitted to empty
                    $unremitObj->update(['invoice_id'=>'']);


                }
                else {
                     $res= false;

                }


                //return  redirect(  env('APP_URL').'/home#/remittance');

            }
            else
                // return ;
                return response()->json(['status' => 'success',
                    'data' => $result['message']
                ]);

            DB::commit();

              if($res){

                  return response()->json(['status' => 'success',
                      'data' => [ 'payment_date'=>date("Y-m-d H:i:s", strtotime($payment_date)),'status'=>'success']
                  ]);
              }
               else {
                   return response()->json(['status' => 'success',
                       'data' => [ 'status'=>'pending']
                   ]);

               }
            //  return  redirect(  env('APP_URL').'/home#/remittance');


        }
        catch(\Exception $ex){

            if (isset($ex->errorInfo[2])) {
                $msg = $ex->errorInfo[2];
            } else {
                $msg = $ex->getMessage();
            }

            // rollback operation for failure
            DB::rollback();

            return $msg;

        }




    }








 
/*   Old  methods @lastdate
    // store or update  full or part payment via bank

    // initialize  full or  part payment
    public function initializeOld(Request $request)
    {

        $validate = $request->validate( [
            'agent_id' => 'sometimes',
            'amount' => 'sometimes',
            'payment_type' => 'sometimes',
            'month' => 'sometimes',


        ]);


        $user = User::where('userable_id','=', $validate['agent_id'])
            ->first();

        $amount = $validate['amount'];
        $email = $user->email;
        $payment_type = $validate['payment_type'];
        $fname = $user->name;
        $lname = '';
        $oname ='';
        $phone = $user->phone;

        //  $callback_url =  env('APP_URL').'/api/v1/remittance/monetaTxn/'.$validate['agent_id'].'/'.$validate['amount'];
        $callback_url =  env('APP_URL').'/api/v1/remittance/monetacallback/'.$validate['agent_id'].'/'.$validate['month'].'/'.$validate['amount'];

        //  $callback_url = APP_URL.'api/v1/remittance/complete';

        //curl to moneta directly
        $curl = curl_init();
        if (filter_var($amount, FILTER_VALIDATE_FLOAT)) {
            $amount *= 100; //amount in kobo;
        } else {
            $amount .= "00";  //the amount in kobo.
        }

        $metadata =  null; //json_encode(array('invoice_no' => $invoice_no, 'userId' => $this->userID));
        $customerinfo = json_encode(array('first_name' => $fname, 'other_name' => $oname ?: '', 'last_name' => $lname, 'phone' => $phone));

        $queryparams = http_build_query(
            array(
                'amount' => $amount,
                'email' => $email,
                "callback_url" => $callback_url,
                'payment_type' => $payment_type,
                'customerinfo' => $customerinfo,
                'metadata' => $metadata,
                'api_token' => "mt_skey_123456789012345",
            )
        );
        curl_setopt_array($curl, array(
            CURLOPT_URL =>  env('MONETA_URL_TXN_INIT'). $queryparams,
            CURLOPT_CUSTOMREQUEST => "GET",
        ));
        curl_exec($curl);



    }

    function   storePaymentOld($agent_id,$month,$amount){


        if(request()->status == 0){

            $user = User::where('userable_id', $agent_id )
                ->first();

            $invoice = 'BRI'.date('Ymd').$user->userable_id.random_int(0,9).strtotime(date('Ymdhsi',time()));

            $remittance = Remittance::create([
                'agent_id'=> $user->userable_id,
                'amount'=> $amount,
                'month'=> $month,
                'payment_type'=> 'bank',
                'transaction_reference'=> request()->reference,
                'invoice'=> $invoice,
                'mac_id'=> request()->ip()
            ]);


            return  redirect(  env('APP_URL').'/home#/remittance')->with('message', request()->reference.' has initialized!');


        }
        else if(request()->status == 1){


            DB::beginTransaction();
            try {

                $remits = Remittance::where('transaction_reference', request()->reference )->firstorFail();

                if($remits->status ==  'success' )
                {
                    return response()->json([
                        'status' => 'error',
                        'message' => 'transaction has updated before'
                    ]);
                }

//
//                $remit->update([
//                    'status' => 'success',
//                    'mac_id'=> request()->ip()
//                ]);


                $curl = curl_init();
                curl_setopt_array($curl, array(
                    CURLOPT_URL => env('MONETA_URL')."/transaction/verify/bank/".request()->input('reference')."?api_token=mt_skey_123456789012345",
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => "",
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 0,
                    CURLOPT_FOLLOWLOCATION => true,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => "GET",
                ));

                $response = curl_exec($curl);

                $err = curl_error($curl);
                curl_close($curl);

                if ($err) {
                    return response()->json([
                        'status' => 'error',
                        'message' =>  'error occurred!'
                    ]);

                }

                $result = json_decode($response, true);


                if($result['status'] == 'success'){

                    $payment_date =  $result['customer']['updated_at'];
                    if($result['customer']['Status'] ==  1){

                        $bank =  $result['transaction']['BankName'].' '.$result['transaction']['BranchName'];


                        $unremitObj =  UnremittedCash::where([['agent_id', $remits->agent_id],['month',$remits->month]]);

                        $unremitObj->decrement('amount',  $result['customer']['AmountDue']);

                        $unremit = $unremitObj->first();

                        // $remittance->update(['invoice_id'=>$unremit->invoice_id]);

                        $remits->status = 'success';
                        $remits->mac_id = request()->ip();
                        $remits->timestamps = false;
                        $remits->bank = $bank;
                        $remits->updated_at = date("Y-m-d H:i:s", strtotime($payment_date));
                        $remits->invoice_id = $unremit->invoice_id;
                        $remits->save();

                        // set invoice id of unremitted to empty
                        $unremitObj->update(['invoice_id'=>'']);





//                        $remits->status = 'success';
//                        $remits->mac_id = request()->ip();
//                        $remits->timestamps = false;
//                        $remits->updated_at = date("Y-m-d H:i:s", strtotime($payment_date));
//                        $remits->save();

                        //  $remit_details = $remit->get();

                        //subtract amount from agent's cash remittance

//                        $agent = Agent::where('id', $remits->agent_id);
//                        $agent->decrement('cash_remittance', $result['customer']['AmountDue']);

//                        UnremittedCash::where([['agent_id', $remits->agent_id],['month',$remits->month]])
//                            ->decrement('amount',  $result['customer']['AmountDue']);



                    } else {

                        return response()->json([
                            'status' => 'error',
                            'message' => 'Unpaid transaction reference.'
                        ]);
                    }

                } else {
                    return response()->json([
                        'status' => 'error',
                        'message' =>  $result['message']
                    ]);


                }




                DB::commit();

                return response()->json([
                    'status' => 'success',
                    'data' =>  []
                ]);


            }
            catch(\Exception $ex){

                if (isset($ex->errorInfo[2])) {
                    $msg = $ex->errorInfo[2];
                } else {
                    $msg = $ex->getMessage();
                }

                // rollback operation for failure
                DB::rollback();

                return response()->json([
                    'status' => 'error',
                    'data' => $msg
                ]);

            }




        }


    }

    public function updateOld(Request $request)
    {
//        $response = $request->validate( [
//            'status' => 'required',
//            'reference' => 'required|exists:remittances,transaction_reference'
//        ]);

        $validator = \Validator::make($request->all(), [
            'status' => 'required',
            'reference' => 'required|exists:remittances,transaction_reference'
        ]);

        if ($validator->fails()) {
            return response()->json(['status'=>'error','message'=>$validator->errors()]);
        }


        $response =[];
        $response['status'] = $request->input('status');
        $response['reference'] = $request->input('reference');


        DB::beginTransaction();
        try {

            if ( $response['status'] == 1) {

                $remits = Remittance::where('transaction_reference', $response['reference'])->firstorFail();
                //$remits = $remit->firstorFail();

                if($remits->status ==  'success' )
                {
                    return response()->json([
                        'status' => 'error',
                        'message' => 'transaction has updated before'
                    ]);
                }

//
//                $remit->update([
//                    'status' => 'success',
//                    'mac_id'=> request()->ip()
//                ]);


                $curl = curl_init();
                curl_setopt_array($curl, array(
                    CURLOPT_URL => env('MONETA_URL')."/transaction/verify/bank/".$request->input('reference')."?api_token=mt_skey_123456789012345",
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => "",
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 0,
                    CURLOPT_FOLLOWLOCATION => true,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => "GET",
                ));

                $response = curl_exec($curl);
                $err = curl_error($curl);
                curl_close($curl);

                if ($err) {
                    return response()->json([
                        'status' => 'error',
                        'message' =>  'error occurred!'
                    ]);

                }

                $result = json_decode($response, true);


                if($result['status'] == 'success'){

                    $payment_date =  $result['customer']['updated_at'];
                    if($result['customer']['Status'] ==  1){
                        $bank =  $result['transaction']['BankName'].' '.$result['transaction']['BranchName'];


                        $unremitObj =  UnremittedCash::where([['agent_id', $remits->agent_id],['month',$remits->month]]);

                        $unremitObj->decrement('amount',  $result['customer']['AmountDue']);

                        $unremit = $unremitObj->first();

                        // $remittance->update(['invoice_id'=>$unremit->invoice_id]);

                        $remits->status = 'success';
                        $remits->mac_id = request()->ip();
                        $remits->timestamps = false;
                        $remits->bank = $bank;
                        $remits->updated_at = date("Y-m-d H:i:s", strtotime($payment_date));
                        $remits->invoice_id = $unremit->invoice_id;
                        $remits->save();

                        // set invoice id of unremitted to empty
                        $unremitObj->update(['invoice_id'=>'']);


                        //  $remit_details = $remit->get();

                        //subtract amount from agent's cash remittance

                        //  $agent = Agent::where('id', $remits->agent_id);   // old
                        //  $agent->decrement('cash_remittance', $result['customer']['AmountDue']);



                    } else {

                        return response()->json([
                            'status' => 'error',
                            'message' => 'Unpaid transaction reference.'
                        ]);
                    }

                } else {
                    return response()->json([
                        'status' => 'error',
                        'message' =>  $result['message']
                    ]);


                }


                DB::commit();

                return response()->json([
                    'status' => 'success',
                    'data' => []
                ]);
            } else {

                return response()->json([
                    'status' => 'error',
                    'data' => 'Entity unprocessed'
                ]);

            }

        }
        catch(\Exception $ex){

            if (isset($ex->errorInfo[2])) {
                $msg = $ex->errorInfo[2];
            } else {
                $msg = $ex->getMessage();
            }

            // rollback operation for failure
            DB::rollback();

            return response()->json([
                'status' => 'error',
                'data' => $msg
            ]);

        }

    }


    public function verifyPendingTxnOld(Request $request){


        DB::beginTransaction();
        try {

            $remits = Remittance::where('transaction_reference', $request->reference )->firstorFail();

//                if($remits->status ==  'success' )
//                    return  redirect(  env('APP_URL').'/home#/remittance');




            $curl = curl_init();
            curl_setopt_array($curl, array(
                CURLOPT_URL => env('MONETA_URL')."/transaction/verify/bank/".request()->input('reference')."?api_token=mt_skey_123456789012345",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "GET",
            ));

            $response = curl_exec($curl);

            $err = curl_error($curl);
            curl_close($curl);

            if ($err) {
                return response()->json([
                    'status' => 'error',
                    'message' =>  'error occurred!'
                ]);

            }

            $result = json_decode($response, true);


            if($result['status'] == 'success'){

                $payment_date =  $result['customer']['updated_at'];
                if($result['customer']['Status'] ==  1){



                    $unremitObj =  UnremittedCash::where([['agent_id', $remits->agent_id],['month',$remits->month]]);

                    $unremitObj->decrement('amount',  $result['customer']['AmountDue']);

                    $unremit = $unremitObj->first();

                    // $remittance->update(['invoice_id'=>$unremit->invoice_id]);

                    $remits->status = 'success';
                    $remits->mac_id = request()->ip();
                    $remits->timestamps = false;
                    $remits->updated_at = date("Y-m-d H:i:s", strtotime($payment_date));
                    $remits->invoice_id = $unremit->invoice_id;
                    $remits->save();

                    // set invoice id of unremitted to empty
                    $unremitObj->update(['invoice_id'=>'']);

                    return response()->json(['status' => 'success',
                        'data' => [ 'payment_date'=>date("Y-m-d H:i:s", strtotime($payment_date)),'status'=>'success']
                    ]);
                }
                else {
                    return response()->json(['status' => 'success',
                        'data' => [ 'status'=>'pending']
                    ]);

                }


                //return  redirect(  env('APP_URL').'/home#/remittance');

            }
            else
                // return ;
                return response()->json(['status' => 'success',
                    'data' => $result['message']
                ]);

            DB::commit();

            //  return  redirect(  env('APP_URL').'/home#/remittance');


        }
        catch(\Exception $ex){

            if (isset($ex->errorInfo[2])) {
                $msg = $ex->errorInfo[2];
            } else {
                $msg = $ex->getMessage();
            }

            // rollback operation for failure
            DB::rollback();

            return $msg;

        }




    }
   */











}
