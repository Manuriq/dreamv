<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Auth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (auth()->user()) {
            return $next($request);
        }else{
            Session::flash('message', 'Vous devez vous connecter avant de pouvoir passer la withelist !'); 
            Session::flash('alert-class', 'alert-danger'); 
            return redirect('/panel/home');
        }
    }
}
