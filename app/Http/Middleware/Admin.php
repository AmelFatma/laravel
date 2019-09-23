<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
   
     //at the top
 
function handle($request, Closure $next)
{
    if (Auth::check() && Auth::user()->isAdmin == 'admin') {
        return $next($request);
    }
    elseif (Auth::check() && Auth::user()->isAdmin == 'agent') {
        return redirect('/agent');
    }
    else {
        return redirect('/');
    }
}
}
