<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Agent;
use App\QuickPrintInvoice;
use App\Remittance;
use App\UnremittedCash;
use App\Revenue;
use App\User;
use App\RevenuePoint;
use App\Service;
use App\Log;
use App\Lga;
use Illuminate\Support\Facades\DB;
use App\Traits\lgaRevenue;

class processingOfflineData implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels, lgaRevenue;

    public $data;
    public $mac_id;
    public  $single_print;
    public $quick_print;
    public $remittance;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($data,$mac_id)
    {
        //
        $this->data = $data;
        $this->mac_id = $mac_id;
        /* $this->single_print = @$data['single_print'];
         $this->quick_print = @$data['quick_print'];
        $this->remittance = @$data['remittance'];  */

    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        if(!empty(@$this->data['single_print'])){
            $this->storeSinglePrint(@$this->data['single_print']);
        }

        if(!empty(@$this->data['quick_print'])){
            $this->storeQuickPrint(@$this->data['quick_print']);
        }
        if(!empty(@$this->data['remittance'])){
            $this->storeRemittance(@$this->data['remittance']);
        }

        /*  if(!empty($this->single_print))
                $this->storeSinglePrint();
            if(!empty($this->quick_print))
                  $this->storeQuickPrint();
          if(!empty($this->remittance))
              $this->storeRemittance();   */



    }


    public function storeSinglePrint($singlePrint){
        // $singlePrint


        // DB::beginTransaction();
        try {


            foreach ($singlePrint as $sp){

                $validate =[];
                $validate['revenue']['revenue_point_id'] = $sp['revenue']['revenue_point_id'];
                $validate['revenue']['service_id'] = $sp['revenue']['service_id'];
                $validate['revenue']['agent_id'] = $sp['revenue']['agent_id'];
                $validate['revenue']['payment_type'] = $sp['revenue']['payment_type'];
                $validate['revenue']['bank'] = '';
                $validate['revenue']['description'] = $sp['revenue']['description'];
                $validate['revenue']['status'] = $sp['revenue']['status'];
                $validate['revenue']['amount'] = $sp['revenue']['amount'];
                $validate['revenue']['transaction_reference'] = ($sp['revenue']['payment_type'] == 'cash')? "CASH".str_pad(strtoupper(uniqid()),16, rand(1000,9999)) : $sp['revenue']['transaction_reference'];
                $validate['log']['full_name'] = $sp['log']['full_name'];
                $validate['log']['corporate_name'] = $sp['log']['corporate_name'];
                $validate['log']['vehicle_reg_no'] = $sp['log']['vehicle_reg_no'];
                $validate['log']['birs_id'] = $sp['log']['birs_id'];
                $validate['log']['tin_no'] = $sp['log']['tin_no'];

                // log
                $log = Log::create($validate['log']);

                $validate['revenue']['log_id'] = $log->id;
                //invoice format
                $validate['revenue']['invoice'] = env('IRS') . date('Ymd') . $validate['revenue']['agent_id'] . $validate['revenue']['service_id']
                    . strtotime(date('Ymdhsi', time())). mt_rand(000,9999).'BS';

                $validate['revenue']['payment_category'] = 'single';
                $validate['revenue']['mac_id'] = $this->mac_id;
                $revenue = $log->revenue()->create($validate['revenue']);

                $month = date('Y-m');   // get current month

                if ($validate['revenue']['payment_type'] == 'cash') {


                    $unremCash = UnremittedCash::where([
                        ['agent_id', '=', $validate['revenue']['agent_id']],
                        ['month', '=',$month]
                    ])->first();
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
                        $user =  User::where(['userable_id'=>$validate['revenue']['agent_id'],'role_id'=>env('AGENT')])->first();
                        $lga_id =$user->lga_id;

                        $unremTxn = UnremittedCash::create([
                            'agent_id'=>$validate['revenue']['agent_id'],
                            'lga_id'=>$lga_id,
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

            }



            // DB::commit();

            return true;

        } catch (\Exception $ex) {

            if (isset($ex->errorInfo[2])) {
                $msg = $ex->errorInfo[2];
            } else {
                $msg = $ex->getMessage();
            }

            // rollback operation for failure
            //DB::rollback();

            return false;

        }


    }

    public function storeQuickPrint($quickPrint){
        // $quickPrint


        // DB::beginTransaction();
        try {


            foreach ( $quickPrint as $qp ){

                $validate =[];
                $validate['agent_id'] = $qp['agent_id'];
                $validate['service_id'] = $qp['service_id'];
                $validate['revenue_point_id'] = $qp['revenue_point_id'];
                $validate['amount'] = $qp['total'];

                // $date = date('Y-m-d');
                $quickPrintTxn = QuickPrintInvoice::where([
                    ['agent_id', '=', $validate['agent_id']],
                    ['service_id', '=', $validate['service_id']],
                    ['revenue_point_id', '=', $validate['revenue_point_id']],
                    ['created_at', 'LIKE', '%' . $qp['date'] . '%']
                ])->first();
                // check if quickPrint txn exist or not
                if (!empty($quickPrintTxn)) {

                    // if exist, aggregrate amount
                       $quickPrintTxn->timestamps = false;   // incase of delay in processing d job
                    $qptxn = QuickPrintInvoice::find( $quickPrintTxn->id )->increment('amount', $validate['amount']);

                } else {
                    // create new txn
                    //invoice format
                    $validate['invoice'] = env('IRS') . date('Ymd') . $validate['agent_id'] . $validate['service_id']
                        . strtotime(date('Ymdhsi', time())). mt_rand(000,9999).'QP';
                    $validate['mac_id'] = $this->mac_id;
                    $quickPrintTxn = QuickPrintInvoice::create($validate);
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
                        'lga_id'=>$qp['lga_id'],
                        'amount'=>DB::raw('amount +'.$validate['amount']),
                        'total'=>DB::raw('total +'.$validate['amount']),

                    ]);

                    $unremTxn = $unremTxnObj->first();



                } else {
                    // create new txn
                    // TEMPO: use for now
                    /* if(empty($qp['lga_id'])){
                         $user =  User::where(['userable_id'=>$validate['agent_id'],'role_id'=>env('AGENT')])->first();
                         $lga_id =$user->lga_id;
                     }
                     else   */


                    $lga_id = $qp['lga_id'];

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



            }



            //  DB::commit();


//            if(($quickPrintTxn->id%2) == 0 )
//                $this->firebase();

            return true;

        } catch (\Exception $ex) {

            if (isset($ex->errorInfo[2])) {
                $msg = $ex->errorInfo[2];
            } else {
                $msg = $ex->getMessage();
            }

            // rollback operation for failure
            //DB::rollback();

            return false;

        }



    }

    public function storeRemittance($remittances){
        // $remittances
        //DB::beginTransaction();
        try {


            foreach ($remittances as $rem )
            {

                $validate =[];

                $validate['month'] =    date('Y-m', strtotime($rem['month']));  //$request->input('month');
                $validate['payment_type'] = $rem['payment_type'];
                $validate['status'] = $rem['status'];
                $validate['amount'] = $rem['amount'];
                $validate['transaction_reference'] = $rem['transaction_reference'];
                $validate['agent_id'] = $rem['agent_id'];
                $validate['lga_id'] = $rem['lga_id'];

                $validate['invoice'] = env('IRS').date('Ymd').$validate['agent_id'].random_int(0,9).strtotime(date('Ymdhsi',time()));


                $validate['mac_id'] =  $this->mac_id;
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


            }

            return true;



            //    DB::commit();

            return true;

        } catch (\Exception $ex) {

            if (isset($ex->errorInfo[2])) {
                $msg = $ex->errorInfo[2];
            } else {
                $msg = $ex->getMessage();
            }

            // rollback operation for failure
            // DB::rollback();

            return false;

        }


    }


}
