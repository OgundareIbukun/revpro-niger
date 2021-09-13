<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
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
        if(Auth::guard($guard)->check()){
            //echo (Auth()->user())->getMorphClass();exit;

            if( Auth()->user()->userable_type !== 'App\Admin' ){
                Auth::logout();
                return redirect('/');
            }

        }
        return $next($request);
    }
}
