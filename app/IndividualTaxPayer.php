<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\CorporateTaxPayer;

class IndividualTaxPayer extends Model
{
    //
  //  use SoftDeletes;

    protected $guarded = [];

    public function shops(){
        return $this->hasMany(Shop::class);
    }


    public function corporate_tax_payers(){

        return $this->hasMany(  CorporateTaxPayer::class);

    }


    public function revenue(){
        return $this->hasOne(  Revenue::class);

    }
}
