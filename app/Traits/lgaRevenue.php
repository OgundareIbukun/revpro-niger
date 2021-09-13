<?php

namespace App\Traits;

use Illuminate\Http\Request;
use App\Revenue;
use App\QuickPrintInvoice;
use App\Lga;


trait lgaRevenue {

    /**
     * @param Request $request
     * @return array
     */
    // api for Governor
    public function lgaRevenue(){

        // Aims:
        // To get  paid revenue(paid invoice) in each LGA , get LGA not lodged tranx for three days and Also, get LGA that has max of 100k per a day

        // Invoices divided into two: QuickPrint Invoice (already paid invoices)  and Bulk and single Invoice (both paid and unpaid invoice)

        $bulkSingleInvs = Revenue::select('revenues.updated_at','revenues.amount','revenues.status','revenue_points.lga_id')
            ->leftjoin('revenue_points','revenues.revenue_point_id','=','revenue_points.id')
            ->where('revenues.status','success')
//              ->leftjoin('users', 'users.userable_id', '=', 'revenues.agent_id')
//            ->where([['revenues.status', '=', 'success'], ['users.role_id', env('AGENT')]])
            ->orderBy('revenues.updated_at','ASC')
            ->get();

        $quickPrintInvs = QuickPrintInvoice::select('quick_print_invoices.updated_at','quick_print_invoices.amount','revenue_points.lga_id')
            ->leftjoin('revenue_points','quick_print_invoices.revenue_point_id','=','revenue_points.id')
            //  ->leftjoin('users', 'users.userable_id', '=', 'quick_print_invoices.agent_id')
            // ->where('users.role_id', env('AGENT'))
            ->orderBy('quick_print_invoices.updated_at','ASC')
            ->get();

        $lgas = Lga::where('state_id',env('STATE_ID'))->get();

        //  $lgas = Lga::where([['state_id',5],['id',91]])->get();

        $i=0;
        $revenues = array();
        $current_date = date('Y-m-d H:i:s');
        $date = date('Y-m-d');

        foreach($lgas as $lga) {

            $revenues[$i]['name'] = $lga['name'];
            $revenues[$i]['lga_id'] = $lga['id'];
            $bsLastDate = '';
            $qpLastDate = '';
            $lastDate = '';
            $day = '';

            $bsLastAmount = '';
            $qpLastAmount = '';
            $yesterdayPaidInv =0;
            $currentMonthPaidInv =0;
            $prevMonthPaidInv =0;
            $paidInv = $qpInv = 0;
            $getBsInv =  $getQpInv =  array();
            $threshold = false;
            $inactive = $inactiveTwo = $inactiveThree =  false ;
            // $todayBsTxn =  $todayQpTxn =  0;
            // $amountInv = 0;
            $b = $b1 =  0;
            $month_rev = [];

            // Get Last 12 months rev init

            $month_rev[0] =  $month_rev[1] = $month_rev[2] = $month_rev[3]= $month_rev[4] = $month_rev[5] = $month_rev[6] = 0;
            $month_rev[7] = $month_rev[8] = $month_rev[9] =  $month_rev[10] = $month_rev[11]  = 0 ;



            // lopping thru bs inv
            foreach ($bulkSingleInvs as $bs) {

                if ($bs['lga_id'] == $lga['id']) {


                    // sum of paid invoice
                    $paidInv = $paidInv + $bs['amount'];
                    // sum of  yesterday`s paid invoice
                    if(date('Y-m-d', strtotime($bs['updated_at'])) == date('Y-m-d', strtotime('-1 day')) )
                        $yesterdayPaidInv = $yesterdayPaidInv + $bs['amount'];

                    // sum of current months`s paid invoice
                    if(date('Y-m-d', strtotime($bs['updated_at'])) >= date('Y-m-01')  &&
                        date('Y-m-d', strtotime($bs['updated_at'])) <= date('Y-m-t') )
                        $currentMonthPaidInv = $currentMonthPaidInv + $bs['amount'];

                    // prev month
                    if(date('Y-m-d', strtotime($bs['updated_at'])) >= date('Y-m-01', strtotime('-1 month'))
                        && date('Y-m-d', strtotime($bs['updated_at'])) <= date('Y-m-t',strtotime('-1 month'))
                    )
                        $prevMonthPaidInv = $prevMonthPaidInv + $bs['amount'];

//
//                    $ym = substr($bs['updated_at'],5,2);     //  2020-07
//                         $index = -1;
//                      $index = $this->indexMonth($ym);
//                        if( $index != -1 ){
//                              $mindex =0;
//                                $mindex = -1*(int)$index;
//                            if(date('Y-m-d', strtotime($bs['updated_at'])) >= date('Y-m-01', strtotime($mindex.' month'))
//                                && date('Y-m-d', strtotime($bs['updated_at'])) <= date('Y-m-t',strtotime($mindex.' month'))
//                            )
//                            $month_rev[$index]  =  $month_rev[$index] +  $bs['amount'];
//                        }


                    $date1 = substr($bs['updated_at'],0,7);
                    $date2 =  date('Y-m');

                    $ts1 = strtotime($date1);
                    $ts2 = strtotime($date2);

                    $md = ((date('Y', $ts2) - date('Y', $ts1)) * 12) + (date('m', $ts2) - date('m', $ts1));

                    if($md <= 11){

                        $month_rev[(int)$md]  =  $month_rev[(int)$md] +  $bs['amount'];
                    }

                    $getBsInv[$b1]['updated_at'] =  $bs['updated_at'];
                    $getBsInv[$b1]['amount'] =  $bs['amount'];
                    //  $amountInv = $amountInv + $bs['amount'];

                    $b1++;

                }

                $b++;
            }

            if (!empty( $getBsInv)) {
                $bsLastDate = $getBsInv[(count($getBsInv) - 1)]['updated_at'];   // get last date of txn
                $bsLastAmount = $getBsInv[(count($getBsInv) - 1)]['amount'];     // get last amount of tnx
            }

            $q =  $q1 = 0;
            foreach ($quickPrintInvs as $qp) {

                if ($qp['lga_id'] == $lga['id']) {

                    $qpInv = $qpInv + $qp['amount'];

                    // sum of yesterday paid invoice
                    if(date('Y-m-d', strtotime($qp['updated_at'])) == date('Y-m-d', strtotime('-1 day')) )
                        $yesterdayPaidInv = $yesterdayPaidInv + $qp['amount'];

                    // current month receipt
                    if(date('Y-m-d', strtotime($qp['updated_at'])) >= date('Y-m-01') &&
                        date('Y-m-d', strtotime($qp['updated_at'])) <= date('Y-m-t')
                    )
                        $currentMonthPaidInv = $currentMonthPaidInv + $qp['amount'];

                    if(date('Y-m-d', strtotime($qp['updated_at'])) >= date('Y-m-01', strtotime('-1 month')) &&
                        date('Y-m-d', strtotime($qp['updated_at'])) <= date('Y-m-t', strtotime('-1 month'))
                    )
                        $prevMonthPaidInv = $prevMonthPaidInv + $qp['amount'];


                    // last 12 months rev
//                $ym = substr($bs['updated_at'],5,2);     //  2020-07
////                    if($this->indexMonth($ym)  != 0 )
////                        $month_rev[$this->indexMonth($ym)]  += $qp['amount'];
//
//                    $index = -1;
//                    $index = $this->indexMonth($ym);
//                    if( $index != -1 ){
//                        $mindex =0;
//                        $mindex = -1*(int)$index;
//                        if(date('Y-m-d', strtotime($qp['updated_at'])) >= date('Y-m-01', strtotime($mindex.' month'))
//                            && date('Y-m-d', strtotime($qp['updated_at'])) <= date('Y-m-t',strtotime($mindex.' month'))
//                        )
//                            $month_rev[$index]  =   $month_rev[$index] + $qp['amount'];
//                    }

                    $date_1 = substr($qp['updated_at'],0,7);
                    $date_2 =  date('Y-m');

                    $ts1 = strtotime($date_1);
                    $ts2 = strtotime($date_2);

                    $md_1 = ((date('Y', $ts2) - date('Y', $ts1)) * 12) + (date('m', $ts2) - date('m', $ts1));

                    if($md_1 <= 11){

                        $month_rev[(int)$md_1]  =  $month_rev[(int)$md_1] +  $qp['amount'];
                    }




                    $getQpInv[$q1]['updated_at'] =  $qp['updated_at'];
                    $getQpInv[$q1]['amount'] =  $qp['amount'];

                    $q1++;

                }

                $q++;

            }


            if (!empty($getQpInv)) {
                $qpLastDate = $getQpInv[(count($getQpInv) - 1)]['updated_at'];   // get last day of txn
                $qpLastAmount = $getQpInv[(count($getQpInv) - 1)]['amount'];   // get last amount of tnx
            }


            // Get latest date between two dates of BS abd Qp
            if (isset($bsLastDate) && isset($qpLastDate)) {

                if ($qpLastDate > $bsLastDate) {
                    $lastDate = $qpLastDate;
                    if (date('Y-m-d', strtotime($qpLastDate)) == date('Y-m-d'))   // if last date is d today`s date
                        if ($qpLastAmount >= 10000)  // and amount is equal or more 10k , then set threshold to true;
                            $threshold = TRUE;

                } else {
                    $lastDate = $bsLastDate;
                    if (date('Y-m-d', strtotime($bsLastDate)) == date('Y-m-d'))
                        if ($bsLastAmount >= 10000)
                            $threshold = TRUE;
                }

            } else if (!isset($bsLastDate) && isset($qpLastDate)) {
                $lastDate = $qpLastDate;
                if (date('Y-m-d', strtotime($qpLastDate)) == date('Y-m-d'))
                    if ($qpLastAmount >= 10000)
                        $threshold = TRUE;

            } else if (isset($bsLastDate) && !isset($qpLastDate)){
                $lastDate = $bsLastDate;

                if (date('Y-m-d', strtotime($bsLastDate)) == date('Y-m-d'))
                    if ($bsLastAmount >= 10000)
                        $threshold = TRUE;
            }


            if( isset($lastDate) && !empty($lastDate) ){

                $diff = date_diff(date_create($lastDate),date_create($current_date));
                $day = $diff->format("%a");

                if( isset($day) &&  (int)$day >  3    )
                    $inactive = true;
                else if( isset($day) &&   ((int)$day <=  2 )   )
                    $inactiveTwo = true;
                else if( isset($day) && ( ((int)$day >  2)  &&  ((int)$day  <=  3 ) ) )
                    $inactiveThree =  true;



            }
            else if(!isset($lastDate) || trim($lastDate) == '' ) {   // no txn date
                $inactive = true;
            }


            $last12mnths= $mrev  =[];
            //   Re-arrange last12mnthdata in array
            $mrev = $month_rev;
            $k=0;  $j= 11;
            foreach($month_rev as $rev ){
                $last12mnths[$k] = $mrev[$j];
                $j--; $k++;
            }
            // $last12mnths= $month_rev;

            $revenues[$i]['receipt'] = $paidInv + $qpInv ;
            $revenues[$i]['yesterday_receipt'] = $yesterdayPaidInv;
            $revenues[$i]['currentmonth_receipt'] = $currentMonthPaidInv;
            $revenues[$i]['prevmonth_receipt'] = $prevMonthPaidInv;
            $revenues[$i]['inactive'] = $inactive;
            $revenues[$i]['inactiveTwo'] = $inactiveTwo;
            $revenues[$i]['inactiveThree'] = $inactiveThree;
            $revenues[$i]['aboveThreshold'] = $threshold ;
            $revenues[$i]['last_txn_date'] = $lastDate ;
            $revenues[$i]['last12Months'] = $last12mnths ;



            $i++;
        }

        // Get monthly paid revenue for a  current year

        /*$Bs_inv= Revenue::select('amount','status','updated_at')
            ->whereBetween(DB::raw('date(updated_at)'), [ DB::raw('date("' . date('Y-m-d', strtotime('first day of january this year'))  . '")'), DB::raw('date("' . date('Y-m-d', strtotime('last day of december this year'))  . '")') ])
            ->orderBy('updated_at')
            ->get();

        $quickPrint_inv= QuickPrintInvoice::select('amount','updated_at')
            ->whereBetween(DB::raw('date(updated_at)'), [ DB::raw('date("' . date('Y-m-d', strtotime('first day of january this year'))  . '")'), DB::raw('date("' . date('Y-m-d', strtotime('last day of december this year'))  . '")') ])
            ->orderBy('updated_at')
            ->get();  */


        $Bs_inv= Revenue::select('amount','status','updated_at')
            //  ->whereBetween(DB::raw('date(updated_at)'), [ DB::raw('date("' . date('Y-m-d', strtotime('first day of january this year'))  . '")'), DB::raw('date("' . date('Y-m-d', strtotime('last day of december this year'))  . '")') ])
            ->orderBy('updated_at')
            ->get();

        $quickPrint_inv= QuickPrintInvoice::select('amount','updated_at')
            //    ->whereBetween(DB::raw('date(updated_at)'), [ DB::raw('date("' . date('Y-m-d', strtotime('first day of january this year'))  . '")'), DB::raw('date("' . date('Y-m-d', strtotime('last day of december this year'))  . '")') ])
            ->orderBy('updated_at')
            ->get();


        // get all range years

        $year=[];

        $startYr=2020;
        $endYr=date('Y');

        while($startYr <= $endYr){
            $year[] = $startYr;
            $startYr++;
        }

        $Data = [];
        foreach($year as $yr ){

            $month =  $month_inv = array();
            $month[1] = $month[2] = $month[3] = $month[4] = $month[5]  = $month[6] =  0;      // reps receipt
            $month[7]  = $month[8] = $month[9]  = $month[10]  = $month[11]  = $month[12] = 0;

            $month_inv[1] = $month_inv[2] = $month_inv[3] = $month_inv[4] = $month_inv[5]  = $month_inv[6] =  0;    // unpaid inv
            $month_inv[7]  = $month_inv[8] = $month_inv[9]  = $month_inv[10]  = $month_inv[11]  = $month_inv[12] = 0;
//
            foreach($Bs_inv as $rev ) {


                $m = substr($rev['updated_at'], 5, 2);
                $y = (int)substr($rev['updated_at'], 0, 4);

                if($y == $yr ){

                    if ($rev['status'] == 'success'){

                        $month[(int)$m] = $month[(int)$m] + $rev['amount'];      // paid inv
                    }
                    else{

                        $month_inv[(int)$m] = $month_inv[(int)$m] + $rev['amount'];      // unpaid inv
                    }

                }

            }


            foreach($quickPrint_inv as $rev2 ) {

                $q = substr($rev2['updated_at'], 5, 2);
                $yq = (int)substr($rev2['updated_at'], 0, 4);
                if($yq == $yr ) {
                    $month[(int)$q] = $month[(int)$q] + $rev2['amount'];
                }
            }

            $data = array();
            $mnths = $month;
            $mnth_inv = $month_inv;
            $i=0;
            foreach($month as $mnth){

                $data[$i]['month'] = $i+1;
                $data[$i]['receipt'] =  $mnths[$i+1] ;
                $data[$i]['invoice'] =  $mnth_inv[$i+1] ;

                $i++;
            }

            $Data[$yr] = $data;

        }








        $lastTxnRev  = $this->getLastTnxRevenue($revenues);


        return [
            'revenues'=>[
                'lgaRev' => $revenues,
                'monthRev' => $Data,
            ],
            'lastTxnRev'=>$lastTxnRev

        ];








//        return response()->json([
//            'status' => 'success',
//               'revenues'=>[
//                   'lgaRev' => $revenues,
//                   'monthRev' => $data,
//                   ],
//                 'lastTxnRev'=>$lastTxnRev
//
//        ]);



    }

   public  function  getLastTnxRevenue($lastTxnData){


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

        $lgas = Lga::where('state_id',env('STATE_ID'))->get();






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




    }


    public function firebase(){

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


    }

}