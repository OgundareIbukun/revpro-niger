<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromArray;

class excelExport implements FromArray
{
    public $transactions;
    public function __construct($transactions)
    {
       $this->transactions = $transactions; 
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function array():array
    {
        return $this->transactions;
    }
}
