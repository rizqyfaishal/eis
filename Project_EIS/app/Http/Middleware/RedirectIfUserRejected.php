<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class RedirectIfUserRejected
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
        if(Auth::user()->status == 2){
            Session::flash('akun-rejected');
            return redirect(action('PageController@akunRejected'));
        }
        return $next($request);
    }
}
