<?php

namespace App\Http\Middleware;

use Closure;

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
        // 14:25
        // Auth::user()-> is_admin == 1 bang user co truong admin 
        if( Auth::guard('admin')->check()   ){
            return redirect('admin/dashboard');

        }

        return $next($request);
    }
}
