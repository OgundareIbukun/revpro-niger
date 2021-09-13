<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use App\Range;
use App\Service;
use Illuminate\Support\Facades\Auth;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //


        //$category = Category::with(['services','ranges'])
        $category = Category::with('services.ranges')
            ->get();

        // return dd($category);

        return response()->json([
            'status' => 'success',
            'data' => $category
        ]);



    }

    // to fetch category name
    public function getall()
    {


        $user =  Auth::user();
        // HOD
        if( $user->role_id  == env('HOD')){

            $category_id =  $user->category_id;     // get dept id of hod
            $categories = Category::where('id',$category_id)
                ->get();
        }

        else {
            //if ( $user->role_id == env('ADMIN') || $user->role_id == env('SUPER_ADMIN') || $user->role_id == env('DIR_REVENUE')){   // superadmin and Dir Rev

            $categories = Category::all();

        }

           $i=0;
        foreach($categories as $category){

            // $dept[$i]['name'] = $category->name;
            $dept[] = $category->name;

            $i++;
        }

        return response()->json([
            'status' => 'success',
            'data' => $dept
        ]);


    }

    public function fetchall()
    {

        $categories = Category::all();

        return response()->json([
            'status' => 'success',
            'data' =>  $categories
        ]);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Category $category)
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
        $validate = $request->validate([
            'name' => 'required',
            'code' => 'required',
        ]);

        $category = Category::create($validate);

        return response()->json([
            'status' => 'success',
            'data' => $category
        ], 201);


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
    public function edit(Category $category)
    {
        return response()->json([
            'status' => 'success',
            'data' => $category
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {

        $validate = $request->validate([
            'name' => 'required',
            'code' => 'required'
        ]);

        $category->update($validate);

        return response()->json([
            'status' => 'success',
            'data' => $category
        ]);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return response()->json([], 204);
    }
}
