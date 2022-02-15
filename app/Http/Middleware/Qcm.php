<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Whitelist
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
        if (auth()->user()->qcm < 8) {
            return $next($request);
        }else{
            return redirect('/panel/home');
        }
    }
}
