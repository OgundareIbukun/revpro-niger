<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Admin extends Model
{
    use SoftDeletes;

    protected $guarded = [];

    public function user(){
        return $this->morphOne('App\User', 'userable');
    }

}
