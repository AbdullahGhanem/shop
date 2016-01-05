<?php

namespace App\Http\Middleware;

use Closure;

class ChangeLang
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
        if(!\Session::has('lang'))
        {
           \Session::put('lang', \Config::get('app.locale'));
        }

        app()->setLocale(\Session::get('lang'));

        return $next($request);
    }
}
