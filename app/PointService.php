<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PointService extends Model
{
    protected $fillable = [
        'revenue_point_id',
        'service_id'
    ];

    protected $with = ['service'];

    public function service(){
        return $this->hasMany(Service::class,'id','service_id');
    }

    public function revenue_point(){
        return $this->belongsToMany(RevenuePoint::class);
    }
}
