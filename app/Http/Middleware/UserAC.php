<?php

namespace App\Http\Middleware;

use Closure;

class UserAC
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
        $acctype=substr($acctype,0,1);
        if($acctype=="E" || $acctype=="a"){
        return $next($request);
        }
        else{
        return redirect()->home();
        }
    }
}
