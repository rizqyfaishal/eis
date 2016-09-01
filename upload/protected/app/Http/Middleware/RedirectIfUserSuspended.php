<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;

class RedirectIfUserSuspended
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,$guard = null)
    {
        if (!Auth::guard($guard)->check()) {
            return redirect(action('Auth\AuthController@showLoginForm'));
        }
        if(Auth::user()->status == 0){
            Session::flash('akun-suspended');
            return redirect(action('PageController@akunSuspended'));
        }
        return $next($request);
    }
}
