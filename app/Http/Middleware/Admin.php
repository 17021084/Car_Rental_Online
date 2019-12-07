<?php

namespace App\Http\Middleware;

use Closure;

use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\Session;
use Session;

class Admin
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
        
        //  
        if(  !Session::has('admin') ){
            return redirect()->route('admin.login');
           
        }

        return $next($request);
    }
}
