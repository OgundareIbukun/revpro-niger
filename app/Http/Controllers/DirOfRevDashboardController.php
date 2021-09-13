<?php

namespace App\Http\Controllers;

use App\QuickPrintInvoice;
use Illuminate\Http\Request;
use App\Agent;
use App\Revenue;
use App\Lga;
use App\User;
use App\UnremittedCash;
use App\CorporateTaxPayer;
use App\RevenuePoint;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class DirOfRevDashboardController extends Controller
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
            ->where([['revenue_points.lga_id', $lga_id],['revenues.status','success']])           //join('revenue_points',	'revenues.revenue_point_id','=', 'revenue_points.id')
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

        $unremitCash=  UnremittedCash::
        //leftjoin('users','unremitted_cashes.agent_id', 'users.userable_id')
            where('unremitted_cashes.lga_id', $lga_id)
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


    public function revenuepoint(){

        $lga_id =  Auth::user()->lga_id;

        $thisMonthName = Carbon::now()->format('F');
        $prevMonthName = Carbon::now()->subMonth()->format('F');
      //  $label = array_merge(array($thisMonthName),array($prevMonthName));


        $thisMonthRev=array();
        $prevMonthRev=array();

        $thisMonthInv=array();
        $prevMonthInv=array();
        //  $revenuepoints=array();

        $bulkSingles= Revenue::select('revenues.revenue_point_id','revenues.amount','revenues.status','revenues.updated_at')
            ->leftjoin('revenue_points',	'revenues.revenue_point_id',	'=', 'revenue_points.id')
           // ->leftjoin('users','revenues.agent_id', 'users.userable_id')
                 ->where(['revenue_points.lga_id'=>$lga_id,'revenues.status'=>'success'])
            ->whereBetween(DB::raw('date(revenues.updated_at)'),
                [ DB::raw('date("' .Carbon::now()->copy()->startOfMonth()->subMonth()->toDateString(). '")'), DB::raw('date("' .Carbon::now()->copy()->endOfMonth()->toDateString(). '")') ])
            ->orderBy('amount', 'desc')
            ->get();

        $quickprints= QuickPrintInvoice::select('quick_print_invoices.revenue_point_id','quick_print_invoices.amount','quick_print_invoices.status','quick_print_invoices.updated_at')
            ->leftjoin('revenue_points',	'quick_print_invoices.revenue_point_id',	'=', 'revenue_points.id')
          // ->leftjoin('users','quick_print_invoices.agent_id', 'users.userable_id')
           ->where(['revenue_points.lga_id'=>$lga_id])
            ->whereBetween(DB::raw('date(quick_print_invoices.updated_at)'), [ DB::raw('date("' .Carbon::now()->copy()->startOfMonth()->subMonth()->toDateString(). '")'), DB::raw('date("' .Carbon::now()->copy()->endOfMonth()->toDateString(). '")')  ])
            ->orderBy('amount', 'desc')
            ->get();


        $revenuepoints =  RevenuePoint::where('lga_id',$lga_id)->get();

        $cMonthNumeric =  Carbon::now()->format('m');
        $lMonthNumeric =   Carbon::now()->subMonth()->format('m');


        $revPtsName = array();


        $i=0;
        foreach($revenuepoints as $rp){

      $cMnthSumInv  = $lMnthSumInv = 0;

            $revPtsName[$i] = $rp['name'];

            foreach($bulkSingles as $rev){

                if( (substr($rev['updated_at'],5,2) == $cMonthNumeric) && ($rp['id'] == $rev['revenue_point_id'] ) ){
                        $cMnthSumInv =  $cMnthSumInv + $rev['amount'];

                }

                else if( (substr($rev['updated_at'],5,2) == $lMonthNumeric) &&  ($rp['id'] == $rev['revenue_point_id']) ){   // last month data

                        $lMnthSumInv =  $lMnthSumInv + $rev['amount'];
                }

            }

                foreach($quickprints as $rev2) {

                    if ((substr($rev2['updated_at'], 5, 2) == $cMonthNumeric) && ($rp['id'] == $rev2['revenue_point_id'])) {

                        $cMnthSumInv = $cMnthSumInv + $rev2['amount'];

                    } else if ((substr($rev2['updated_at'], 5, 2) == $lMonthNumeric) && ($rp['id'] == $rev2['revenue_point_id'])) {   // last month data

                        $lMnthSumInv = $lMnthSumInv + $rev2['amount'];

                    }

                }
                  $thisMonthInv[$i] = $cMnthSumInv;

              $prevMonthInv[$i] = $lMnthSumInv;






            $i++;


        }


        // change in % for paid invoice
        $i=0;
        $percChangeInInv = [];
        foreach ($thisMonthInv as $cMnthInv){
            // $changePerc[$i] =  (($prevmonthRev[$i] - $monthRev[$i])/ $prevmonthRev[$i])*100 ;

            if($prevMonthInv[$i] == 0  && $cMnthInv == 0  )
                $percChangeInInv[] =0;
            else if($prevMonthInv[$i] == 0  && $cMnthInv >0  )
                $percChangeInInv[] =  round((($cMnthInv - $prevMonthInv[$i])/$cMnthInv*100 ),2) ;
            else
                $percChangeInInv[] =  round(((($cMnthInv - $prevMonthInv[$i])/ $prevMonthInv[$i])*100),2) ;
            $i++;
        }





        return response()->json([
            'status' => 'success',
            'data' => [
//                'ThisMonthRev' => $thisMonthRev,
//                'PrevMonthRev' => $prevMonthRev,
                'ThisMonthRevenue' => $thisMonthInv,
                'PrevMonthRevenue' =>$prevMonthInv,
                'RevenuePoints' => $revPtsName,
               'prevMnthLabel' => $prevMonthName ,
                'thisMnthLabel' => $thisMonthName,
                //'PercChangeInRev' => $percChangeInRev,
                'PercChangeInRevenue' => $percChangeInInv,



            ]
        ]);



    }



    public function Agent(){
        $lga_id =  Auth::user()->lga_id;


        $agentName = array();
        $revPtsName = array();
        $thisMonthRev = array();
        $thisMonthPaidInvoice = array();


        $BS =  User::select( 'revenues.agent_id','revenues.agent_id','users.name','revenues.amount','revenues.status')
            ->leftjoin('revenues',	'users.userable_id','=', 'revenues.agent_id')
            ->where([['users.lga_id','=', $lga_id ],['revenues.status','success' ],['users.userable_type', '=' ,'App\Agent'] ])
            ->whereBetween( DB::raw('date(revenues.updated_at)'), [ DB::raw('date("' .Carbon::now()->copy()->startOfMonth()->toDateString(). '")'), DB::raw('date("' .Carbon::now()->copy()->endOfMonth()->toDateString(). '")') ])
            ->get();

        $QP =  User::select( 'quick_print_invoices.agent_id','quick_print_invoices.agent_id','users.name','quick_print_invoices.amount','quick_print_invoices.status')
              ->leftjoin('quick_print_invoices',	'users.userable_id','=', 'quick_print_invoices.agent_id')
              ->where([['users.lga_id', $lga_id ],['users.userable_type','App\Agent']])
              ->whereBetween(DB::raw('date(quick_print_invoices.updated_at)'), [ DB::raw('date("' .Carbon::now()->copy()->startOfMonth()->toDateString(). '")'),DB::raw('date("' . Carbon::now()->copy()->endOfMonth()->toDateString(). '")') ])

              ->get();


        $agents =  User::select( 'users.name as agent_name','users.userable_id as agent_id')
            ->leftjoin('agents','users.userable_id','=', 'agents.id')
            //->leftjoin('revenue_points',	'agents.revenue_point_id','=', 'revenue_points.id')
            ->where([['users.lga_id', '=', $lga_id ],['users.userable_type', '=' ,'App\Agent']])
            ->get();





           $i=0;
        foreach($agents as $agent){
              $revSum = $invSum =0;

            $agentName[$i] = $agent['agent_name'];
            $revPtsName[$i] = $agent['rev_pts_name'];

               foreach( $BS as $rev){

                   if( $agent['agent_id'] == $rev['agent_id'] ){
                      // $revSum = $revSum + $rev['amount'];
                      // if($rev['status'] == 'success')
                           $invSum = $invSum + $rev['amount'];
                   }

               }

            foreach( $QP as $rev2){

                if( $agent['agent_id'] == $rev2['agent_id'] ){
                   // $revSum = $revSum + $rev2['amount'];
                        $invSum = $invSum + $rev2['amount'];
                }

            }


                 // $thisMonthRev[$i] = $revSum ;
                 $thisMonthPaidInvoice[$i] = $invSum;

                 $i++;
        }


         $topper= Array();
         $performer = array();
        $i=0;
        foreach( $thisMonthPaidInvoice as $rev){
            $performer[$i]['id'] = $i+1;
          //  $performer[$i]['revenue'] = $rev;
            $performer[$i]['name'] = $agentName[$i];
          // $performer[$i]['revpts_name'] = $revPtsName[$i];
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
            $topper[$k]['agentName'] = $p['name'];
        //    $topper[$k]['revPointName'] = $p['revpts_name'];
            // $topper[$k]['revenue'] = $p['revenue'];
            $topper[$k]['paidInvoice'] = $p['paid_invoice'];;
            $k++;
            if($k == 10 )
                break;

        }







    //  $Color = array('Revenue' => '	#800080');

        return response()->json([
            'status' => 'success',
            //  'data' => $topper,
            'data' => [
              //  'ThisMonthRev' => $thisMonthRev,
                'ThisMonthPaidInvoice' => $thisMonthPaidInvoice,
                'AgentName' => $agentName,
                'Topper' =>  $topper,

            ]
        ]);


    }




}
