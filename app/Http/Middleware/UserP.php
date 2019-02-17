<?php

namespace App\Http\Middleware;

use Closure;

class UserP
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
        if($acctype=="p"){
        return $next($request);
        }
        else{
        return redirect()->home();
        }
    }
}
