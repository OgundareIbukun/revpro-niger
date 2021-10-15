<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\User;
use Carbon\Carbon;

class ApiPassportAuth extends Controller
{
     public function login(){
        $validate = request()->validate([
            'email' => 'sometimes|required|string|email|max:255',
            'phone' => 'sometimes|required',
            'password' => 'required',

        ]);
         $user =  User::where(['phone'=>$validate['phone'],'userable_type'=>'App\Agent'])->first();

        if ($user) {
            if ( Hash::check($validate['password'], $user->password)) {

              //  $user1 = Auth::user();

                if ($user->mac_id == NULL  || $user->mac_id == request()->mac_id )
                {
                    $user->lastLog = Carbon::now()->toDateTimeString();
                    $user->mac_id = request()->mac_id;
                    $user->save();
                }
                else {

                    return response()->json([
                        'status' => 'error',
                        'message' => 'Your account cannot be logged on multiple devices.'
                    ],200);

                }

                $token = $user->createToken('MyToken')->accessToken;

                if(strpos($user->userable_type, 'Agent') !== false)
                    $user->load('userable.revenue_point.lga');

                return response()->json([
                    'status' => 'success',
                     'data' => $user,
                      'token' => $token
                ], 200);





            } else {

                return response()->json([
                    'status' => 'error',
                    'message' => 'Invalid Password',
                ], 422);
            }
        } else {
            //$response = ["message" =>'User does not exist'];
            return response()->json([
                'status' => 'error',
                'message' => 'Agent does not exist',
            ], 422);
        }


      /*  if(Auth::attempt($validate)){
            $user = Auth::user();

            if ($user->mac_id == NULL || $user->mac_id == request()->mac_id){
                $user->lastLog = Carbon::now()->toDateTimeString();
                $user->mac_id = request()->mac_id;
                $user->save();
            }
             else {

                 return response()->json([
                     'status' => 'error',
                     'message' => 'Your account cannot be logged on multiple devices.'
                 ],200);

             }

//            $user->update([
//                  'mac_id'=>  request()->mac_id
//             ]);
            $token = $user->createToken('MyToken')->accessToken;

            if(strpos($user->userable_type, 'Agent') !== false)
                $user->load('userable.revenue_point.lga');

            return response()->json([
                'status' => 'success',
              //  'data' => $user,
              //  'token' => $token
            ], 200);
        }

        else{

            return response()->json([
                'status' => 'status',
                'message' => 'Unauthorised'
            ], 401);
        }    */



    }


    public function logout (Request $request) {
        $token = $request->user()->token();
        $token->revoke();
        return response()->json([
            'status' => 'success',
            'message' => 'You have been successfully logged out!'
        ], 200);
    }


    public function register(Request $request)
    {
        $validate = $request->validate([
            'email' => 'required|email|unique:users|max:255',
            'name' => 'required',
            'password' => 'required',
            'cpassword' => 'required|same:password'
        ]);

        $validate = array_merge($validate, [
            'userable_id' => 1,
            'userable_type' => 'App\Admin'
        ]);

        $user = User::create($validate);
        $token = $user->createToken('MyToken')->accessToken;

        return response()->json([
            'status' => 'success', 
            'data' => $user,
            'token' => $token
        ], 201);
    }

    public function details(){
        $user = Auth::user();

        return response()->json([
            'status' => 'success',
            'data' => $user
        ], 200);
    }



    public function changePassword(Request $request)
    {
        $input = $request->all();
        $userid = Auth::guard('api')->user()->id;

        $rules = array(
            'old_password' => 'required',
            'new_password' => 'required|min:8',
            'confirm_password' => 'required|same:new_password',
        );
        $validator = \Validator::make($input, $rules);

        if ($validator->fails()) {
            $arr = array("status" => 'error', "message" => $validator->errors()->first(), "data" => array());
        } else {
            try {
                if ((Hash::check(request('old_password'), Auth::user()->password)) == false) {
                    $arr = array("status" => 'error', "message" => "Check your old password." );
                } else if ((\Hash::check(request('new_password'), Auth::user()->password)) == true) {

                    $arr = array("status" => 'error', "message" => "Please enter a password which is not similar to current password.",);
                } else {

                         $mac = (empty(request()->mac_id))?request()->ip():request()->mac_id;
                    User::where('id', $userid)->update(['password' => Hash::make($input['new_password']),
                           'mac_id'=>$mac
                        ]);
                    $arr = array("status" =>'success', "message" => "Password updated successfully.");
                }
            } catch (\Exception $ex) {
                if (isset($ex->errorInfo[2])) {
                    $msg = $ex->errorInfo[2];
                } else {
                    $msg = $ex->getMessage();
                }
                $arr = array("status" => 400, "message" => $msg, "data" => array());
            }
        }

        return response()->json($arr);
    }








}
