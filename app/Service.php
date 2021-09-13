<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Category;
use App\Range;

class Service extends Model
{
    use SoftDeletes;

    protected $guarded = [];




    public function category(){

        return $this->belongsTo(Category::class);
    }

    public function ranges(){

       return  $this->hasMany(Range::class);

    }

    public function revenue_point_service(){
        return $this->belongsToMany(PointService::class);
    }



}
