<?php

namespace App\Http\Controllers;

use App\Agent;
use App\Remittance;
use App\Revenue;
use App\Lga;
use App\User;
use App\Service;
use App\QuickPrintInvoice;
use App\RevenuePoint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;


class DashboardController extends Controller
{


    // Revenue in each Lgas
    public function lga(Request $request)
    {


        $validate = $request->validate([
            'fromDate' => 'sometimes',
            'toDate' => 'sometimes',
        ]);
        $prevfromDate = ($validate['fromDate'] == '') ? date('Y-m-d', strtotime('first day of last month')) : date('Y-m-d', strtotime($validate['fromDate'] . ' -1 month'));
        $prevtoDate = ($validate['toDate'] == '') ? date('Y-m-d', strtotime('last day of last month')) : date('Y-m-d', strtotime($validate['toDate'] . ' -1 month'));


        $fromDate = ($validate['fromDate'] == '') ? date('Y-m-d', strtotime('first day of this month')) : $validate['fromDate'];
        $toDate = ($validate['toDate'] == '') ? date('Y-m-d', strtotime('last day of this month')) : $validate['toDate'];

        // to reset value of $prevtoDate
        $lastDay = date('t', strtotime(substr($toDate, 0, 7)));
        if ($lastDay == substr($toDate, 8))
            $prevtoDate = date('Y-m-t', strtotime(substr($toDate, 0, 7) . ' -1 month'));

        $services = Service::select('id', 'name')
            ->get();

        $prevBS = Revenue::select('revenue_points.lga_id', 'revenues.updated_at', 'revenues.amount')
            ->leftjoin('revenue_points', 'revenues.revenue_point_id',  'revenue_points.id')
            ->where('revenues.status', 'success')
            ->whereBetween(DB::raw('date(revenues.updated_at)'), [DB::raw('date("' . $prevfromDate . '")'), DB::raw('date("' . $prevtoDate . '")')])
            ->get();


        $prevQP = QuickPrintInvoice::select('revenue_points.lga_id', 'quick_print_invoices.updated_at', 'quick_print_invoices.amount')
            ->leftjoin('revenue_points', 'quick_print_invoices.revenue_point_id',  'revenue_points.id')
            ->whereBetween(DB::raw('date(quick_print_invoices.updated_at)'), [DB::raw('date("' . $prevfromDate . '")'), DB::raw('date("' . $prevtoDate . '")')])
            ->get();

        $BS = Revenue::select('revenue_points.lga_id', 'revenues.service_id', 'revenues.payment_type', 'revenues.updated_at', 'revenues.amount')
            ->leftjoin('revenue_points', 'revenues.revenue_point_id', 'revenue_points.id')
            ->where('revenues.status', 'success')
            ->whereBetween(DB::raw('date(revenues.updated_at)'), [DB::raw('date("' . $fromDate . '")'), DB::raw('date("' . $toDate . '")')])
            ->get();


        $QP = QuickPrintInvoice::select('revenue_points.lga_id', 'quick_print_invoices.service_id', 'quick_print_invoices.updated_at', 'quick_print_invoices.amount')
            ->leftjoin('revenue_points', 'quick_print_invoices.revenue_point_id',  'revenue_points.id')
            ->whereBetween(DB::raw('date(quick_print_invoices.updated_at)'), [DB::raw('date("' . $fromDate . '")'), DB::raw('date("' . $toDate . '")')])
            ->get();

        $Remits = Remittance::select('remittances.lga_id', 'remittances.amount', 'remittances.payment_type')
           // ->leftjoin('agents', 'agents.id', 'remittances.agent_id')
//            ->leftjoin('users', 'users.userable_id', 'agents.id')
//            ->leftjoin('lgas', 'users.lga_id', 'lgas.id')
            ->where('remittances.status', 'success')
            ->whereBetween(DB::raw('date(remittances.updated_at)'), [DB::raw('date("' . $fromDate . '")'), DB::raw('date("' . $toDate . '")')])
            ->get();

//        $Remits = Remittance ::     //select('lga.id as lga_id','remittances.amount')
//        with('agent.user.lga')
//            ->where('remittances.status','success')
//            ->whereBetween(DB::raw('date(remittances.updated_at)'), [DB::raw('date("' . $fromDate . '")'), DB::raw('date("' . $toDate . '")')])
//            ->get();

        $user_lga_id = Auth::user()->lga_id;
        $agent = Agent::when( ( Auth::user()->role_id == env('ADMIN') || Auth::user()->role_id == env('SUPER_ADMIN') ||  Auth::user()->role_id == env('COMMISSIONER'))== false, function($query) use ($user_lga_id){
            return $query->join('users','agents.id','=','users.userable_id')
            ->where('users.lga_id',$user_lga_id);
        })
        ->count();


        $lgas = Lga::where('state_id', env("STATE_ID"))
        ->when( ( Auth::user()->role_id == env('ADMIN') || Auth::user()->role_id == env('SUPER_ADMIN') ||  Auth::user()->role_id == env('COMMISSIONER'))== false, function($query) use ($user_lga_id){
            return $query->where('id', $user_lga_id );
        })
        ->get();

        $thisMonthName = Carbon::parse($fromDate)->format('F'); // Carbon::now()->format('F');
        $prevMonthName = Carbon::parse($prevfromDate)->format('F'); //Carbon::now()->subMonth()->format('F');
//        $thisMonth =   Carbon::now()->format('m')  ;
//        $prevMonth =   Carbon::now()->subMonth()->format('m');

        $data = $lgaName = $receipt = $prevReceipt = $remittance = array();

        $totalReceipt = $totalRemit = $bank = 0;

        $i = 0;

        foreach ($lgas as $lga) {
            $sum = $sumRemit = $prevSum = $prevSumRemit = 0;
            $cashReceipt = $nCashPinv = 0;

            $lgaName[$i] = $lga['name'];

            foreach ($prevBS as $pRev) {


                if ($lga['id'] == $pRev['lga_id'])
                    $prevSum = $prevSum + $pRev['amount'];


            }


            foreach ($BS as $rev) {

                if ($lga['id'] == $rev['lga_id']) {
                    $sum = $sum + $rev['amount'];
                    $totalReceipt = $totalReceipt + $rev['amount'];

                    if ($rev['payment_type'] == 'cash') {
                        $cashReceipt = $cashReceipt + $rev['amount'];
                    }

                    if ($rev['payment_type'] != 'cash'){
                        $nCashPinv = $nCashPinv + $rev['amount'];   // non-cash paid invoice
                        $bank = $bank + $rev['amount'];
                    }
                   // if ($rev['payment_type'] == 'bank')
                     //   $bank = $bank + $rev['amount'];


                }

            }


            foreach ($prevQP as $rev3) {

                if ($lga['id'] == $rev3['lga_id'])
                    $prevSum = $prevSum + $rev3['amount'];
            }


            foreach ($QP as $rev4) {

                if ($lga['id'] == $rev4['lga_id']) {
                    $sum = $sum + $rev4['amount'];
                    $totalReceipt = $totalReceipt + $rev4['amount'];
                    $cashReceipt = $cashReceipt + $rev4['amount'];

                }

            }


            foreach ($Remits as $remit) {

                if ($lga['id'] == $remit['lga_id']) {
                    $sumRemit = $sumRemit + $remit['amount'];
                    // $totalRemit = $totalRemit + $remit['amount'];
                   // if ($remit['payment_type'] == 'bank')
                        $bank = $bank + $remit['amount'];
                }

            }


            $receipt[$i] = $sum;
            $prevReceipt[$i] = $prevSum;
            //  $remittance[$i] = $sumRemit;
            $data[$i]['sn'] = $i + 1;
            $data[$i]['lgaName'] = $lga['name'];
            //  $data[$i]['receipt'] = $sum;
            $data[$i]['remittance'] = $sumRemit;
            $data[$i]['cashReceipt'] = $cashReceipt;
            $data[$i]['nonCashPaidInv'] = $nCashPinv;

            $i++;


        }


        // services table

        $s = 0;
        $serviceData = [];
        $srvTotal = 0;

        foreach ($services as $service) {

            $sumSvr = $sumQP = 0;

            $serviceName[$s] = $service['name'];

            foreach ($BS as $bs) {

                if ($service['id'] == $bs['service_id']) {
                    $sumSvr = $sumSvr + $bs['amount'];
                    // $srvTotal = $srvTotal + $bs['amount'];

                }
            }


            foreach ($QP as $qp) {

                if ($service['id'] == $qp['service_id']) {
                    $sumSvr = $sumSvr + $qp['amount'];
                    //    $srvTotal = $srvTotal + $qp['amount'];

                }
            }


            $serviceData[$s]['sn'] = $s + 1;
            $serviceData[$s]['serviceName'] = $service['name'];
            $serviceData[$s]['receipt'] = $sumSvr;
            //  $serviceData[$s]['total_receipt'] =  $srvTotal;

            $s++;
        }


        return response()->json([
            'status' => 'success',
            'data' => [
                'receipt' => $receipt,
                'prevReceipt' => $prevReceipt,
                'lgaName' => $lgaName,
                'lgaData' => $data,
                'totalReceipt' => $totalReceipt,
                'bank' => $bank,
                'agent' => $agent,
                'prevMonthName' => $prevMonthName,
                'thisMonthName' => $thisMonthName,
                'service' => $serviceData
            ]
            // 'data'=>$Remits
        ]);


    }

