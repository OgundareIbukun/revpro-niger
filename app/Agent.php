<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Category;
use App\RevenuePoint;
use App\Revenue;
use App\UnremittedCash;

class Agent extends Model
{
    use SoftDeletes;

    protected $guarded = [];

    protected $attributes = [
        'max_collection' => 100000.00,//hundred thousand
        'remit_days' => 1
    ];

    //protected $with = ['user', 'agentable'];

    public function user(){
        return $this->morphOne('App\User', 'userable');
    }



    public function remittance(){
        return $this->hasMany(Remittance::class);
    }

    public function revenue(){
        return $this->hasMany(Revenue::class);
    }


    public function revenue_point(){

        return $this->belongsToMany(RevenuePoint::class)->withTimestamps();
    }

    public function unremittedCashes(){
        return $this->hasMany(UnremittedCash::class);
    }

    /*
     * public function categories(){

          return $this->belongsToMany(Category::class);
    }
     * public function market(){
   return $this->belongsTo(Market::class);
}
    get sector currently assigned //mirrors to agents
    public function agentable(){
        return $this->morphTo();
    }

    //get agents assignment history //mirrors to agents_assigned
    public function markets_assigned(){
        return $this->morphedByMany('App\Market', 'agent_assignmentable');
    }//Todo: repeat this for other sectors
    */




}
