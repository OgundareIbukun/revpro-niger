<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Remittance extends Model
{
    use SoftDeletes;

    protected $with = ['agent.user'];

    protected $guarded = [];

    public function agent(){
        return $this->belongsTo(Agent::class);
    }
}
