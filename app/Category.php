<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Service;
use App\Range;
use App\Agent;

class Category extends Model
{
    //

    protected $guarded = [];


    public function services(){

       return  $this->hasMany(Service::class);


    }

    public function ranges()
    {

        return $this->hasManyThrough(Range::class, Service::class);
    }



    public function user(){

        return  $this->hasOne(User::class);


    }


    /*public function agents(){

        return $this->belongsToMany(Agent::class);
    }
    */


}
