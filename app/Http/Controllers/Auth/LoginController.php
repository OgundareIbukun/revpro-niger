<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Carbon\Carbon;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function authenticated(Request $request, $user)
    {

        if ($user->userable_type == 'App\Admin'){
            $user->lastLog = Carbon::now()->toDateTimeString();
        $user->mac_id = $request->ip();
        $user->save();
    }

       /*
        else if ($user->userable_type == 'App\Agent') {
            // Lock user login to a device.
            if ($user->mac_id == NULL || $user->mac_id == $request->mac_id){
                $user->lastLog = Carbon::now()->toDateTimeString();
                     $user->mac_id = $request->mac_id;
                    $user->save();
                } else {

                //Auth::logout();
                Auth::user()->token()->revoke();
                return response()->json([
                    'status' => 'error',
                    'message' => 'Using multiple devices not allowed!'
                ], 401);


            }

              }
       */



    }
}
