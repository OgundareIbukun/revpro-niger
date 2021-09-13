<?php

namespace App\Http\Controllers;

use App\Agent;
  use App\QuickPrintInvoice;
  // use App\Events\RevenueAdded;
use App\Remittance;
use App\UnremittedCash;
use App\Revenue;
   use App\User;
use App\RevenuePoint;
use App\Service;
use App\Log;
use App\Lga;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Kreait\Firebase\Database;
use App\Jobs\sendRevenueJob;
use App\Traits\lgaRevenue;
use App\Jobs\processingOfflineData;
use App\offlineDataTrail;



class RevenueController extends Controller
{
     use lgaRevenue;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $revenue = Revenue::with(['agent.user','service','revenue_point.lga','log'])->get();

        return response()->json([
            'status' => 'success',
            'data' => $revenue
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getRevenue()
    {
        $revenue = Revenue::with(['agent.user','service','revenue_point.lga'])->get();

           $i=0;
          foreach ($revenue as $rev ){

              $data[$i]['id'] = $i+1;
             $data[$i]['service'] = $rev['service']['name'];
              $data[$i]['amount'] = $rev['amount'];
              $data[$i]['payment_type'] = $rev['payment_type'];
              $data[$i]['payment_category'] = $rev['payment_category'];
              $data[$i]['transaction_reference'] = $rev['transaction_reference'];
              $data[$i]['agent'] = $rev['agent']['user']['name'];
              $data[$i]['revenue_point'] = $rev['revenue_point']['name'];
              $data[$i]['lga'] = $rev['revenue_point']['lga']['name'];
              $data[$i]['invoice'] = $rev['invoice'];
              $data[$i]['status'] = $rev['status'];

              $i++;
          }



        return response()->json([
            'status' => 'success',
            'data' => $data
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = $this->validData($request);



        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }


        $validate =[];
        $validate['revenue']['revenue_point_id'] = $request->input('revenue.revenue_point_id');
        $validate['revenue']['service_id'] = $request->input('revenue.service_id');
        $validate['revenue']['agent_id'] = $request->input('revenue.agent_id');
        $validate['revenue']['payment_type'] = $request->input('revenue.payment_type');
        $validate['revenue']['bank'] = $request->input('revenue.bank');
        $validate['revenue']['description'] = $request->input('revenue.description');
        $validate['revenue']['status'] = $request->input('revenue.status');
        $validate['revenue']['amount'] = $request->input('revenue.amount');
        $validate['revenue']['transaction_reference'] = ($validate['revenue']['payment_type'] == 'cash')? "CASH".str_pad(strtoupper(uniqid()),16, rand(1000,9999)) : $request->input('revenue.transaction_reference');
        $validate['log']['full_name'] = $request->input('log.full_name');
        $validate['log']['corporate_name'] = $request->input('log.corporate_name');
        $validate['log']['vehicle_reg_no'] = $request->input('log.vehicle_reg_no');
        $validate['log']['birs_id'] = $request->input('log.birs_id');
        $validate['log']['tin_no'] = $request->input('log.tin_no');





        // log
        $log = Log::create($validate['log']);

        $validate['revenue']['log_id'] = $log->id;
        //invoice format
        $validate['revenue']['invoice'] = env('IRS_CODE') . date('Ymd') . $validate['revenue']['agent_id'] . $validate['revenue']['service_id'] . strtotime(date('Ymdhsi', time())).'BS';

        $validate['revenue']['payment_category'] = 'single';
        //$revenue = Revenue::create($validate['revenue']);

        DB::beginTransaction();
        try {



            $validate['revenue']['mac_id'] = request()->mac_id;
            $revenue = $log->revenue()->create($validate['revenue']);

              $month = date('Y-m');   // get current month

            if ($validate['revenue']['payment_type'] == 'cash') {
//                Agent::find($revenue->agent_id)
//                    ->increment('cash_remittance', $revenue->amount);


                $unremCash = UnremittedCash::where([
                    ['agent_id', '=', $validate['revenue']['agent_id']],
                    ['month', '=',$month]
                ])
                    ->first();
                // check if txn exist or not
                if (!empty($unremCash)) {

                    // if exist,   aggregrate  un-remitted amount and total
                    $unremTxnObj = UnremittedCash::where([
                        ['agent_id', '=', $validate['revenue']['agent_id']],
                        ['month', '=',$month]
                          ]);
                        $unremTxnObj->update([
                              'amount'=>DB::raw('amount +'.$validate['revenue']['amount']),
                              'total'=>DB::raw('total +'.$validate['revenue']['amount']),

                           ]);

                    $unremTxn = $unremTxnObj->first();


                } else {
                    // create new txn
                        // TODO: add unremitted cash to unremitted table


                    $unremTxn = UnremittedCash::create([
                         'agent_id'=>$validate['revenue']['agent_id'],
                          'month'=>$month,
                          'amount'=>$validate['revenue']['amount'],
                         'total'=>$validate['revenue']['amount'],
                         ]);
                }

                // TODO:   store id of bs in  unremitted table
                if(empty($unremTxn->invoice_id) )
                {
                    $id =[];   $qp = [];
                    $bs = [$revenue->id];
                    $id['b'] = $bs;   $id['q'] = $qp;
                    $inv_id = json_encode($id);
                    $unremTxn->update(['invoice_id'=>$inv_id]);

                } else {
                    $arr = json_decode($unremTxn->invoice_id, true);
                    extract($arr);
                    $b = array_merge( $b,[$revenue->id]);
                    $id =  compact('b','q');
                    $inv_id = json_encode($id);
                    $unremTxn->update(['invoice_id'=>$inv_id]);

                }




            }

            DB::commit();

              // send rev to firebase
           // $revJob = (new sendRevenueJob());  //->delay(Carbon::now()->addSeconds(30));
          //  dispatch($revJob);

             if( $revenue->id%5 == 0 )
                  $this->firebase();

            //  $response['data']= $revenue;
            $response['agent'] = User::where(['userable_id' => $revenue->agent_id, 'userable_type' => 'App\Agent'])
                ->get();

            $response['service'] = Service::find($revenue->service_id);
            $response['rev_point'] = RevenuePoint::find($revenue->revenue_point_id);
            $response['log'] = Log::find($revenue->log_id);

            $res = array_merge($revenue->toArray(), $response);

            return response()->json([
                'status' => 'success',
                'data' => $res
            ]);

        } catch (\Exception $ex) {

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
     * @param  \App\Revenue  $revenue
     * @return \Illuminate\Http\Response
     */
    /*public function show(Revenue $revenue)
    {
        return response()->json([
            'status' => 'success',
            'data' => $revenue
        ]);
    }*/
    public function show(Revenue $revenue){
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Revenue  $revenue
     * @return \Illuminate\Http\Response
     */
    public function edit(Revenue $revenue)
    {
        //
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Revenue  $revenue
     * @return \Illuminate\Http\Response
     */
    public function destroy(Revenue $revenue)
    {
        $revenue->delete();

        return response()->json([], 204);
    }

    /**
     * @param Request $request
     * @return array
     */
    public function validData(Request $request)
    {
       // $payments = ['cash', 'card'];

       // $request['payments'] = $payments;

//        $validate = $request->validate([
//            'revenue.revenue_point_id' => 'required|numeric|exists:revenue_points,id',
//            'revenue.service_id' => 'required|numeric|exists:services,id',
//            'revenue.agent_id' => 'required|numeric|exists:agents,id',
//            'revenue.payment_type' =>'required',
//            'revenue.description' =>'sometimes',
//            'revenue.status' => 'required',
//            'revenue.amount' => 'required|numeric',
//            'revenue.transaction_reference' => 'required|unique:revenues,transaction_reference',
//            'log.full_name' => 'sometimes',
//          'log.corporate_name' => 'sometimes',
//            'log.vehicle_reg_no' => 'sometimes',
//           'log.birs_id' => 'sometimes',
//            'log.tin_no' => 'sometimes',
//
//        ]);


        $validate = \Validator::make($request->all(), [
            'revenue.revenue_point_id' => 'required|numeric|exists:revenue_points,id',
            'revenue.service_id' => 'required|numeric|exists:services,id',
            'revenue.agent_id' => 'required|numeric|exists:agents,id',
            'revenue.payment_type' =>'required',
            'revenue.description' =>'sometimes',
            'revenue.bank' =>'sometimes',
            'revenue.status' => 'required',
            'revenue.amount' => 'required|numeric',
            'revenue.transaction_reference' => 'required|unique:revenues,transaction_reference',
            'log.full_name' => 'sometimes',
            'log.corporate_name' => 'sometimes',
            'log.vehicle_reg_no' => 'sometimes',
            'log.birs_id' => 'sometimes',
            'log.tin_no' => 'sometimes',
        ]);

        return $validate;
    }



    public function getInvoiceData($invoice){
        $url = env('REVENUE_API_URL')."/api/revenue/enforcement/?invoice=".$invoice;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_URL,$url);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);//follow redirection
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Content-Type:application/json',
            'Api-Token: '.env('REVENUE_API_TOKEN')
        ]);

        $result=curl_exec($ch);
        curl_close($ch);
        return json_decode($result, true);
    }




    public function storeBulkPayment(Request $request){

        $validator = $this->validBulkData($request);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }
         $validate =[];
          $validate['agent_id'] = $request->agent_id;
        $validate['service_id'] = $request->service_id;
        $validate['revenue_point_id'] = $request->revenue_point_id;
        $validate['payment_type'] = $request->payment_type;
        $validate['bank'] = $request->bank;
        $validate['description'] = $request->description;
        $validate['status'] = $request->status;
        $validate['amount'] = $request->amount;
        $validate['transaction_reference'] = $request->transaction_reference;


        DB::beginTransaction();
        try{
        //invoice format
        $validate['invoice'] = env('IRS_CODE').date('Ymd').$validate['agent_id'].$validate['service_id'].strtotime(date('Ymdhsi',time())).'BS';

        $validate['payment_category'] = 'bulk';
            $validate['mac_id'] = request()->mac_id;
        $revenue= Revenue::create($validate);

          // add cash received to agent
        if($validate['payment_type'] == 'cash') {
//            Agent::find($revenue->agent_id)
//                ->increment('cash_remittance', $revenue->amount);

         $month=date('Y-m');
            $unremCash = UnremittedCash::where([
                ['agent_id', '=', $validate['agent_id']],
                ['month', '=',$month]
            ])
                ->first();
            // check if txn exist or not
            if (!empty($unremCash)) {

                $unremTxnObj = UnremittedCash::where([
                    ['agent_id', '=', $validate['agent_id']],
                    ['month', '=',$month]
                ]);
                    $unremTxnObj->update([
                    'amount'=>DB::raw('amount +'.$validate['amount']),
                    'total'=>DB::raw('total +'.$validate['amount']),

                ]);

                $unremTxn = $unremTxnObj->first();

            } else {
                // create new txn

                $unremTxn = UnremittedCash::create([
                    'agent_id'=>$validate['agent_id'],
                    'month'=>$month,
                    'amount'=>$validate['amount'],
                    'total'=>$validate['amount'],
                ]);

            }


            // TODO:   store id of bs in  unremitted table
            if(empty($unremTxn->invoice_id) )
            {
                $id =[];   $qp = [];
                $bs = [$revenue->id];
                $id['b'] = $bs;   $id['q'] = $qp;
                $inv_id = json_encode($id);
                $unremTxn->update(['invoice_id'=>$inv_id]);

            } else {
                $arr = json_decode($unremTxn->invoice_id, true);
                extract($arr);
                $b = array_merge( $b,[$revenue->id]);
                $id =  compact('b','q');
                $inv_id = json_encode($id);
                $unremTxn->update(['invoice_id'=>$inv_id]);

            }


        }











            DB::commit();
               // job
            //$revJob = (new sendRevenueJob()); //->delay(Carbon::now()->addSeconds(30));
            //dispatch($revJob);

            if( $revenue->id%5 == 0 )
                $this->firebase();



      //  $response['data']= $revenue;
        $response['agent'] =  User::where(['userable_id'=>$revenue->agent_id,'userable_type'=>'App\Agent'])
            ->get();

        $response['service'] = Service::find($revenue->service_id);
        $response['rev_point'] = RevenuePoint::find($revenue->revenue_point_id);

        $res = array_merge($revenue->toArray(),$response);

        return response()->json([
            'status' => 'success',
            'data' => $res
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



    public function validBulkData(Request $request)
    {
       // $payments = ['cash', 'card'];

        // $request['payments'] = $payments;
//
//        $validate = $request->validate([
//            'revenue_point_id' => 'required|numeric|exists:revenue_points,id',
//            'service_id' => 'required|numeric|exists:services,id',
//            'agent_id' => 'required|numeric|exists:agents,id',
//            'payment_type' =>'required',
//            'description' =>'sometimes',
//            'status' => 'required',
//            'amount' => 'required|numeric',
//            'transaction_reference' => 'required|unique:revenues,transaction_reference'
//
//        ]);
        $validate = \Validator::make($request->all(), [
            'revenue_point_id' => 'required|numeric|exists:revenue_points,id',
            'service_id' => 'required|numeric|exists:services,id',
            'agent_id' => 'required|numeric|exists:agents,id',
            'payment_type' =>'required',
            'description' =>'sometimes',
            'bank' =>'sometimes',
            'status' => 'required',
            'amount' => 'required|numeric',
            'transaction_reference' => 'required|unique:revenues,transaction_reference'
        ]);



        return $validate;
    }

    public function enforce(Request $request)
    {
        if($request->has('reference')){

            $validation = $request->validate([
                'reference' => 'required',
            ]);

            if(substr($validation['reference'], 0, 3) == env('IRS_CODE') ){
                if(substr($validation['reference'],(strlen($validation['reference'])-2),2) == 'QP' ) {
                    $revenue = QuickPrintInvoice::where('invoice', $request->reference)->first();

                    $invoice = $revenue->load(['agent.user','service']);
                }
                 else {
                     $revenue = Revenue::where('invoice', $request->reference)->first();
                     $invoice = $revenue->load(['agent.user','service','log']);
                 }

                 // $inv = $invoice['revenue_point'];
            }

                // moneta reference or cash reference
            else if(substr($validation['reference'], 0, 4) == 'MNTA' ||  substr($validation['reference'], 0, 4) == 'CASH' )

            {
                $revenue = Revenue::where('transaction_reference', $request->reference)->first();
                $invoice = $revenue->load(['agent.user','service','log']);

            }



                $rev = RevenuePoint::find($invoice->revenue_point_id);
              $invoice  = array_merge($revenue->toArray(),array( 'rev_point'=>$rev ));



            return response()->json([
                'status' => 'success',
                'data' => $invoice,
            ]);


        }


        else{
            return response()->json([
                'status' => 'error',
                'message' => 'Please provide an invoice',
            ], 422);
        }
    }


    public function getSingleAndBulkInvoiceHistory(Request $request){


        $validator = \Validator::make($request->all(), [
            'revenue_point_id' => 'required|numeric|exists:revenue_points,id',
            'agent_id' => 'required|numeric|exists:agents,id',

        ]);
        if ($validator->fails()) {
            return  response()->json(['status'=> 'error','messages'=>$validator->errors()], 422);

        }



            $revenue = Revenue::where([['agent_id', request()->agent_id],['revenue_point_id', request()->revenue_point_id]])
                ->get();


            return response()->json([
                'status' => 'success',
                'data' => $revenue->load(['agent.user','service','revenue_point','log']),
            ]);




    }



    public function getQuickPrintInvoiceHistory(Request $request){


        $validator = \Validator::make($request->all(), [
            'revenue_point_id' => 'required|numeric|exists:revenue_points,id',
            'agent_id' => 'required|numeric|exists:agents,id',

        ]);

        if ($validator->fails()) {
            return  response()->json(['status'=> 'error','messages'=>$validator->errors()], 422);

        }



        $quickprint = QuickPrintInvoice::where([['agent_id', request()->agent_id],['revenue_point_id', request()->revenue_point_id]])
                    ->get();


        return response()->json([
            'status' => 'success',
            'data' => $quickprint->load(['agent.user','service','revenue_point']),
        ]);




    }




     public function agent($id){
         if($id){

//             $validation = $request->validate([
//                 'id' => 'required',
//             ]);

                 $revenue = Revenue::where('agent_id', $id)
                     ->get();


             return response()->json([
                 'status' => 'success',
                 'data' => $revenue->load(['agent.user','service','revenue_point','log']),
             ]);


         }else{
             return response()->json([
                 'status' => 'error',
                 'message' => 'Please provide an agent id'
             ], 422);
         }

     }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeQuickPrint(Request $request)
    {
        $validator = $this->quickPrintValidData($request);



        if ($validator->fails()) {
            return response()->json([ 'errors'=>$validator->errors()], 422);
        }
        $validate =[];
        $validate['agent_id'] = $request->agent_id;
        //$validate['lga_id'] = $request->lga_id;
        $validate['service_id'] = $request->service_id;
        $validate['revenue_point_id'] = $request->revenue_point_id;
        $validate['amount'] = $request->amount;



        /*  Algo:  check existing txn data by considering: agent,service,revpoint and date
               if exist: aggreate d amount
               otherwise: create new row for data
                increase unremit cash for agent
                send response
        */

        // initiate the transaction

        DB::beginTransaction();
        try{
        $date =  date('Y-m-d');

        //  $validate['created_at'] ='2020-06-07 12:12:00';  $date = '2020-06-07';   // Testing purpose to get record new date

        $quickPrintTxn = QuickPrintInvoice::where([
            ['agent_id', '=', $validate['agent_id']],
            ['service_id', '=', $validate['service_id']],
            ['revenue_point_id', '=', $validate['revenue_point_id']],
            ['created_at', 'LIKE', '%' . $date . '%']
        ])
            ->first();
        // check if quickPrint txn exist or not
        if (!empty($quickPrintTxn)) {

            // if exist,   aggregrate amount
           // $quickPrintTxn->timestamps = false;
            $qptxn = QuickPrintInvoice::find($quickPrintTxn->id)
                ->increment('amount', $validate['amount']);
            $invoice = array_merge(
                array('id' => $quickPrintTxn->id,
                    'invoice' => $quickPrintTxn->invoice,
                    'transaction_reference' => $quickPrintTxn->transaction_reference,
                    'updated_at' => date($quickPrintTxn->updated_at, time())),
                $validate);
        } else {
            // create new txn
            //invoice format
            $validate['invoice'] = env('IRS_CODE') . date('Ymd') . $validate['agent_id'] . $validate['service_id'] . strtotime(date('Ymdhsi', time())).'QP';
            $validate['mac_id'] = request()->mac_id;
            $quickPrintTxn = QuickPrintInvoice::create($validate);
            $invoice = $quickPrintTxn->toArray();
        }


        // increase agent`s  unremit cash
//        Agent::find($validate['agent_id'])
//            ->increment('cash_remittance', $validate['amount']);
        $month= date('Y-m');

            $unremCash = UnremittedCash::where([
                ['agent_id', '=', $validate['agent_id']],
                ['month', '=',$month]
            ])
                ->first();
            // check if txn exist or not
            if (!empty($unremCash)) {

                // if exist,   aggregrate amount
                $unremTxnObj = UnremittedCash::where([
                    ['agent_id', '=', $validate['agent_id']],
                    ['month', '=',$month]
                ]);
                $unremTxnObj->update([
                    'amount'=>DB::raw('amount +'.$validate['amount']),
                    'total'=>DB::raw('total +'.$validate['amount']),

                ]);

                $unremTxn = $unremTxnObj->first();



            } else {
                // create new txn
              // TEMPO: use for now
                  if(empty(request()->lga_id)){
                     $user =  User::where(['userable_id'=>$validate['agent_id'],'role_id'=>env('AGENT')])->first();
                       $lga_id =$user->lga_id;
                  }
                    else
                       $lga_id = request()->lga_id;

                $unremTxn = UnremittedCash::create([
                    'agent_id'=>$validate['agent_id'],
                    'lga_id'=>$lga_id,
                    'month'=>$month,
                    'amount'=>$validate['amount'],
                    'total'=>$validate['amount'],
                ]);

            }


            // return  $unremTxn['invoice_id'];



            // TODO:   store id of Qprint in  unremitted table
            if( empty($unremTxn->invoice_id)  )
            {
                $id =[];   $bs = [];
                $qp = [$quickPrintTxn->id];
                $id['b'] = $bs;   $id['q'] = $qp;
                $inv_id = json_encode($id);

                $unremTxn->update(['invoice_id'=>$inv_id]);

            } else {
                $arr = json_decode($unremTxn->invoice_id, true);
                extract($arr);
                     $exist = in_array($quickPrintTxn->id,$q);
                  if(!$exist)   // ignore if id exists
                  $q = array_merge( $q,[$quickPrintTxn->id]);
                $id =  compact('b','q');
                $inv_id = json_encode($id);
                $unremTxn->update(['invoice_id'=>$inv_id]);

            }




          //  $revJob = (new sendRevenueJob())->delay(Carbon::now()->addSeconds(5));
            //dispatch($revJob);


            DB::commit();


            //   submit data to firbase here ..........
           if(($quickPrintTxn->id%2) == 0 )
                 $this->firebase();

      //   $revJob = (new sendRevenueJob()) ;  //->delay(Carbon::now()->addSeconds(30));
        //  dispatch($revJob);

        //  $response['data']= $revenue;
        $res['agent'] = User::where(['userable_id' => $validate['agent_id'], 'userable_type' => 'App\Agent'])
            ->get();

        $res['service'] = Service::find($validate['service_id']);
        $res['rev_point'] = RevenuePoint::find($validate['revenue_point_id']);


        $response = array_merge($invoice, $res);


        return response()->json([
            'status' => 'success',
            'data' => $response
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


    public function getQuickPrintInvoices($agent_id){

          $quicks = QuickPrintInvoice::with(['agent.user','service','revenue_point'])->where('agent_id',$agent_id)->get();

        return response()->json([
            'status' => 'success',
            'quickprintInvoices' => $quicks,
        ]);
    }


    public function quickPrintValidData(Request $request)
    {
        // $payments = ['cash', 'card'];

        // $request['payments'] = $payments;

//        $validate = $request->validate([
//            'revenue_point_id' => 'required|numeric|exists:revenue_points,id',
//            'service_id' => 'required|numeric|exists:services,id',
//            'agent_id' => 'required|numeric|exists:agents,id',
//             'amount' => 'required|numeric',
//         //   'transaction_reference' => 'required|unique:revenues,transaction_reference',
//
//        ]);

        $validate = \Validator::make($request->all(), [
            'revenue_point_id' => 'required|numeric|exists:revenue_points,id',
            'service_id' => 'required|numeric|exists:services,id',
            'agent_id' => 'required|numeric|exists:agents,id',
            'amount' => 'required|numeric',
            'lga_id' =>'sometimes|numeric|exists:lgas,id',
        ]);



        return $validate;
    }



    function indexMonth($month){


        if( $month  == date('m', strtotime('-11 month')))
            return 11;
        else if( $month  == date('m', strtotime('-10 month')) )
            return 10;
        else if( $month  ==  date('m', strtotime('-9 month'))  )
            return 9;
        else if( $month  == date('m', strtotime('-8 month')) )
            return 8;
        else if( $month  == date('m', strtotime('-7 month')) )
            return 7;
        else if( $month  == date('m', strtotime('-6 month')))
            return 6;
        else if( $month  == date('m', strtotime('-5 month')) )
            return 5;
        else if( $month  ==  date('m', strtotime('-4 month'))  )
            return 4;
        else if( $month  == date('m', strtotime('-3 month')) )
            return 3;
        else if( $month  == date('m', strtotime('-2 month')) )
            return 2;
        else if( $month  == date('m', strtotime('-1 month')) )
            return 1;

        else if( $month  == date('m'))
            return 0;
         else
             return -1;

    }


   // api for mDA to join all  transactions made in  moneta via revpro(mda and LGA)
    function  getMonetaTxn(Request $request){


      $validate = $request->all();
        $validator = \Validator::make($request->all(), [
            'from_date' => 'required|date',
            'to_date' => 'required|date|after:from_date',
            'api_token' => 'required|string',
        ]);

           $validator->after(function($validator) use($validate){
               if($validate['api_token'] !==  'ac29cdb2c3d14b4d442b0a76b3db59e3' ){
                   $validator->errors()->add('api_token', 'invalid token');
               }

           });

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }



        $fromDate = $validate['from_date']  ;
        $toDate = $validate['to_date'] ;

        $paidinvoices = Revenue::select('transaction_reference','amount')
            ->where([['payment_type','!=','cash'],['status','success']])

            ->whereBetween( DB::raw('date(updated_at)'), [DB::raw('date("' . $fromDate . '")'), DB::raw('date("' . $toDate . '")') ])
            ->get();

        $remittances = Remittance::select('transaction_reference','amount')
            ->where('status','success')
            ->whereBetween( DB::raw('date(updated_at)'), [DB::raw('date("' . $fromDate . '")'), DB::raw('date("' . $toDate . '")') ])
            ->get();

           $data = array();
           $i=0;
               foreach($paidinvoices as $paidinvoice ){

                   $data[$i]['reference'] = $paidinvoice['transaction_reference'];
                   $data[$i]['amount'] = $paidinvoice['amount'];
                   $i++;
               }


        foreach($remittances as $remittance ){

            $data[$i]['reference'] = $remittance['transaction_reference'];
            $data[$i]['amount'] = $remittance['amount'];
            $i++;
        }





        return response()->json([
            'status' => 'success',
            'data' => $data,
        ]);


    }





      // api for Governor
  /*  function  getLastTnxRevenue($lastTxnData){


      //    $lastTxnData = json_decode($validate['last_txn_data'],true);

             $date = array();
            foreach($lastTxnData as $ld){
                if(trim($ld['last_txn_date']) != '')
                    $date[] = $ld['last_txn_date'];
                }

        $current_date =  date('Y-m-d H:i:s');
       $earliest_date = (empty($date))?$current_date: min($date);
        $fromDate =  $earliest_date;
         $toDate =  $current_date;


        $bulkSingleInvs = Revenue::select('revenues.updated_at','revenues.amount','revenues.status','revenue_points.lga_id')
         ->leftjoin('revenue_points', 'revenues.revenue_point_id', '=', 'revenue_points.id')
            ->where('revenues.status', 'success')
           // ->leftjoin('users', 'users.userable_id', '=', 'revenues.agent_id')
           // ->where([['revenues.status', '=', 'success'], ['users.role_id', env('AGENT')]])
            ->whereBetween( 'revenues.updated_at', [ $fromDate, $toDate ])
            ->orderBy('revenues.updated_at','ASC')
            ->get();

        $quickPrintInvs = QuickPrintInvoice::select('quick_print_invoices.updated_at','quick_print_invoices.amount','revenue_points.lga_id')
          ->leftjoin('revenue_points', 'quick_print_invoices.revenue_point_id', '=', 'revenue_points.id')
         //   ->leftjoin('users', 'users.userable_id', '=', 'quick_print_invoices.agent_id')
           // ->where('users.role_id', env('AGENT'))
            ->whereBetween('quick_print_invoices.updated_at', [ $fromDate , $toDate ])
            ->orderBy('quick_print_invoices.updated_at','ASC')
            ->get();

        $lgas = Lga::where('state_id',5)->get();






           $data = array();
             $i =0;


            foreach( $lastTxnData as $lastTxn  ){
                $sumBS =  $sum = $sumQP = 0;
                $inactive = $inactiveTwo = $inactiveThree = 0;
                $yesterdayPaidInv = 0;
                $threshold = false;
                  $data[$i]['lga_id']  =  $lastTxn['lga_id'];

                   foreach($lgas  as $lga){
                       if($lga['id'] == $lastTxn['lga_id'] )
                           $data[$i]['name']  =  $lga['name'];
                   }

                foreach($bulkSingleInvs as $bs){

                    if($lastTxn['lga_id'] == $bs['lga_id'])
                    {
                        if(   strtotime($bs['updated_at']) >=  strtotime($lastTxn['last_txn_date'])     ){

                                 $sumBS = $sumBS + $bs['amount'];
                            }

                    }

                }



                foreach($quickPrintInvs as $qp){

                    if($lastTxn['lga_id'] == $qp['lga_id'])
                    {
                        if(  strtotime($qp['updated_at']) >=  strtotime($lastTxn['last_txn_date'])   ){

                            $sumQP = $sumQP + $qp['amount'];
                        }

                    }

                }

                  $sum =  $sumBS + $sumQP;



                if( isset($lastTxn['last_txn_date']) && !empty($lastTxn['last_txn_date']) ) {

                    $diff = date_diff(date_create($lastTxn['last_txn_date']),date_create($current_date));
                    $day = $diff->format("%a");

                    if( isset($day) &&  (int)$day >  3   )
                        $inactive = true;
                    else if( isset($day) &&   ((int)$day <=  2 )   )
                        $inactiveTwo = true;
                    else if( isset($day) && ( ((int)$day >  2)  &&  ((int)$day  <=  3 ) ) )
                        $inactiveThree =  true;



                }
                else if(!isset($lastTxn['last_txn_date']) || trim($lastTxn['last_txn_date']) == '' ) {   // no txn date
                    $inactive = true;
                }

                if ($sum >= 10000)  // and amount is equal or more 10k , then set threshold to true;
                    $threshold = TRUE;

                if(date('Y-m-d', strtotime($lastTxn['last_txn_date'])) == date('Y-m-d', strtotime('-1 day')) )
                    $yesterdayPaidInv = $sum;



                $data[$i]['receipt']  = $sum;
                $data[$i]['yesterday_receipt'] = $yesterdayPaidInv;
                $data[$i]['inactive'] = $inactive;
                $data[$i]['inactiveTwo'] = $inactiveTwo;
                $data[$i]['inactiveThree'] = $inactiveThree;
                $data[$i]['aboveThreshold'] = $threshold ;
                $data[$i]['last_txn_date'] = $lastTxn['last_txn_date'] ;



              $i++;
            }

              return $data;


//        return response()->json([
//            'status' => 'success',
//            'data' => $data,
//        ]);




    }  */


   /* public function firebase(){

        //CONNECT/INITIALIZE FIREBASE
        $database = app('firebase.database');
        $reference = $database->getReference('govData');

        //VIEW DATA IN TAX ENTITIES SNAPSHOT: YOU CAN USE THIS TO CHECK IF THE DATA IS POSTED
      //  $snapshot = $reference->getSnapshot();
       // print_r($snapshot->getValue());


       //GET LGA REVENUE DATA
           $data = $this->lgaRevenue();
        $realtime_revenue_data =  $data['revenues'];
        $month = intval(date('m'))-1;
        $lgaRev = $realtime_revenue_data->monthRev[$month]->receipt ?? 0;
        $prevMnt = $realtime_revenue_data->monthRev[$month-1]->receipt ?? 0;

        $lga_revenue_data = $data['lastTxnRev'];


        //THIS UPDATES FIREBASE
        $reference->update([
            'realtime_revenue_map' => $realtime_revenue_data,
            'lga_revenue_bar' => $lga_revenue_data,
            'widgets/lgaRev' => $lgaRev,
            'widgets/prevMnt' => $prevMnt
        ]);


    }   */


    public function   completeYearRevenue(Request $request){

        $validate = \Validator::make($request->all(), [
            'year' => 'required',
            'hash' => 'required'
        ]);

        if ($validate->fails()) {
            return response()->json( ['error'=>$validate->errors()], 422);
        }
               // Hash validation
            $hash =  hash_hmac('sha512',$request->year,md5($request->year), false);
          if ( $hash != $request->hash ){
              return response()->json( ['error'=>['hash'=>'invalid hash']], 422);
          }


         $startDate =  date("Y-m-d", strtotime('first day of January '.date($request->year) ));

          $endDate =     date("Y-m-d", strtotime('last day of December '.date($request->year) ));

              // Get Bulk & Single Revenue within in a year
        $BS = Revenue::select('revenues.amount',  'revenues.updated_at')
            ->where('revenues.status', 'success')
            ->whereBetween(DB::raw('date(revenues.updated_at)'),
                [DB::raw('date("' .$startDate . '")'), DB::raw('date("' . $endDate . '")')])
            ->orderBy('revenues.updated_at')
            ->get();

        $QP = QuickPrintInvoice::select('quick_print_invoices.amount', 'quick_print_invoices.updated_at')

            ->whereBetween(DB::raw('date(quick_print_invoices.updated_at)'),
                [DB::raw('date("' .$startDate . '")'), DB::raw('date("' . $endDate . '")')])
            ->orderBy('quick_print_invoices.updated_at')
            ->get();


            $month = [];
        $month_rev=[];


             $jan = 1; $feb = 2; $mar = 3;  $apr =  4; $may = 5;  $jun = 6;
              $jul = 7; $aug =8; $sep = 9; $oct =10; $nov =11; $dec = 12;

        $month_rev[(int)$jan] = $month_rev[(int)$feb] = $month_rev[(int)$mar]= $month_rev[(int)$apr]= $month_rev[(int)$may] =  0;
        $month_rev[(int)$jun] = $month_rev[(int)$jul] = $month_rev[(int)$aug] =0 ;
        $month_rev[(int)$sep] = $month_rev[(int)$oct] = $month_rev[(int)$nov] =  $month_rev[(int)$dec] =0 ;



        foreach($BS as $rev){

            $m = substr($rev['updated_at'],5,2);
            $month_rev[(int)$m] = $month_rev[(int)$m] + $rev['amount'];
        }



        foreach($QP as $rev2){

            $mnth = substr($rev2['updated_at'],5,2);
            $month_rev[(int)$mnth] = $month_rev[(int)$mnth] + $rev2['amount'];    //add up rev
        }

        $data =[];
        $mnth_rev = $month_rev;
        $i=0;  $j= 1;
        foreach($month_rev as $rev ){
            $data[$i]['month'] = $j; //date('m', strtotime($j));
            $data[$i]['revenue'] =  $mnth_rev[$j];

            $j++; $i++;
        }


        return response()->json([
                'status' => 'success',
                'data' => $data
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


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Revenue  $revenue
     * @return \Illuminate\Http\Response
     *  To update status of revenue
     */

    public function update(Request $request)
    {
//        $response = $request->validate([
//            'status' => 'required',
//            'reference' => 'required|exists:revenues,transaction_reference'
//        ]);

        $validator = \Validator::make($request->all(), [
            'status' => 'required',
            'reference' => 'required|exists:revenues,transaction_reference'
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }


        DB::beginTransaction();
        try {

            if ($request->input('status') == 1) {

                 $res ='';
                $curl = curl_init();

                $reference= $request->input('reference');
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
                        $revenue = Revenue::where('transaction_reference', $request->input('reference'))->firstorFail();

                        $revenue->status = 'success';
                        $revenue->mac_id = request()->ip();
                        $revenue->timestamps = false;
                        $revenue->bank = $bank;
                        $revenue->updated_at = date("Y-m-d H:i:s", strtotime($payment_date));
                          $res = $revenue->save();



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

                // return response()->json([
                //     'status' => 'success',
                //     'data' => []
                // ]);
            
              if($res)
                 return 'success';
              else 
                return 'failed';
            
            } 
        
       

        } catch(\Exception $ex){
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


    public function handlingOfflineData(Request $request){

         $data =  json_decode($request->getContent(),true);
        $verification =   json_decode($request->header('verification'));

        $spCount =  sizeof(@$data['single_print']);
        $qpCount =  sizeof(@$data['quick_print']);
        $remCount =  sizeof(@$data['remittance']);
         $packet_id = @$data['packet_id'];

           // check if packet id exist
         $res =  offlineDataTrail::where(['packet_id'=>$packet_id])->first();
        if( $res ){

            return response()->json([
                'status' => 'success',
                'data' =>'packetID already exist'
            ]);

        }

      if($spCount == $verification->singlePrintCount  && $qpCount == $verification->quickPrintCount  &&
           $remCount == $verification->remittanceCount  ){

          //   $qps = json
            if(!empty(@$data['quick_print'])){

                $verify = false;
                foreach(@$data['quick_print'] as $qp){

                    if( $qp['amount']*$qp['count']  ==  $qp['total'] )
                        $verify = true;
                    else{

                        $verify= false;
                          break;
                    }
                }
                if(!$verify){

                    //  log to  trails

                    $trails=[];
                    $trails['packet_id'] = $packet_id;
                    $trails['status'] = 'failed';
                    offlineDataTrail::create($trails);

                    return response()->json([
                        'status' => 'success',
                        'data' =>'rejected'
                    ]);
                }
                else {

                  processingOfflineData::dispatch($data,$verification->mac_id);

                    // $Job = (new processingOfflineData($data));  //->delay(Carbon::now()->addSeconds(30));
                    //dispatch($Job);

                    //  log to  trails
                    $trails=[];
                    $trails['packet_id'] = @$data['packet_id'];
                    $trails['status'] = 'success';
                    offlineDataTrail::create($trails);

                    return response()->json([
                        'status' => 'success',
                        'data' => 'done'
                    ]);

                }
            } else{
                   // in case if quickprint is empty
                // processingOfflineData::dispatch($request->getContent(),$verification->mac_id);
                processingOfflineData::dispatch($data,$verification->mac_id);
                // $Job = (new processingOfflineData($data));  //->delay(Carbon::now()->addSeconds(30));
                //dispatch($Job);
                $trails=[];
                $trails['packet_id'] = $packet_id;
                $trails['status'] = 'success';
                offlineDataTrail::create($trails);

                return response()->json([
                    'status' => 'success',
                    'data' =>'done'
                ]);
            }


       }   else{

          //  log to  trails

          $trails=[];
          $trails['packet_id'] = $packet_id;
          $trails['status'] = 'failed';
          offlineDataTrail::create($trails);

           return response()->json([
               'status' => 'success',
               'data' =>'rejected'
           ]);

       }





    }

     public function getOfflineDataTrail($packet_id){


         $data = offlineDataTrail::where('packet_id',$packet_id)->first();

          return response()->json([
        'status' => 'success',
        'data' =>$data
    ]);
     }



















































}
