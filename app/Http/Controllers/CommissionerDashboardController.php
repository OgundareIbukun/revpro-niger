<?php

namespace App\Http\Controllers;

use App\Category;
use App\Remittance;
use Illuminate\Http\Request;
use App\Agent;
use App\Revenue;
use App\Lga;
use App\User;
use App\QuickPrintInvoice;
use App\CorporateTaxPayer;
use App\RevenuePoint;
use App\UnremittedCash;
// use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class CommissionerDashboardController extends Controller
{
    //

       // metrics
    public function metrics(Request $request)
    {

        // $lga_id =  Auth::user()->lga_id;
        // $lga = Lga::where('id',$lga_id )->get('name');
        // $lga_name = $lga[0]['name'];


        $validate = $request->validate([
            'fromDate' => 'sometimes',
            'toDate' => 'sometimes',
            'lga' => 'sometimes',

        ]);
        $fromDate = ($validate['fromDate'] == '') ? Carbon::now()->copy()->startOfMonth()->toDateString() : $validate['fromDate'];
        $toDate = ($validate['toDate'] == '') ? Carbon::now()->copy()->endOfMonth()->toDateString() : $validate['toDate'];
        $lga_id = $validate['lga'];


        // No of registered business in all LGA
        if ($lga_id == 'all' || ((!isset($lga_id)) || trim($lga_id == ''))){
            $businessRegs = CorporateTaxPayer::all();

            // bulk and single invoices for a  current year
            $thisYearBS =   Revenue::whereBetween(DB::raw('date(revenues.updated_at)'), [DB::raw('date("' .Carbon::now()->copy()->startOfYear()->toDateString(). '")'),
                DB::raw('date("' .Carbon::now()->copy()->endOfYear()->toDateString(). '")')  ])
                ->sum('revenues.amount');

            // bulk and quick print invoices for a  current year
            $thisYearQP =   QuickPrintInvoice::whereBetween( DB::raw('date(quick_print_invoices.updated_at)'),
                [  DB::raw('date("' .Carbon::now()->copy()->startOfYear()->toDateString(). '")'),
                    DB::raw('date("' .Carbon::now()->copy()->endOfYear()->toDateString(). '")' )   ] )
                ->sum('quick_print_invoices.amount');

            $thisMonthBS =  Revenue::whereBetween( DB::raw('date(revenues.updated_at)'), [DB::raw('date("' . $fromDate . '")'), DB::raw('date("' . $toDate . '")')])
                ->get();

            $thisMonthQP =  QuickPrintInvoice::whereBetween( DB::raw('date(quick_print_invoices.updated_at)'),
                [ DB::raw('date("' . $fromDate . '")'), DB::raw('date("' . $toDate . '")') ] )
                ->get();
            $agents =  Agent::count();

        }
         else{

             $lga = Lga::where('id',$lga_id )->get('name');
             $lga_name = $lga[0]['name'];
             $businessRegs = CorporateTaxPayer::where('lga',$lga_name)->get();


             // bulk and single invoices for a  current year
             $thisYearBS =   Revenue::leftjoin('revenue_points', 'revenues.revenue_point_id', '=', 'revenue_points.id')
                 ->where('revenue_points.lga_id',$lga_id)
                // ->where('revenue_points.lga_id',	'=',	$lga_id)
                 ->whereBetween(DB::raw('date(revenues.updated_at)'), [DB::raw('date("' .Carbon::now()->copy()->startOfYear()->toDateString(). '")'),
                     DB::raw('date("' .Carbon::now()->copy()->endOfYear()->toDateString(). '")')   ])
                    ->sum('revenues.amount');
                             // bulk and quick print invoices for a  current year
             $thisYearQP =   QuickPrintInvoice::leftjoin('revenue_points', 'quick_print_invoices.revenue_point_id',  'revenue_points.id')
                 ->where('revenue_points.lga_id', $lga_id)
                 ->whereBetween(DB::raw('date(quick_print_invoices.updated_at)'),
                     [DB::raw('date("' .Carbon::now()->copy()->startOfYear()->toDateString(). '")'),
                         DB::raw('date("' .Carbon::now()->copy()->endOfYear()->toDateString(). '")')   ])
                 ->sum('quick_print_invoices.amount');

             $thisMonthBS =  Revenue::leftjoin('revenue_points', 'revenues.revenue_point_id', '=', 'revenue_points.id')
                 ->where('revenue_points.lga_id',$lga_id)
                 ->whereBetween(DB::raw('date(revenues.updated_at)'), [ DB::raw('date("' . $fromDate . '")'), DB::raw('date("' . $toDate . '")')])
                 ->get();

             $thisMonthQP =  QuickPrintInvoice::leftjoin('revenue_points', 'quick_print_invoices.revenue_point_id',  'revenue_points.id')
                 ->where('revenue_points.lga_id', $lga_id)
                 ->whereBetween(DB::raw('date(quick_print_invoices.updated_at)'), [DB::raw('date("' . $fromDate . '")'), DB::raw('date("' . $toDate . '")')])
                 ->get();

             $agents =  Agent::leftjoin('users', 'users.userable_id',  'agents.id')
                 ->where([['users.role_id',env('AGENT')],['users.lga_id', $lga_id]])->count();


         }

        $corporate =0 ;  // no of registered business
        $corporate_month=0;  // no of registered business in current month
        $monthNumeric =   Carbon::now()->format('m');  // get numberic value of current month
        foreach($businessRegs as $businessReg){
            if( substr($businessReg['updated_at'],5,2) == $monthNumeric  )
                $corporate_month++;
            $corporate++;

        }




        //quick_print_invoices


        $countPaidInv =0;    // count no of paidinvoice generated
        $countUnpaidInv =0;    // count no of unpaidinvoice generated
        $PaidInvoice =0; // monthly payment
        $UnpaidInvoice =0; // unpaid invoice for current month
        $countUnclearCheque =0;    // no of uncleared cheque
        $unclearCheque =0;    //  summation of uncleared cheque
        $thisMonthRev = 0 ;  // revenue generate in current month

        foreach($thisMonthBS as $monthTrans){

            if( $monthTrans['status'] == 'success') {
                $PaidInvoice = $PaidInvoice + $monthTrans['amount'];
                $countPaidInv++;

            }
            else if( $monthTrans['status'] == 'pending') {
                $UnpaidInvoice = $UnpaidInvoice + $monthTrans['amount'];
                $countUnpaidInv++;

            }

            else if( $monthTrans['status'] == 'uncleared') {
                $unclearCheque = $unclearCheque + $monthTrans['amount'];
                $countUnclearCheque++;
            }

            $thisMonthRev  =  $thisMonthRev + $monthTrans['amount'] ;

        }


        foreach($thisMonthQP as $monthTrans2){

            $thisMonthRev  =  $thisMonthRev + $monthTrans2['amount'] ;

            $PaidInvoice = $PaidInvoice + $monthTrans2['amount'];
            $countPaidInv++;

        }



        // agent

//        $countAgent =0 ;    // no of agents
//        $unremitCash =0;   // sum all cash unremit
//        foreach( $agents as $agent){
//        //    $unremitCash = $unremitCash +  $agent['cash_remittance'] ;
//            $countAgent++;
//        }


        $thisYearRev = $thisYearBS + $thisYearQP;



        return response()->json([
            'status' => 'success',
            'data' => [
                'TotalBusinessReg' => $corporate,
                'MonthlyBusinessReg' => $corporate_month,
                'MonthlyRevenue' =>  $thisMonthRev,
                'YearlyRevenue' => $thisYearRev,
                'PaidInvoice' =>  $PaidInvoice,
                'CountPaidInv' => $countPaidInv,
                'UnpaidInvoice' =>  $UnpaidInvoice,
                'CountUnpaidInv' => $countUnpaidInv,
                'CountUnclearCheque' => $countUnclearCheque,
                'UnclearCheque' =>   $unclearCheque,
          //      'UnremittedFund' =>  $unremitCash,
                'Agent'=>$agents,




            ]
        ]);







    }

    // Last six month Revenue
    public function revenue(Request $request)
    {

        $validate = $request->validate([
            'lga' => 'sometimes',
        ]);

  // DB::raw('date("' . $fromDate . '")')
        $lga = $validate['lga'];

        if($lga == 'all' || ((!isset($lga)) || trim($lga == '')) ) {
            $BS = Revenue::select('revenues.amount','revenues.status', 'revenues.updated_at')
                ->where('status','success')
                ->whereBetween(DB::raw('date(revenues.updated_at)'),
                    [  DB::raw('date("' . Carbon::now()->copy()->startOfMonth()->subMonth(5)->toDateString(). '")'), DB::raw('date("' . Carbon::now()->copy()->endOfMonth()->toDateString(). '")')  ])
                ->orderBy('revenues.updated_at')
                ->get();

            $QP = QuickPrintInvoice::select('quick_print_invoices.amount', 'quick_print_invoices.updated_at')
                ->leftjoin('revenue_points', 'quick_print_invoices.revenue_point_id', '=', 'revenue_points.id')
                ->whereBetween(DB::raw('date(quick_print_invoices.updated_at)'),
                    [ DB::raw('date("'. Carbon::now()->copy()->startOfMonth()->subMonth(5)->toDateString(). '")'), DB::raw('date("' . Carbon::now()->copy()->endOfMonth()->toDateString(). '")')])
                ->orderBy('quick_print_invoices.updated_at')
                ->get();


        }
        else
             {
            //  Get revenue for the last six month
            $BS = Revenue::select('revenues.amount', 'revenues.updated_at')
             ->leftjoin('users', 'users.userable_id', '=', 'revenues.agent_id')
                  ->where([['users.role_id','=',env('AGENT')],['users.lga_id', '=', $lga],['revenues.status','success']])
                ->whereBetween(DB::raw('date(revenues.updated_at)'),
                    [ DB::raw('date("'.Carbon::now()->copy()->startOfMonth()->subMonth(5)->toDateString(). '")'), DB::raw('date("'.Carbon::now()->copy()->endOfMonth()->toDateString(). '")') ])
                ->orderBy('revenues.updated_at')
                ->get();


        $QP = QuickPrintInvoice::select('quick_print_invoices.amount', 'quick_print_invoices.updated_at')
          ->leftjoin('users', 'users.userable_id', '=', 'quick_print_invoices.agent_id')
              ->where([['users.role_id','=',env('AGENT')],['users.lga_id', '=', $lga]])
            ->whereBetween( DB::raw('date(quick_print_invoices.updated_at)'),
                [ DB::raw('date("'.Carbon::now()->copy()->startOfMonth()->subMonth(5)->toDateString(). '")'),
                    DB::raw('date("'.Carbon::now()->copy()->endOfMonth()->toDateString().'")')  ])
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

        // Revenue in each Lgas
    public function lga(Request $request){

        // Lga Performance
        // $lga_id =  Auth::user()->lga_id;

        $validate = $request->validate([
            'fromDate' => 'sometimes',
            'toDate' => 'sometimes',
          //  'lga'=>'sometimes',
        ]);
        $fromDate =  ($validate['fromDate']== '' )? Carbon::now()->copy()->startOfMonth()->toDateString():$validate['fromDate']  ;
        $toDate = ($validate['toDate'] == '') ? Carbon::now()->copy()->endOfMonth()->toDateString():$validate['toDate'] ;


        $BS= Revenue::select('revenue_points.lga_id','revenues.amount')
           ->leftjoin('revenue_points', 'revenues.revenue_point_id',  'revenue_points.id')
              ->where('revenues.status','success')
            ->whereBetween(DB::raw('date(revenues.updated_at)'), [ DB::raw('date("' . $fromDate . '")'), DB::raw('date("' . $toDate . '")') ])
            ->get();


        $QP= QuickPrintInvoice::select('revenue_points.lga_id','quick_print_invoices.amount')
       ->leftjoin('revenue_points', 'quick_print_invoices.revenue_point_id',  'revenue_points.id')
            ->whereBetween(DB::raw('date(quick_print_invoices.updated_at)'), [ DB::raw('date("' . $fromDate . '")'), DB::raw('date("' . $toDate . '")') ])
            ->get();


        $lgaName = array();
        $thisMonthRev = array();

        $lgas = Lga::where('state_id',env('STATE_ID'))->get();

        $i=0;

        foreach($lgas as $lga){
            $sum =0;

            $lgaName[$i] = $lga['name'];

            foreach($BS as $rev){

                if( $lga['id'] == $rev['lga_id'])
                    $sum = $sum + $rev['amount'];
            }

            foreach($QP as $rev2){

                if( $lga['id'] == $rev2['lga_id'])
                    $sum = $sum + $rev2['amount'];
            }

            $thisMonthRev[$i] = $sum;

            $i++;


        }

        return response()->json([
            'status' => 'success',
            'data' => [
                'ThisMonthRev' => $thisMonthRev,
                'LgaName' => $lgaName,
                // 'Color' => $color

            ]
        ]);


    }


    // analysis of revenue based on component and level of remittances
    public function revComponentAndRemittance(Request $request)
    {

        $validate = $request->validate([
            'fromDate' => 'sometimes',
            'toDate' => 'sometimes',
            'lga' => 'sometimes',
        ]);

        $fromDate = ($validate['fromDate'] == '') ? Carbon::now()->copy()->startOfMonth()->toDateString() : $validate['fromDate'];
        $toDate = ($validate['toDate'] == '') ? Carbon::now()->copy()->endOfMonth()->toDateString() : $validate['toDate'];
        $lga = $validate['lga'];


        if ($lga == 'all' || ((!isset($lga)) || trim($lga == ''))) {

            $BS = Revenue::select('services.head', DB::raw('SUM(revenues.amount) as total'))
                ->leftjoin('services', 'revenues.service_id', '=', 'services.id')
             //   ->leftjoin('revenue_points', 'revenues.revenue_point_id', '=', 'revenue_points.id')
                ->whereBetween(DB::raw('date(revenues.updated_at)'), [DB::raw('date("' . $fromDate . '")'), DB::raw('date("' . $toDate . '")')])
                ->groupBy('services.head')
                ->get();

            $QP = QuickPrintInvoice::select('services.head', DB::raw('SUM(quick_print_invoices.amount) as total'))
                ->leftjoin('services', 'quick_print_invoices.service_id', '=', 'services.id')
              //  ->leftjoin('revenue_points', 'quick_print_invoices.revenue_point_id', '=', 'revenue_points.id')
                ->whereBetween(DB::raw('date(quick_print_invoices.updated_at)'), [DB::raw('date("' . $fromDate . '")'), DB::raw('date("' . $toDate . '")')])
                ->groupBy('services.head')
                ->get();


        } else {


            $BS = Revenue::select('services.head', DB::raw('SUM(revenues.amount) as total'))
                ->leftjoin('services', 'revenues.service_id', 'services.id')
                ->leftjoin('revenue_points', 'revenues.revenue_point_id',  'revenue_points.id')
                ->where([['revenues.status','success'],['revenue_points.lga_id', $lga]])
                //->leftjoin('revenue_points', 'revenues.revenue_point_id', '=', 'revenue_points.id')
               // ->where('users.lga_id', $lga)
                ->whereBetween(DB::raw('date(revenues.updated_at)'), [DB::raw('date("' . $fromDate . '")'), DB::raw('date("' . $toDate . '")')])
                ->groupBy('services.head')
                ->get();


            $QP = QuickPrintInvoice::select('services.head', DB::raw('SUM(quick_print_invoices.amount) as total'))
                ->leftjoin('services', 'quick_print_invoices.service_id', 'services.id')
                ->leftjoin('revenue_points', 'quick_print_invoices.revenue_point_id',  'revenue_points.id')
                ->where('revenue_points.lga_id', $lga)
                ->whereBetween(DB::raw('date(quick_print_invoices.updated_at)'), [DB::raw('date("' . $fromDate . '")'), DB::raw('date("' . $toDate . '")')])
                ->groupBy('services.head')
                ->get();

        }


        $componentLabel = array();
        $componentValue = array();

        $remittanceLabel = array();
        $remittanceValue = array();

        // $thisMonthRev = array();


        if ( (!isset($BS) || trim($BS == '') )  && (!isset($QP) ||  trim($QP == '') ) ) {
            $componentLabel[] = 0;
            $componentValue[] = 0;
        } else

        {


            $mergeRev = array_merge($BS->toArray(), $QP->toArray());
          $head =array();

        foreach ($mergeRev as $m) {
            $head[] = $m['head'];
        }

        $uniqueHead = array_unique($head, SORT_REGULAR);

        $i = 0;
        foreach ($uniqueHead as $u) {
            $sum = 0;
            foreach ($mergeRev as $m) {
                if ($u == $m['head'])
                    $sum = $sum + $m['total'];
            }

            $componentLabel[$i] = $u;
            $componentValue[$i] = $sum;
            $i++;

        }
    }



            // Remittance

        if($lga == 'all' || ((!isset($lga)) || trim($lga == '')) ) {

            $fromMonth = substr($fromDate, 0, 7);
            $toMonth = substr($toDate, 0, 7);

            if ($fromMonth == $toDate){
                $unremitted = UnremittedCash::where('month', $fromMonth)->sum('amount');

                   }
                  else if($fromMonth != $toDate){
                      $unremitted =  UnremittedCash::
                      whereBetween('month', [ DB::raw('date("' . $fromMonth . '")'), DB::raw('date("' . $toMonth . '")') ])
                          ->sum('amount');
                  }




        $remitted = Remittance::where('status','success')
           ->whereBetween(DB::raw('date(updated_at)'), [ DB::raw('date("' . $fromDate . '")'), DB::raw('date("' . $toDate . '")') ])
            -> sum('amount');

         $revenues = Revenue::whereBetween(DB::raw('date(updated_at)'), [ DB::raw('date("' . $fromDate . '")'), DB::raw('date("' . $toDate . '")') ])
             ->get();
        }
        else {

            $unremitted = UnremittedCash::where('lga_id', $lga)->sum('amount');


            $fromMonth = substr($fromDate, 0, 7);
            $toMonth = substr($toDate, 0, 7);

            if ($fromMonth == $toDate){
                $unremitted = UnremittedCash::where([['unremitted_cashes.lga_id',$lga],['month', $fromMonth]] )
               ->sum('amount');

            }
            else if($fromMonth != $toDate){
                $unremitted = UnremittedCash::where('unremitted_cashes.lga_id',$lga )
                ->whereBetween(DB::raw('date(month)'), [ DB::raw('date("' . $fromMonth . '")'), DB::raw('date("' . $toMonth . '")') ])
                    ->sum('amount');
            }

            $remitted = Remittance::
            leftjoin('agents', 'remittances.agent_id', '=','agents.id' )
           // ->leftjoin('users', 'users.userable_id', '=','agents.id' )
            ->where([['remittances.status','=','success'],['remittances.lga_id','=',$lga]])
                ->whereBetween(DB::raw('date(remittances.updated_at)'), [ DB::raw('date("' . $fromDate . '")'), DB::raw('date("' . $toDate . '")') ])
                ->sum('remittances.amount');

            $revenues = Revenue::leftjoin('revenue_points','revenues.revenue_point_id', '=','revenue_points.id' )
               // ->leftjoin('users', 'users.userable_id', '=','agents.id' )
           ->where('revenue_points.lga_id',$lga)
                ->whereBetween(DB::raw('date(revenues.updated_at)'), [ DB::raw('date("' . $fromDate . '")'), DB::raw('date("' . $toDate . '")') ])
                ->get();


        }
            $paidInv = $unpaidInv =0;

           foreach ($revenues as $revenue){

               if($revenue['status']  == 'pending'){
                    $unpaidInv = $unpaidInv + $revenue['amount'];
               } else {
                   $paidInv = $paidInv + $revenue['amount'];
               }

           }


        $remittanceLabel[0] = 'unremitted';
        $remittanceValue[0] = $unremitted;

        $remittanceLabel[1] = 'remitted';
        $remittanceValue[1] = $remitted+ $paidInv;

        $remittanceLabel[2]= 'unpaid invoice';
        $remittanceValue[2] = $unpaidInv;






        return response()->json([
            'status' => 'success',
            // 'data'=>  $remittance
            'data' => [
                'ComponentLabel' => $componentLabel,
                'ComponentValue' => $componentValue,
                'RemittanceLabel' => $remittanceLabel,
                'RemittanceValue' => $remittanceValue,
            ]
        ]);







    }


     function  lgaSummary(Request $request)
     {


         $validate = $request->validate([
             'fromDate' => 'sometimes',
             'toDate' => 'sometimes',
             'lga' => 'sometimes',
         ]);

         $fromDate = ($validate['fromDate'] == '') ? Carbon::now()->copy()->startOfMonth()->toDateString() : $validate['fromDate'];
         $toDate = ($validate['toDate'] == '') ? Carbon::now()->copy()->endOfMonth()->toDateString() : $validate['toDate'];
         $lga = $validate['lga'];


         if ($lga == 'all' || ((!isset($lga)) || trim($lga == ''))) {
             $BS = Revenue::select('revenue_points.lga_id', 'revenues.amount', 'revenues.status')
                 ->leftjoin('revenue_points', 'revenues.revenue_point_id',  'revenue_points.id')
               // ->leftjoin('users', 'users.userable_id', 'revenues.agent_id')
                  //  ->where('users.role_id','=',env('AGENT'))
                 ->whereBetween(DB::raw('date(revenues.updated_at)'), [DB::raw('date("' . $fromDate . '")'), DB::raw('date("' . $toDate . '")')])
                 ->get();


             $QP = QuickPrintInvoice::select('revenue_points.lga_id', 'quick_print_invoices.amount', 'quick_print_invoices.status')
                 ->leftjoin('revenue_points', 'quick_print_invoices.revenue_point_id', 'revenue_points.id')
                 //->leftjoin('users', 'users.userable_id', '=', 'quick_print_invoices.agent_id')
                 //->where('users.role_id','=',env('AGENT'))
                 ->whereBetween(DB::raw('date(quick_print_invoices.updated_at)'), [DB::raw('date("' . $fromDate . '")'), DB::raw('date("' . $toDate . '")')])
                 ->get();

             $agents = Agent::select('users.lga_id','agents.cash_remittance')
                 -> leftjoin('users', 'users.userable_id', '=', 'agents.id')
                 ->where('users.userable_type', '=', 'App\Agent')
                 ->get();

             $lgas = Lga::where('state_id',env('STATE_ID'))->get();

         } else
         {
             $BS = Revenue::select('revenue_points.lga_id', 'revenues.amount', 'revenues.status')
                 ->leftjoin('revenue_points', 'revenues.revenue_point_id',  'revenue_points.id')
                 ->where('revenue_points.lga_id', $lga)
             //  ->leftjoin('users', 'users.userable_id', '=', 'revenues.agent_id')
               //    ->where([['users.role_id','=',env('AGENT')],['users.lga_id', '=', $lga]])
                 ->whereBetween(DB::raw('date(revenues.updated_at)'), [DB::raw('date("' . $fromDate . '")'), DB::raw('date("' . $toDate . '")')])
                 ->get();

             $QP = QuickPrintInvoice::select('revenue_points.lga_id', 'quick_print_invoices.amount', 'quick_print_invoices.status')
                 ->leftjoin('revenue_points', 'quick_print_invoices.revenue_point_id',  'revenue_points.id')
                 ->where('revenue_points.lga_id', $lga)
               //  ->leftjoin('users', 'users.userable_id', '=', 'quick_print_invoices.agent_id')
                 //    ->where([['users.role_id','=',env('AGENT')],['users.lga_id', '=', $lga]])
                 ->whereBetween(DB::raw('date(quick_print_invoices.updated_at)'), [DB::raw('date("' . $fromDate . '")'), DB::raw('date("' . $toDate . '")')])
                 ->get();


             $agents = Agent::select('users.lga_id','agents.cash_remittance')
                 -> leftjoin('users', 'users.userable_id', '=', 'agents.id')
                 ->where([['users.userable_type', '=', 'App\Agent'],['users.lga_id', '=', $lga]])
                 ->get();

             $lgas = Lga::where('id',$lga)->get();

     }





         $data =array();
          // all lga in bauchi


          $i=0;

          foreach( $lgas as $lga ){
              $invoice =  $receipt = $unremitted =  0;
              $data[$i]['sn'] = $i+1;
              $data[$i]['lga_name'] = $lga['name'];

//                 foreach($agents as $agent){
//
//                     if($agent['lga_id'] == $lga['id'])
//                         $unremitted = $unremitted + $agent['cash_remittance'];
//                 }

              //$data[$i]['unremitted'] = $unremitted;

                foreach ($BS as $revenue){

                    if($revenue['lga_id'] == $lga['id'] ){
                        if($revenue['status'] == 'success')
                        $receipt = $receipt + $revenue['amount'];
                    $invoice = $invoice + $revenue['amount'];
                    }
                }

              foreach ($QP as $revenue2){

                  if($revenue2['lga_id'] == $lga['id'] ){

                      $receipt = $receipt + $revenue2['amount'];
                      $invoice = $invoice + $revenue2['amount'];
                  }
              }

              $data[$i]['receipt'] = $receipt;
              $data[$i]['invoice'] = $invoice;

            //  $invoice =  $receipt = $unremitted =  0;

            $i++;
          }




         return response()->json([
             'status' => 'success',
             'data' => [
                 'summary' => $data,

             ]
         ]);




     }




}

