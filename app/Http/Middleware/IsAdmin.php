<?php

namespace App\Http\Middleware;

use Closure;

class IsAdmin
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
        if($request->session()->get('userType')=='1' && $request->session()->get('userType')=='0') {
                 dd('here');
            return $next($request);
        }
        return redirect('/');
    }
}
