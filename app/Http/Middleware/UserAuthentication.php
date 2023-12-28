<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class UserAuthentication
{
    public function handle(Request $request, Closure $next)
    {
        if(Auth()->User() && Auth()->User()->roleid_fk==2){
            return $next($request);
        }
        return redirect('/');
    }
}
