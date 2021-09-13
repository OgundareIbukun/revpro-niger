<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Agent;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Revenue;


class RevenuePoint extends Model
{
    //
    use SoftDeletes;

       protected $guarded=[];

      public function agent(){

          return $this->hasOne(Agent::class);
      }


    public function revenue(){

        return $this->hasMany(Revenue::class);
    }


    public function lga(){
        return $this->belongsTo(Lga::class);
    }


    public function agents(){
        return $this->belongsToMany(Agent::class)->withTimestamps();
    }


//    public function getTypeAttribute($attribute){
//
//        return [
//            1=>'Market',
//            2=>'Control Post',
//            3=>'Motor Park',
//            '1,2'=>'Market,Control Post',
//            '1,3'=>'Market,Motor Park',
//            '2,3'=>'Control Post,Motor Park',
//            '1,2,3'=>'Market,Control Post, Motor Park',
//        ][$attribute];
//    }

}
