<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\RevenuePoint;
use App\Log;

class Revenue extends Model
{
    use SoftDeletes;

    protected $guarded = [];

      // protected $with = ['agent.user', 'customer', 'market', 'service', 'shop'];

    public function agent(){
        return $this->belongsTo(Agent::class);
    }



    public function service(){
        return $this->belongsTo(Service::class);
    }


    public function revenue_point(){
        return $this->belongsTo(RevenuePoint::class);
    }


    public function log(){

       // return $this->hasOne(Log::class,'id','log_id');
        return $this->belongsTo(Log::class);
    }

    public function individual_tax_payer(){

        // return $this->hasOne(Log::class,'id','log_id');
        return $this->belongsTo(IndividualTaxPayer::class);
    }



//    public function lgas()
//    {
//
//        return $this->hasManyThrough(\App\lga::class, RevenuePoint::class);
//    }

//     public function getPayment_TypeAttribute($attribute){
//
//        return[
//              'cash'=>'cash',
//            'card'=>'Debit Card',
//            'bank'=>'bank',
//            'card_bank'=>'Bank Transfer',
//            'card_ussd'=>'Bank Ussd',
//
//        ][$attribute];
//     }




/*
 * //    public function customer(){
//        return $this->belongsTo(Customer::class);
//    }



//    public function shop(){
//        return $this->belongsTo(Shop::class);
//    }
    public function market(){
        return $this->belongsTo(Market::class);
    }

*/


}
