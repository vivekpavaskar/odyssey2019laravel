<?php

namespace App\Http\Middleware;

use Closure;

class UserR
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
        if($acctype=="r"){
        return $next($request);
        }
        else{
        return redirect()->home();
        }
    }
}
