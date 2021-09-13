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

          function index(){

                  // get paid invoices at bank and card
              $Bs= Revenue::select('amount','payment_type','updated_at')
                  ->where('status','success')
                  ->where(function($query){
                      $query->where('payment_type','bank')
                             ->orWhere('payment_type','card');
                  })
                  ->get();

                       // get paid invoices at bank and card by agents
              $Remits = Remittance::select('amount','payment_type','updated_at')
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

                              if($month == substr($bs['updated_at'],5,2)  &&   $year == substr($bs['updated_at'],0,4))
                              {
                                     if($bs['payment_type'] == 'card' )
                                         $card = $card + $bs['amount'];
                                       else if($bs['payment_type'] == 'bank' )
                                           $bank = $bank + $bs['amount'];
                              }

                          }

                       foreach($Remits as $remit){

                           if($month == substr($remit['updated_at'],5,2)  &&   $year == substr($remit['updated_at'],0,4))
                           {
                               if($remit['payment_type'] == 'card' )
                                   $card = $card + $remit['amount'];
                               else if($remit['payment_type'] == 'bank' )
                                   $bank = $bank + $remit['amount'];
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
