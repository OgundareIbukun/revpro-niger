<?php

namespace App\Http\Controllers;

use App\Category;
use App\QuickPrintInvoice;
use App\UnremittedCash;
use function GuzzleHttp\Psr7\copy_to_string;
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
class LgChairmanDashboardController extends Controller
{
    //

    public function metrics(){

        $lga_id =  Auth::user()->lga_id;
        $lga = Lga::where('id',$lga_id )->get('name');
        $lga_name = $lga[0]['name'];


        // No of registered business in a lGA
        $businessRegs = CorporateTaxPayer::where('lga',$lga_name)->get();

        $corporate =0 ;  // no of registered business
        $corporate_month=0;  // no of registered business in current month
        $monthNumeric =   Carbon::now()->format('m');  // get numberic value of current month
        foreach($businessRegs as $businessReg){
            if( substr($businessReg['updated_at'],5,2) == $monthNumeric  )
                $corporate_month++;
            $corporate++;

        }

        // bulk and single invoices for a  current year
        $thisYearBS =   Revenue::leftjoin('revenue_points', 'revenues.revenue_point_id',  'revenue_points.id')
            ->where([['revenue_points.lga_id', $lga_id],['status','success']])           //join('revenue_points',	'revenues.revenue_point_id','=', 'revenue_points.id')
            // ->where([['users.lga_id',$lga_id],['status','success'],['users.role_id',env('AGENT')]])
            ->whereBetween(DB::raw('date(revenues.updated_at)'), [DB::raw('date("' .Carbon::now()->copy()->startOfYear()->toDateString(). '")'),
                DB::raw('date("' .Carbon::now()->copy()->endOfYear()->toDateString(). '")') ])
            ->sum('revenues.amount');

        // bulk and quick print invoices for a  current year
        $thisYearQP =   QuickPrintInvoice::leftjoin('revenue_points', 'quick_print_invoices.revenue_point_id',  'revenue_points.id')
            ->where('revenue_points.lga_id', $lga_id)
            ->whereBetween( DB::raw('date(quick_print_invoices.updated_at)'),
                [DB::raw('date("' .Carbon::now()->copy()->startOfYear()->toDateString(). '")'), DB::raw('date("' .Carbon::now()->copy()->endOfYear()->toDateString(). '")')])
            ->sum('quick_print_invoices.amount');

        $thisMonthBS =  Revenue::leftjoin('revenue_points', 'revenues.revenue_point_id',  'revenue_points.id')
            ->where([['revenue_points.lga_id', $lga_id],['revenues.status','success']])
            ->whereBetween(DB::raw('date(revenues.updated_at)'), [ DB::raw('date("' .Carbon::now()->copy()->startOfMonth()->toDateString(). '")'), DB::raw('date("' .Carbon::now()->copy()->endOfMonth()->toDateString(). '")')  ])
            ->get();

        $thisMonthQP =  QuickPrintInvoice::leftjoin('revenue_points', 'quick_print_invoices.revenue_point_id',  'revenue_points.id')
            ->where('revenue_points.lga_id', $lga_id)
            ->whereBetween(DB::raw('date(quick_print_invoices.updated_at)'),[ DB::raw('date("' .Carbon::now()->copy()->startOfMonth()->toDateString(). '")'), DB::raw('date("' .Carbon::now()->copy()->endOfMonth()->toDateString(). '")')  ])
            ->get();

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
                $thisMonthRev  =  $thisMonthRev + $monthTrans['amount'] ;

            }
            else if( $monthTrans['status'] == 'pending') {
                $UnpaidInvoice = $UnpaidInvoice + $monthTrans['amount'];
                $countUnpaidInv++;

            }

