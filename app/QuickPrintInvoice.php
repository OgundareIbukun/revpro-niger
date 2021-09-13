<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Service;

class QuickPrintInvoice extends Model
{
    //
    protected $guarded=[];

    public function agent(){
        return $this->belongsTo(Agent::class);
    }



    public function service(){
        return $this->belongsTo(Service::class);
    }


    public function revenue_point(){
        return $this->belongsTo(RevenuePoint::class);
    }


}