    // Revenue in each Lgas
    public function RevPoint(Request $request)
    {


        $validate = $request->validate([
            'fromDate' => 'sometimes',
            'toDate' => 'sometimes',
            'lga_id' => 'sometimes',
        ]);
        $prevfromDate = ($validate['fromDate'] == '') ? date('Y-m-d', strtotime('first day of last month'))  : date('Y-m-d', strtotime($validate['fromDate'] . ' -1 month'));
        $prevtoDate = ($validate['toDate'] == '') ? date('Y-m-d', strtotime('last day of last month'))  : date('Y-m-d', strtotime($validate['toDate'] . ' -1 month'));;

        $fromDate = ($validate['fromDate'] == '') ? date('Y-m-d', strtotime('first day of this month'))  : $validate['fromDate'];
        $toDate = ($validate['toDate'] == '') ? date('Y-m-d', strtotime('last day of this month')) : $validate['toDate'];
        $lga = $validate['lga_id'];

        $services = Service::select('id', 'name')
            ->get();

        // to reset value of $prevtoDate
        $lastDay = date('t', strtotime(substr($toDate, 0, 7)));
        if ($lastDay == substr($toDate, 8))
            $prevtoDate = date('Y-m-t', strtotime(substr($toDate, 0, 7) . ' -1 month'));


        $Remits = Remittance::select('remittances.amount')
//            ->leftjoin('agents', 'agents.id', 'remittances.agent_id')
//            ->leftjoin('users', 'users.userable_id', 'agents.id')
//            ->leftjoin('lgas', 'users.lga_id', 'lgas.id')
            ->where([['remittances.status', 'success'], ['remittances.lga_id', $lga]])
            ->whereBetween(DB::raw('date(remittances.updated_at)'), [DB::raw('date("' . $fromDate . '")'), DB::raw('date("' . $toDate . '")')])
            ->sum('remittances.amount');


        $prevBS = Revenue::select('revenues.amount', 'revenues.revenue_point_id')
            ->leftjoin('revenue_points', 'revenues.revenue_point_id',  'revenue_points.id')
            ->where([['revenues.status','success'],['revenue_points.lga_id', $lga]])
           // ->leftjoin('users', 'users.userable_id', '=', 'revenues.agent_id')
           // ->where([['revenues.status', 'success'], ['users.lga_id', $lga], ['users.role_id', env('AGENT')]])
            ->whereBetween(DB::raw('date(revenues.updated_at)'), [DB::raw('date("' . $prevfromDate . '")'), DB::raw('date("' . $prevtoDate . '")')])
            ->get();


        $prevQP = QuickPrintInvoice::select('quick_print_invoices.amount', 'quick_print_invoices.revenue_point_id')
            ->leftjoin('revenue_points', 'quick_print_invoices.revenue_point_id',  'revenue_points.id')
            ->where('revenue_points.lga_id', $lga)
            //->leftjoin('users', 'users.userable_id', '=', 'quick_print_invoices.agent_id')
           // ->where([['users.lga_id', $lga], ['users.role_id', env('AGENT')]])
            ->whereBetween(DB::raw('date(quick_print_invoices.updated_at)'), [DB::raw('date("' . $prevfromDate . '")'), DB::raw('date("' . $prevtoDate . '")')])
            ->get();


        $BS = Revenue::select('revenues.amount', 'revenues.service_id', 'revenues.payment_type', 'revenues.revenue_point_id')
            ->leftjoin('revenue_points', 'revenues.revenue_point_id', 'revenue_points.id')
            ->where([['revenues.status','success'],['revenue_points.lga_id', $lga]])
//            ->leftjoin('users', 'users.userable_id', '=', 'revenues.agent_id')
         //   ->where([['revenues.status', 'success'], ['users.lga_id', $lga], ['users.role_id', env('AGENT')]])
            ->whereBetween(DB::raw('date(revenues.updated_at)'), [DB::raw('date("' . $fromDate . '")'), DB::raw('date("' . $toDate . '")')])
            ->get();


        $QP = QuickPrintInvoice::select('quick_print_invoices.amount', 'quick_print_invoices.service_id', 'quick_print_invoices.revenue_point_id')
            ->leftjoin('revenue_points', 'quick_print_invoices.revenue_point_id',  'revenue_points.id')
            ->where('revenue_points.lga_id', $lga)
           // ->leftjoin('users', 'users.userable_id', '=', 'quick_print_invoices.agent_id')
            //->where([['users.lga_id', $lga], ['users.role_id', env('AGENT')]])
            //  ->where('revenue_points.lga_id','=', $lga)
            ->whereBetween(DB::raw('date(quick_print_invoices.updated_at)'), [DB::raw('date("' . $fromDate . '")'), DB::raw('date("' . $toDate . '")')])
            ->get();


        $revpts = RevenuePoint:: select('name as revName', 'id')->where('lga_id', $lga)->get();


        $agent = Agent::leftjoin('users', 'agents.id', 'users.userable_id')
            ->where('users.lga_id', $lga)
            ->count();

        // Overall revenue generated
        $overall = Revenue::whereStatus('success')->sum('amount');
        $overall += QuickPrintInvoice::sum('amount');


        $thisMonthName = Carbon::parse($fromDate)->format('F'); // Carbon::now()->format('F');
        $prevMonthName = Carbon::parse($prevfromDate)->format('F');

        $data = $revptName = $receipt = $prevReceipt = $remittance = array();

        $totalReceipt = $totalRemit = $bank = 0;

        $i = 0;

        foreach ($revpts as $revpt) {

            $sum = $prevSum = $sumRemit = $cashReceipt = $nCashPinv = 0;

            $revptName[$i] = $revpt['revName'];

            foreach ($BS as $rev) {

                if ($revpt['id'] == $rev['revenue_point_id']) {
                    $sum = $sum + $rev['amount'];
                    $totalReceipt = $totalReceipt + $rev['amount'];


                    if ($rev['payment_type'] == 'cash') {
                        $cashReceipt = $cashReceipt + $rev['amount'];
                    }

                    if ($rev['payment_type'] != 'cash'){
                        $nCashPinv = $nCashPinv + $rev['amount'];   // non-cash paid invoice
                        $bank = $bank + $rev['amount'];
                    }


                 //   if ($rev['payment_type'] == 'bank')
                   //     $bank = $bank + $rev['amount'];


                }

            }


                foreach ($prevBS as $prev) {

                    if ($revpt['id'] == $prev['revenue_point_id'])
                        $prevSum = $prevSum + $prev['amount'];

                }

                foreach ($QP as $rev2) {
                    if ($revpt['id'] == $rev2['revenue_point_id']) {
                        $sum = $sum + $rev2['amount'];
                        $totalReceipt = $totalReceipt + $rev2['amount'];
                        $cashReceipt = $cashReceipt + $rev2['amount'];
                    }
                }


                foreach ($prevQP as $prev2) {
                    if ($revpt['id'] == $prev2['revenue_point_id'])
                        $prevSum = $prevSum + $prev2['amount'];

                }


                $receipt[$i] = $sum;
                $prevReceipt[$i] = $prevSum;


                $data[$i]['sn'] = $i + 1;
                $data[$i]['revptName'] = $revpt['revName'];
                $data[$i]['receipt'] = $sum;
                $data[$i]['cashReceipt'] = $cashReceipt;
                $data[$i]['nonCashPaidInv'] = $nCashPinv;

                $i++;




        }

            $bank = $bank + $Remits;


            // services table

            $s = 0;
            $serviceData = [];
            $srvTotal = 0;

            foreach ($services as $service) {

                $sumSvr = $sumQP = $srvTotal = 0;

                $serviceName[$s] = $service['name'];

                foreach ($BS as $bs) {

                    if ($service['id'] == $bs['service_id']) {
                        $sumSvr = $sumSvr + $bs['amount'];
                        //  $srvTotal = $srvTotal + $bs['amount'];

                    }
                }


                foreach ($QP as $qp) {

                    if ($service['id'] == $qp['service_id']) {
                        $sumSvr = $sumSvr + $qp['amount'];
                        //  $srvTotal = $srvTotal + $qp['amount'];

                    }
                }


                $serviceData[$s]['sn'] = $s + 1;
                $serviceData[$s]['serviceName'] = $service['name'];
                $serviceData[$s]['receipt'] = $sumSvr;
                //  $serviceData[$s]['total_receipt'] =  $srvTotal;

                $s++;
            }


            return response()->json([
                'status' => 'success',
                'data' => [
                    'overall'=>$overall,
                    'receipt' => $receipt,
                    'prevReceipt' => $prevReceipt,
                    'revptName' => $revptName,
                    'revptData' => $data,
                    'totalReceipt' => $totalReceipt,
                    'agent' => $agent,
                    'bank' => $bank,
                    'prevMonthName' => $prevMonthName,
                    'thisMonthName' => $thisMonthName,
                    'service' => $serviceData

                ]
            ]);




    }

}
