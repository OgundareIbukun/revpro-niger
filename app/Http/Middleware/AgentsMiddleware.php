<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AgentsMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        $response = $next($request);

        if(Auth::guard($guard)->check()){
            //echo (Auth()->user())->getMorphClass();exit;
            if( Auth()->user()->userable_type === 'App\Agent' ){
                //Auth::logout();
                //Auth::user()->token()->revoke();

                return  $response;
            }else{
                return response()->json([
                   'status' => 'error',
                   'message' => 'Only Agents can login!'
                ], 401);
            }
        }
        //return $next($request);
        //return $response;
    }
}