            else if( $monthTrans['status'] == 'uncleared') {
                $unclearCheque = $unclearCheque + $monthTrans['amount'];
                $countUnclearCheque++;
            }



        }


        foreach($thisMonthQP as $monthTrans2){

            $thisMonthRev  =  $thisMonthRev + $monthTrans2['amount'] ;

            $PaidInvoice = $PaidInvoice + $monthTrans2['amount'];
            $countPaidInv++;

        }

        $countAgent=0;
        $countAgent =  Agent::leftjoin('users','agents.id', 'users.userable_id')
            ->where([['users.lga_id', $lga_id],['role_id', env('AGENT')]])
            ->count('agents.id');

        $unremitCash=  UnremittedCash::join('users','unremitted_cashes.agent_id', 'users.userable_id')
            ->where([['users.lga_id', $lga_id],['users.role_id', env('AGENT')]])
            ->sum('unremitted_cashes.amount');
        // agent



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
                'UnremittedFund' =>  $unremitCash,
                'Agent'=>$countAgent,




            ]
        ]);








}


   // last six month revenue
    public function revenue(){

        $lga_id =  Auth::user()->lga_id;

         //  Get revenue for the last six month
        $BS= Revenue::select('revenues.amount','revenues.status', 'revenues.updated_at')
            ->leftjoin('revenue_points', 'revenues.revenue_point_id',  'revenue_points.id')
                ->where([['revenue_points.lga_id', $lga_id],['revenues.status','success']])
                ->whereBetween( DB::raw('date(revenues.updated_at)'),
                [ DB::raw('date("' .Carbon::now()->copy()->startOfMonth()->subMonth(5)->toDateString(). '")'),DB::raw('date("' . Carbon::now()->copy()->endOfMonth()->toDateString(). '")') ])
           ->orderBy('revenues.updated_at')
            ->get();

        $QP= QuickPrintInvoice::select('quick_print_invoices.amount', 'quick_print_invoices.updated_at')
            ->leftjoin('revenue_points', 'quick_print_invoices.revenue_point_id',  'revenue_points.id')
                ->where('revenue_points.lga_id', $lga_id)
            ->whereBetween(DB::raw('date(quick_print_invoices.updated_at)'), [ DB::raw('date("' .Carbon::now()->copy()->startOfMonth()->subMonth(5)->toDateString(). '")'), DB::raw('date("' .Carbon::now()->copy()->endOfMonth()->toDateString(). '")') ])
            ->orderBy('quick_print_invoices.updated_at')
            ->get();



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








        $BS_dept= Revenue::select('services.category_id as dept_id','revenues.amount as amount','revenues.invoice','revenues.updated_at')
            ->leftjoin('services',	'revenues.service_id','=', 'services.id')
            ->leftjoin('revenue_points', 'revenues.revenue_point_id',  'revenue_points.id')
            ->where([['revenue_points.lga_id', $lga_id],['revenues.status','success']])
            ->whereBetween(DB::raw('date(revenues.updated_at)'), [ DB::raw('date("' .Carbon::now()->copy()->startOfMonth()->toDateString(). '")'), DB::raw('date("' .Carbon::now()->copy()->endOfMonth()->toDateString(). '")') ])
            ->orderBy('revenues.updated_at')
            ->get();

        $QP_dept= QuickPrintInvoice::select('services.category_id as dept_id','quick_print_invoices.amount as amount','quick_print_invoices.invoice','quick_print_invoices.updated_at')
            ->leftjoin('services',	'quick_print_invoices.service_id','=', 'services.id')
          -> leftjoin('revenue_points', 'quick_print_invoices.revenue_point_id',  'revenue_points.id')
               ->where('revenue_points.lga_id', $lga_id)
            ->whereBetween(DB::raw('date(quick_print_invoices.updated_at)'), [ DB::raw('date("' .Carbon::now()->copy()->toDateString(). '")'), DB::raw('date("' .Carbon::now()->copy()->endOfMonth()->toDateString(). '")')  ])
            ->orderBy('quick_print_invoices.updated_at')
            ->get();

   $category = Category::all();

      $rev_dept = array();
        $deptName = array();
         $count = 0;



        foreach($category as $dept){
            $sum = 0;
            $deptName[$count] = $dept['name'];

            foreach($BS_dept as $rev_dpt){

                if($rev_dpt['dept_id'] == $dept['id'])
                    $sum = $sum + $rev_dpt['amount'];
            }

            foreach($QP_dept as $rev_dpt2){

                if($rev_dpt2['dept_id'] == $dept['id'])
                    $sum = $sum + $rev_dpt2['amount'];
            }


            $rev_dept[$count] = $sum;
            $count++;
        }





     //  $color = array('Revenue' => '#7873CE');


        return response()->json([
            'status' => 'success',
             //  'data'=>   $rev_dept,
            'data' => [
                'lastSixMonthRev' => $revenues,
                'monthName' => $month,
                'revenueDept'=>$rev_dept,
                'deptName'=>$deptName,


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





    public function revenuepoint(){

        $lga_id =  Auth::user()->lga_id;

//
//
        $thisMonthName = Carbon::now()->format('F');
        $prevMonthName = Carbon::now()->subMonth()->format('F');
        $label = array_merge(array($thisMonthName),array($prevMonthName));

        $thisMonthRev=array();
        $prevMonthRev=array();

        $thisMonthInv=array();
        $prevMonthInv=array();
      //  $revenuepoints=array();

           // Bulk and single invoice

        $BS= Revenue::select('revenues.revenue_point_id','revenues.amount','revenues.status','revenues.updated_at')
            ->leftjoin('revenue_points', 'revenues.revenue_point_id',  'revenue_points.id')
            ->where([['revenue_points.lga_id', $lga_id],['revenues.status','success']])
            ->whereBetween(DB::raw('date(revenues.updated_at)'), [ DB::raw('date("' .Carbon::now()->copy()->startOfMonth()->subMonth()->toDateString(). '")'), DB::raw('date("' .Carbon::now()->copy()->endOfMonth()->toDateString(). '")')])
            ->orderBy('revenues.amount', 'desc')
            ->get();


           // Quick prints invoices

        $QP= QuickPrintInvoice::select('quick_print_invoices.revenue_point_id','quick_print_invoices.amount','quick_print_invoices.status','quick_print_invoices.updated_at')
            ->leftjoin('users',	'quick_print_invoices.agent_id','=', 'users.userable_id')
            ->where('users.lga_id', $lga_id)
            ->whereBetween( DB::raw('date(quick_print_invoices.updated_at)'), [ DB::raw('date("' .Carbon::now()->copy()->startOfMonth()->subMonth()->toDateString(). '")'), DB::raw('date("' .Carbon::now()->copy()->endOfMonth()->toDateString(). '")')])
            ->orderBy('quick_print_invoices.amount', 'desc')
            ->get();

       $revenuepoints =  RevenuePoint::where('lga_id',$lga_id)->get();

         $cMonthNumeric = Carbon::now()->format('m');
        $lMonthNumeric =  Carbon::now()->subMonth()->format('m');


          $revPtsName = array();


            $i=0;
        foreach($revenuepoints as $rp){

               $cMnthSumInv =  $lMnthSumInv = 0;

            $revPtsName[$i] = $rp['name'];

            foreach($BS as $rev){

                if( (substr($rev['updated_at'],5,2) == $cMonthNumeric ) && ( $rp['id'] == $rev['revenue_point_id'] )  ){

                 //   if($rev['status'] == 'success' )
                        $cMnthSumInv =  $cMnthSumInv + $rev['amount'];

                }

                 else if( (substr($rev['updated_at'],5,2) == $lMonthNumeric) &&  ($rp['id'] == $rev['revenue_point_id']) ){   // last month data

                   // if($rev['status'] == 'success' )
                        $lMnthSumInv =  $lMnthSumInv + $rev['amount'];

                }
            }


            foreach($QP as $rev2){

                if( (substr($rev2['updated_at'],5,2) == $cMonthNumeric) && ($rp['id'] == $rev2['revenue_point_id'] ) ){
                   // $cMnthSumRev =  $cMnthSumRev + $rev2['amount'];
                        $cMnthSumInv =  $cMnthSumInv + $rev2['amount'];
                }

                else if( (substr($rev2['updated_at'],5,2) == $lMonthNumeric) &&  ($rp['id'] == $rev2['revenue_point_id']) ){   // last month data
                   // $lMnthSumRev =  $lMnthSumRev + $rev2['amount'];
                        $lMnthSumInv =  $lMnthSumInv + $rev2['amount'];
                }

            }

          //  $thisMonthRev[$i] = $cMnthSumRev;
             $thisMonthInv[$i] = $cMnthSumInv;
           // $prevMonthRev[$i] = $lMnthSumRev;
             $prevMonthInv[$i] = $lMnthSumInv;


            $i++;
        }

        $topper =array();
        $performer =array();
              $i=0;
            foreach( $thisMonthInv as $rev){
               $performer[$i]['id'] = $i+1;
               // $performer[$i]['revenue'] = $rev;
                $performer[$i]['name'] = $revPtsName[$i];
                $performer[$i]['paid_invoice'] = $rev;
                  $i++;

            }

           // sorting of value based on paid invoice
        $columns = array_column($performer, 'paid_invoice');
             array_multisort($columns,SORT_DESC,$performer);

              // selecting of first 10 performers
                $k=0;
        foreach( $performer as $p){
            $topper[$k]['id'] = $k+1;
            $topper[$k]['name'] = $p['name'];
          //  $topper[$k]['revenue'] = $p['revenue'];
            $topper[$k]['paid_invoice'] = $p['paid_invoice'];;
            $k++;
            if($k == 10 )
                break;

        }






      //  $color = array($thisMonthName => '#6c5b7c',$prevMonthName => '#32a7f5' );

        return response()->json([
            'status' => 'success',
          // 'data'=> $revenue_prevMonth
            'data' => [
               // 'ThisMonthRev' => $thisMonthRev,
               // 'PrevMonthRev' => $prevMonthRev,
                'ThisMonthRev' => $thisMonthInv,
                'PrevMonthRev' => $prevMonthInv,
                'RevenuePoints' => $revPtsName,
                'Label' => $label,
                'Topper'=> $topper,

            ]
        ]);



    }


     public function lga(){



                  $BS= Revenue::select('users.lga_id','revenues.amount')
                     ->leftjoin('revenue_points', 'revenues.revenue_point_id', '=', 'revenue_points.id')
                     ->leftjoin('users', 'users.userable_id', '=', 'revenues.agent_id')
                     ->where([['revenues.status', '=', 'success'], ['users.role_id', env('AGENT')]])
             ->whereBetween(DB::raw('date(revenues.updated_at)'),
                 [ DB::raw('date("' .Carbon::now()->copy()->startOfMonth()->toDateString(). '")'),DB::raw('date("' . Carbon::now()->copy()->endOfMonth()->toDateString(). '")')])
             ->get();

         $QP= QuickPrintInvoice::select('users.lga_id','quick_print_invoices.amount')
             ->leftjoin('revenue_points', 'quick_print_invoices.revenue_point_id', '=', 'revenue_points.id')
             ->leftjoin('users', 'users.userable_id', 'quick_print_invoices.agent_id')
             ->whereBetween(DB::raw('date(quick_print_invoices.updated_at)'), [ DB::raw('date("' .Carbon::now()->copy()->startOfMonth()->toDateString(). '")'), DB::raw('date("' .Carbon::now()->copy()->endOfMonth()->toDateString(). '")') ])
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
             ]
         ]);


     }

}
