<?php

namespace App\Http\Middleware;

use Closure;

class UserA
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $acctype=auth()->user()->acctype;
        if($acctype=="a"){
        return $next($request);
        }
        else{
        return redirect()->home();
        }
    }
}
