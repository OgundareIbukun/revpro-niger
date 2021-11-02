<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Revenue;
use App\Remittance;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class settlementController extends Controller
{
    //

    function index(Request $request){

        // get paid invoices at bank and card
  //dd($request->lga_id);

  $lga_id = $request->lga_id;
  $fromDate = $request->fromDate;
  $toDate = $request->toDate;

    $Bs= Revenue::select('revenues.amount','revenues.payment_type','revenues.updated_at')
          ->when($request->lga_id,function($query) use ($lga_id){
              return  $query->join('revenue_points','revenues.revenue_point_id','=','revenue_points.id')
                      ->join('lgas','revenue_points.lga_id','=','lgas.id')
                      ->where('lgas.id','=',$lga_id);

          })
        ->where('status','success')
        ->where(function($query){
            $query->where('payment_type','bank')
                   ->orWhere('payment_type','card');
        })
        ->when((($fromDate != null) && ($toDate !=null)),function($query) use($fromDate,$toDate){
            return $query->where('revenues.created_at','>=',$fromDate)
                ->where('revenues.created_at','<=',$toDate);
        })

        ->get();



             // get paid invoices at bank and card by agents
    $Remits = Remittance::select('remittances.amount','remittances.payment_type','remittances.updated_at')
          ->when($request->lga_id, function($query) use ($lga_id){
              return $query->join('lgas','remittances.lga_id','=','lgas.id')
              ->where('remittances.lga_id',$lga_id);
          })
        ->where('status','success')
        ->where(function($query){
            $query->where('payment_type','bank')
                ->orWhere('payment_type','card');
        })
        ->get();



    $dateRanges = $this->dateRange(env('START_REV_MONTH'), date('Y-m'));
    $dateRanges =   array_reverse($dateRanges);

       $data = array();
            $i=0;
         foreach( $dateRanges as $dateRange){

             $card = $bank = 0;
              $cardTxnFee = $bankTxnFee = $cardSettlement = $bankSettlement = $totalSettlement = '';
             $year =   substr($dateRange,0,4);
               $month = substr($dateRange,5);


             $monthName = Carbon::parse($dateRange)->format('F');
             $data[$i]['sn'] = $i+1;
            $data[$i]['month'] = $monthName.','.$year;


                foreach($Bs as $bs){

                    if($month == substr($bs->updated_at,5,2)  &&   $year == substr($bs->updated_at,0,4))
                    {
                           if($bs->payment_type == 'card' )
                               $card = $card + $bs['amount'];
                             else if($bs->payment_type == 'bank' )
                                 $bank = $bank + $bs->amount;
                    }

                    

                }

             

             // card  txn fee

                if( $card <= 2500 )
                    $cardTxnFee = ( 1.5 / 100)* $card;
                 else if( $card > 2500 )
                     $cardTxnFee =  100 + (( 1.5 / 100)*$card);

                 // bank txn fee
                   $bankTxnFee = ( 1.5 / 100)* $bank;

                    $cardTxnFee = round($cardTxnFee,2);
                   $bankTxnFee = round($bankTxnFee,2);

                    $totalTxnFee = $cardTxnFee + $bankTxnFee;

                    $cardSettlement = $card  - $cardTxnFee;
             $bankSettlement = $bank  - $bankTxnFee;
                $totalSettlement = $bankSettlement + $cardSettlement;
             $totalSettlement = round($totalSettlement,2);


             $data[$i]['cardTxn'] = $card;
             $data[$i]['bankTxn'] = $bank;
             $data[$i]['cardTxnFee'] = $cardTxnFee;
             $data[$i]['bankTxnFee'] = $bankTxnFee;
             $data[$i]['totalTxnFee'] = $totalTxnFee;
             $data[$i]['cardSettlement'] = $cardSettlement;
             $data[$i]['bankSettlement'] = $bankSettlement;
             $data[$i]['totalSettlement'] = $totalSettlement;

        $i++;

         }

    return response()->json([
        'status' => 'success',
        'data' => [
            'settlement' => $data

        ]
        ]);

}













    function dateRange( $first, $last, $step = '+1 month', $format = 'Y-m' ) {

        $dates = array();
        $current = strtotime( $first );
        $last = strtotime( $last );

        while( $current <= $last ) {

            $dates[] = date( $format, $current );
            $current = strtotime( $step, $current );
        }

        return $dates;
    }



}
