<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminAuthentication
{
    
    public function handle(Request $request, Closure $next)
    {
        if(auth()->user() && auth()->user()->roleid_fk==1){
            return $next($request);
        }
        return redirect('/');
      
    }
}
