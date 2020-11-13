<?php

namespace App\Http\Middleware;
use App\User;
use Closure;
use Auth; 
class isAdmin
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
        if(Auth::user()->hasRole('admin')) {
            return $next($request);
        } else {
            return redirect('/');
        }
    }
}
