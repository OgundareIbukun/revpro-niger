<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Service;
use App\Category;

class Range extends Model
{
    //
    protected $guarded = [];

//     Public function rangable(){
//
//         return $this->morphTo();
//     }


    public function service(){

        return  $this->belongTo(Service::class);
    }

//
//
//    public function category(){
//
//        return  $this->belongTo(Category::class);
//    }
}
