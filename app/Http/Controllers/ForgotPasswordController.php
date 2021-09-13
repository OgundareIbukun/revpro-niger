<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use Illuminate\Support\Facades\Session;

class ForgotPasswordController extends Controller
{
    //

          public function index()
          {
              return view('main');
          }


     public function initializeOTP(Request $request){

         $validator = \Validator::make($request->all(), [
             'phone' => 'required|numeric|exists:users,phone',
         ]);

         if ($validator->fails()) {
             return response()->json(['error'=>$validator->errors()], 422);
         }

              $otp =8760;
      /* $otp= rand(100000,999999);
         $text="**DO NOT DISCLOSE ** YOUR OTP IS $otp";
         $queryparams = http_build_query(
             array(
                 'api_token' =>'brKXinezHmd8oJq1GOjm0sA9op2tirpI5a7qHyamYcUr97OCTjVVPvno1db3',
                 'from' =>'RevPro',
                 'body' =>$text,
                 'to'=>request()->phone,
                 'dnd'=>2
             )
         );

         $curl = curl_init();
         curl_setopt_array($curl, array(
             CURLOPT_URL =>"https://www.bulksmsnigeria.com/api/v1/sms/create?".$queryparams,
             CURLOPT_RETURNTRANSFER => true,
             CURLOPT_ENCODING => '',
             CURLOPT_MAXREDIRS => 10,
             CURLOPT_TIMEOUT => 0,
             CURLOPT_FOLLOWLOCATION => true,
             CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
             CURLOPT_CUSTOMREQUEST => 'POST',
         ));

         $response = curl_exec($curl);

         curl_close($curl);
       //  echo $response;
         $result = json_decode($response, true);

          if($result['data']['status'] == 'success' && $result['data']['message'] == 'Message Sent' ){  */

              if($otp){

            // set otp and phone session
             // $request->session()->put('OTP', $otp);
             // $request->session()->put('phone', $request->phone);
              Session::put('OTP', $otp);
              Session::put('phone', $request->phone);

              return response()->json([
                  'status' => 'success',
                  'data' => 'OTP has sent to your registered phone number.'
              ]);


          }
         else{

             return response()->json([
                 'status' => 'error',
                 'message' => 'Something went wrong!'
             ]);

         }


     }


    public function verifyOTP(Request $request){

        $validator = \Validator::make($request->all(), [
            'otp' => 'required|numeric',
            'phone' => 'required|numeric|exists:users,phone',
        ]);

        if ($validator->fails()) {
            return response()->json(['error'=>$validator->errors()], 422);
        }

      //   $OTP = $request->session()->get('OTP');
      //  $PHONE = $request->session()->get('phone');

        $OTP = Session::get('OTP');
        $PHONE =Session::get('phone');

        if( $OTP == request()->otp &&  $PHONE == request()->phone  ){

            //Removing Session variable
          //  $request->session()->forget('OTP');
           // $request->session()->forget('phone');

            Session::forget('OTP');
            Session::forget('phone');


            return response()->json([
                'status' => 'success',
                'data' => 'OTP confirmed'
            ]);


        }
        else{

            return response()->json([
                'status' => 'error',
                'message' => 'Invalid OTP.'
            ]);

        }


    }


    public function resetPassword(Request $request)
    {
        $input = $request->all();
    //    $userid = Auth::guard('api')->user()->id;

        $rules = array(
            'phone' => 'required|exists:users,phone',
            'new_password' => 'required|min:8',
            'confirm_password' => 'required|same:new_password',
        );
        $validator = \Validator::make($input, $rules);

        if ($validator->fails()) {
            $arr = array("status" => 'error', "message" => $validator->errors()->first(), "data" => array());
        } else {
            try {
                    $user = User::where('phone',request('phone'))->first();
                 if ((\Hash::check(request('new_password'), $user->password)) == true) {

                   // $arr = array("status" => 'error', "message" => "Please enter a password which is not similar to current password.", "data" => array());
                   return   response()->json(['status'=>'error','message'=>"Please enter a password which is not similar to current password."], 422);

                } else {

                    $mac = (empty(request()->mac_id))?request()->ip():request()->mac_id;
                     User::where('phone',request('phone'))->update(['password' => Hash::make(request('new_password')),
                        'mac_id'=>$mac
                    ]);
                   // $arr = array("status" =>'success', "message" => "Password updated successfully.");

                     return   response()->json(['status'=>'success','message'=>"Password updated successfully."],200);
                }
            } catch (\Exception $ex) {
                if (isset($ex->errorInfo[2])) {
                    $msg = $ex->errorInfo[2];
                } else {
                    $msg = $ex->getMessage();
                }
             //   $arr = array("status" => 400, "message" => $msg, "data" => array());
                return   response()->json(['status'=>'error','message'=>$msg], 422);

            }
        }

       // return response()->json($arr);
    }


}
