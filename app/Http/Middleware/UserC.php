<?php

namespace App\Http\Middleware;

use Closure;

class UserC
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
        if($acctype=="E"){
        return $next($request);
        }
        else{
        return redirect()->home();
        }
    }
}
