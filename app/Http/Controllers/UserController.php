<?php

namespace App\Http\Controllers;

use App\Permission;
use Illuminate\Http\Request;
use App\User;
use App\Lga;
use App\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    //

    public function index(){

         // excluding agent

        $users = User::where('role_id','!=', env('AGENT'))->with(['role','category','lga','permissions'])->get();

            $data = array();
            $i=0;
          foreach($users as $user){
              $data[$i]['sn'] = $i+1;
              $data[$i]['id'] = $user['id'];
              $data[$i]['name'] = $user['name'];
              $data[$i]['phone'] = $user['phone'];
              $data[$i]['email'] = $user['email'];
              $data[$i]['role_id'] = $user['role_id'];
              $data[$i]['category_id'] = $user['category_id'];
              $data[$i]['lga_id'] = $user['lga_id'];
              $data[$i]['role_name'] = $user['role']['name'];
              $data[$i]['category_name'] = $user['category']['name'];
              $data[$i]['lga_name'] = $user['lga']['name'];

              $name = implode(',', array_map(function($el){
                  return $el['name'];
              },$users[$i]['permissions']->toArray()));

              $data[$i]['permission'] = $name;

          $i++;
          }






        return response()->json([
            'status' => 'success',
            'data' => $data
        ]);
    }

    public function store(Request $request){

        $validate = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users|max:255',
            'phone' => 'required|unique:users',
            'password' => 'required',
            'cpassword' => 'required|same:password',
            'category_id' => 'sometimes',
            'lga_id' => 'sometimes',
            'role_id' => 'sometimes',
            'permission' => 'required',
        ]);


        if(Auth::user()->role_id != env('SUPER_ADMIN') ){

            return response()->json([
                'status' => 'error',
                'errors' => 'You don`t have privilege to add user!'
            ], 402);

        }

        if(array_key_exists('cpassword', $validate))
            unset($validate['cpassword']);


            $data=[];
           $data['name'] = $validate['name'];
        $data['email'] = $validate['email'];
        $data['phone'] = $validate['phone'];
        $data['password'] = $validate['password'];
        $data['category_id'] = $validate['category_id'];
        $data['lga_id'] = $validate['lga_id'];
        $data['role_id'] = $validate['role_id'];
          $data['userable_id'] = 1;
        $data['userable_type'] = 'App\Admin';


        $data['mac_id'] = $request->ip();


        $user = User::create($data);

        $permit_id=[];

       foreach( $validate['permission'] as $permit ){
            $per = Permission::where('name', $permit)->first();
            $permit_id[] = $per->id;
        }


        // add multiple rev point here
        $user->permissions()->sync($permit_id);


        return response()->json([
            'status' => 'success',
            'data' => $user->load(['role', 'lga'])
        ], 201);


    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $validate = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'category_id' => 'sometimes',
            'lga_id' => 'sometimes',
            'role_id' => 'sometimes',
             'mac_id'=> 'sometimes',
            'permission'=>'required'
        ]);

        $data['name'] = $validate['name'];
        $data['email'] = $validate['email'];
        $data['phone'] = $validate['phone'];
      // $data['password'] = $validate['password'];
        $data['category_id'] = $validate['category_id'];
        $data['lga_id'] = $validate['lga_id'];
        $data['role_id'] = $validate['role_id'];


        $data['mac_id'] = $request->ip();

        $user->update($data);


        $permit_id=[];
        // change revenue_pt_name to rev_pt_id
        foreach( array_filter( $validate['permission']) as $rev2 ){
            $r2 = Permission::where('name', $rev2)->first();
            $permit_id[] = $r2->id;
        }

        // update multiple permission here
        $user->permissions()->sync($permit_id);

        return response()->json([
            'status' => 'success',
            'data' => $user->load(['role', 'lga'])
        ]);


    }

    /**
     * Remove the specified resource from storage.
     *
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy( User $user)
    {
        $user->delete();
        return response()->json([], 204);
    }



   public function userDetails(){
        $user = Auth::user();
       //  $role = Role::where('id',$user->role_id);

       //  $data = array_merge($user->toArray(),$role->toArray());
       return response()->json([
           'status' => 'success',
           'data' => $user
       ]);

   }


    public function changePassword(Request $request)
    {
        $input = $request->all();
        $userid = Auth::user()->id;

//        $rules = array(
//            'old_password' => 'required',
//            'new_password' => 'required|min:8',
//            'confirm_password' => 'required|same:new_password',
//        );

        $validate = $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|min:8',
            'confirm_password' => 'required|same:new_password',
        ]);

       // $validator = \Validator::make($input, $rules);

//        if ($validator->fails()) {
//            $arr = array("status" => 'error', "data" => $validator->errors()->first());
//        }


           // try {
                if ((Hash::check(request('old_password'), Auth::user()->password)) == false) {
                    $arr = array("status" => 'error', "data" => "Check your old password." );
                } else if ((\Hash::check(request('new_password'), Auth::user()->password)) == true) {

                    $arr = array("status" => 'error', "data" => "Please enter a password which is not similar to current password.",);
                } else {

                    $mac = request()->ip();
                    User::where('id', $userid)->update(['password' => Hash::make(request('new_password')),
                        'mac_id'=>$mac
                    ]);
                    $arr = array("status" =>'success', "data" => "Password updated successfully.");
                }
//            } catch (\Exception $ex) {
//                if (isset($ex->errorInfo[2])) {
//                    $msg = $ex->errorInfo[2];
//                } else {
//                    $msg = $ex->getMessage();
//                }
//                $arr = array("status" => 'error', "message" => $msg, "data" => array());
//            }
       // }

        return response()->json($arr);
    }


    public function storeLga(Request $request){


        $validate = $request->validate([
            'name' => 'required',
            'state_id' => 'required',
        ]);

      //   $validate['state_id'] = env('STATE_ID');

        $lga =   Lga::create($validate);

        return response()->json([
            'status' => 'success',
            'data' => $lga
        ]);

}



    public function getLga()
    {

        $lgas = Lga::where('state_id', env('STATE_ID'))->get();


         $k=0;
          foreach( $lgas as $lga ){
               $data[$k]['sn'] = $k+1;
               $data[$k]['id'] = $lga['id'];
              $data[$k]['name'] = $lga['name'];
              $data[$k]['state_id'] = $lga['state_id'];
                $k++;
          }

        return response()->json(
            [
            'status' => 'success',
            'data' => $data
        ]
        );

    }


    public function updateLga(Request $request, Lga $lga){


        $validate = $request->validate([
            'name' => 'required',
            'state_id' => 'required',
        ]);



        $lga->update($validate);

        return response()->json([
            'status' => 'success',
            'data' => $lga
        ]);

    }

    public function destroyLga(Lga $lga)
    {
        $lga->delete();

        return response()->json([], 204);
    }




}
