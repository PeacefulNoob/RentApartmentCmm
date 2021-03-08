<?php

namespace App\Http\Middleware;

use Closure;
use Session;
use App;
use Config;

class SwitchLanguageMiddleware
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
        if (!Session::has('locale'))
        {
          Session::put('locale',Config::get('app.locale'));
       }
       App::setLocale($request->segment(1));
       return $next($request);
    }
}
