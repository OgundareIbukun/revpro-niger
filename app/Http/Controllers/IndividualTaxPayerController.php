<?php

namespace App\Http\Controllers;
use App\IndividualTaxPayer;
use App\CorporateTaxPayer;
use Illuminate\Http\Request;

class IndividualTaxPayerController extends Controller
{
    //
  //  use App\SoftDeletes;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customer = IndividualTaxPayer::with('corporate_tax_payers')->get();

        return response()->json([
            'status' => 'success',
            'data' => $customer
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
//        $validate = $request->validate([
//           'name' => 'required',
//           'phone_no' => 'required',
//            'email' => 'required'
//        ]);

        $validate = $this->validData($request);

        $individual = IndividualTaxPayer::create($validate['individual']);

          $validate['corporate']['individual_tax_payer_id'] = $individual->id;

        $corporate = CorporateTaxPayer::create($validate['corporate']);

           //$ind = IndividualTaxPayer::find($individual->id);
         $corp = CorporateTaxPayer::find($corporate->id);

       // $output = array_merge($ind,$corp);

        return response()->json([
            'status' => 'success',
            'data' => $corp
        ], 201);


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(IndividualTaxPayer $individualTaxPayer)
    {
        return response()->json([
            'status' => 'success',
            'data' => $individualTaxPayer
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(IndividualTaxPayer $individualTaxPayer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, IndividualTaxPayer $individualTaxPayer)
    {
        $validate = $request->validate([
            'name' => 'required',
            'phone_no' => 'required',
            'email' => 'required',
            'tin' => 'required'
        ]);

        $individualTaxPayer->update($validate);

        return response()->json([
            'status' => 'success',
            'data' => $individualTaxPayer
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(IndividualTaxPayer $individualTaxPayer)
    {
        $individualTaxPayer->delete();

        return response()->json([], 204);
    }

//    public function search(Request $request){
//        $valid = $request->validate([
//            'query' => 'required|min:2',
//        ]);
//
//        $query = $valid['query'];
//        $customers = Customer::with('shops')
//            ->where('name', 'LIKE', '%'. $query .'%')
//            ->orWhere('phone', 'LIKE', '%'. $query .'%')
//            ->limit(5)
//            ->get();
//
//        return response()->json([
//            'status' => 'success',
//            'data' => $customers
//        ]);
//    }


    public function validData(Request $request)
    {


        $validate = $request->validate([
            'individual.name' => 'required',
            'individual.phone_no' => 'required|min:11|max:11',
            'individual.email' => 'required|email',
            'individual.identification' => 'sometimes',
            'individual.id_no' => 'sometimes',
            'corporate.name' => 'required',
            'corporate.category' => 'required',
            'corporate.sector' => 'required',
            'corporate.rc_no' => 'sometimes|min:8|max:15',
            'corporate.date_established' => 'required',
            'corporate.address' => 'required',
            'corporate.lga' => 'required',
            'corporate.town' => 'required',
            'corporate.staff_strength' => 'required',
            'corporate.corporate_birs_no' => 'sometimes',
            'corporate.corporate_tin_no' => 'sometimes',
            'corporate.geolocation' => 'sometimes'
        ]);
        return $validate;
    }
}
