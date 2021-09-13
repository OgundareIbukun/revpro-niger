<?php

namespace App;

use App\Http\Controllers\permissionController;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    //

    protected $guarded=[];

    public function users(){
        //return $this->belongsToMany(User::class,Permission::Class,'userable_id','permission_id')->withTimestamps();
        return $this->belongsToMany(User::class)->withTimestamps();

    }

}
