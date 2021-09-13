<?php

namespace App\Http\Controllers;

use App\QuickPrintInvoice;
use App\Remittance;
use App\Revenue;
use App\User;
use Illuminate\Http\Request;
use App\Agent;
use App\UnremittedCash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;



class databaseAdjusterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {



//           $remits = Remittance::select('transaction_reference')->where('status','success')
//               ->offset(0)
//               ->limit(25)
//               ->get();

     //   $remits = UnremittedCash::select('id')->get();
          //  ->offset(0)
           //  ->limit(25)
             //get();



/*
           foreach($remits as $remit){

               $rem = UnremittedCash::where('id', $remit['id'])->firstorFail();
                $rem->timestamps = false;
                $rem->updated_at= $rem->created_at;
                 $rem->save();

           }

     */





        return response()->json([
            'status' => 'success',
            'data' =>'done!'
        ]);





    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
