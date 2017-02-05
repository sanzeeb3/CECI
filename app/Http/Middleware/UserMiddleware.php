<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class UserMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if(Auth::check())
        {
            if($request->user()->is_admin==0)
            {
               return $next($request);
            }
             return redirect('/admin');    
        }
        else
        {
          return redirect('/login');   
        }
    }
}

