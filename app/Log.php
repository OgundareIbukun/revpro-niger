<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Revenue;

class Log extends Model
{
    //use SoftDeletes;

    protected $guarded = [];

      public function revenue(){

          return $this->hasOne(Revenue::class);
}

}
