<?php

namespace App;

use App\Lga;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{

    public function lgas(){
        return $this->hasMany(Lga::class);
    }

}
