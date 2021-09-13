<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lga extends Model
{

     use SoftDeletes;

    protected $guarded = [];

    public function state(){
        return $this->belongsTo(State::class);
    }


//    public function revenue_point(){
//        return $this->belongsTo(RevenuePoint::class);
//    }

}
