<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Agent;

class UnremittedCash extends Model
{
    //
    use SoftDeletes;
      protected  $guarded=[];

       public  function agent(){
            return $this->belongsTo(Agent::class);
        }
}
