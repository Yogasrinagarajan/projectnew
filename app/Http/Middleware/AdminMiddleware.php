<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class AdminMiddleware
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
        // return $next($request);
        $role=Auth::user()->role;
        if($role=='emp')
        {
            return $next($request);
        }
        else if($role=='cus')
        {
           return $next($request);
        }
        else
        {
            return $next($request);
        }
    }
}
