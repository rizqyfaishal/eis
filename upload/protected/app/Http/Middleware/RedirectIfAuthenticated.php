<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            if(Auth::user()->status == 2){
                Session::flash('rejected',true);
                return redirect(action('PageController@akunRejected'));
            }
            if(Auth::user()->status == 0){
                Session::flash('suspended',true);
                return redirect(action('PageController@akunSuspended'));
            }
            return redirect('/');
        }

        return $next($request);
    }
}
