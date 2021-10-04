<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImoService extends Model
{
    protected $fillable=[
        'mda_id',
        'name',
        'item_code'
    ];
}
