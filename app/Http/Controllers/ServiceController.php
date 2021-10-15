<?php

namespace App\Http\Controllers;

use App\Service;
use App\Range;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::with(['ranges','category'])->get();

        return response()->json([
            'status' => 'success',
            'data' => $services
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
        $validate = $this->validData($request);

        $service = Service::create($validate);

        return response()->json([
            'status' => 'success',
            'data' => $service
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        return response()->json([
            'status' => 'success',
            'data' => $service
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        return response()->json([
            'status' => 'success',
            'data' => $service
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        $validate = $this->validData($request);

        $service->update($validate);

        return response()->json([
            'status' => 'success',
            'data' => $service
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        $service->delete();
        return response()->json([], 204);
    }



    public function getRanges(Service $service){

        $ranges = $service->ranges()->get();

        return response()->json([
            'status' => 'success',
            'data' => $ranges
        ]);

    }


    public function storeRanges(Request $request){

        $validate = $this->validRangeData($request);

         $service = Service::find($validate['service_id']);

        $ranges = $service->ranges()->create($validate);

        return response()->json([
            'status' => 'success',
            'data' => $ranges
        ]);

    }

    public function updateRanges(Request $request)
    {
        $validate = $this->validRangeData($request);

        $validate['id'] = $request['id'];

        $service = Service::find($validate['service_id']);

        $ranges = $service->ranges()->where('id',$validate['id'])->update($validate);

        return response()->json([
            'status' => 'success',
            'data' => $ranges
        ]);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function deleteRanges($id)
    {

         $range = Range::where('id',$id)->delete();
        return response()->json(['deleted successfully'], 204);
    }




    /**
     * @param Request $request
     * @return array
     */
    public function validData(Request $request)
    {

        $validate = $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'frequency' => 'sometimes',
            'sub_category' => 'sometimes',
            'other_category' => 'sometimes',
            'category_id' => 'required|exists:categories,id',
        ]);
        return $validate;
    }

    public function validRangeData(Request $request)
    {

        $validate = $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'frequency' => 'sometimes',
            'service_id' => 'required|exists:services,id',
        ]);
        return $validate;
    }



    public function listServices()
    {
        $services = Service::with(['ranges','category'])->get();


        $i=0;  $data=array();
        foreach( $services  as $service){

            $data[$i]['sn'] = $i+1;
            $data[$i]['id'] = $service['id'];
            $data[$i]['name'] = $service['name'];
            $data[$i]['price'] = $service['price'];
            $data[$i]['frequency'] = $service['frequency'];
            $data[$i]['sub_category'] = $service['sub_category'];
            $data[$i]['other_category'] = $service['other_category'];
            $data[$i]['dept'] = $service['category']['name'];
            $data[$i]['range'] = $service['ranges'];
            $i++;

        }


        return response()->json([
            'status' => 'success',
            'data' => $data
        ]);
    }

    public function getServices(){
        $services = Service::select('id as value','name as text')->get();
        return response()->json([
            'status' => 'success',
            'data' => $services
        ]);
    }







}
