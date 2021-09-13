<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Permission;

class permissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $permissions = Permission::all();

         $k=0;  $data=[];
         foreach( $permissions as $permission){
              $data[$k]['sn'] = $k+1;
             $data[$k]['id'] = $permission['id'];
              $data[$k]['name'] = $permission['name'];
              $k++;
          }


            return response()->json([
                 'status'=>'success',
                  'data'=>$data
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
             $validate = $request->validate([
                   'name'=>'required'
             ]);


         $permission = Permission::create($validate);
        return response()->json([
            'status'=>'success',
            'data'=>$permission
        ]);
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
    public function update(Request $request, Permission $permission)
    {

        $validate = $request->validate([
            'name' => 'required'
        ]);
            $permission->update($validate);
        return response()->json([
            'status'=>'success',
            'data'=>$permission
        ]);


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

    public function permissionName()
    {
        //
        $permissions = Permission::all();

        $k=0;  $data=[];
        foreach( $permissions as $permission){
            $data[] = $permission['name'];
            $k++;
        }


        return response()->json([
            'status'=>'success',
            'data'=>$data
        ]);

    }

}
