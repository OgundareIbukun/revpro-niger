<?php

namespace App;
 use App\IndividualTaxPayer;

use Illuminate\Database\Eloquent\Model;

class CorporateTaxPayer extends Model
{
    //

    protected $guarded = [];


    public function individual_tax_payer(){

        return $this->belongsTo(IndividualTaxPayer::class);

    }
}
