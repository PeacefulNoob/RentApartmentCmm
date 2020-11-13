<?php

namespace App\Http\Middleware;

use Closure;
use Auth; 
use App\User;
class isManager
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
        if(Auth::user()->hasRole('manager')) {
            return $next($request);
        } else {
            return redirect('/');
        }
    }
}
