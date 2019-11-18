<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Closure;
use Session;

class CheckLoginMiddle
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
        if(Session::has('user') == true) {
            if($request->path() == 'admin/login')
                return redirect('/admin/setting');
            return $next($request);
        } else if($request->path() == 'admin/login') {
            return $next($request);
        }

        return redirect('/admin/login');
    }
}
