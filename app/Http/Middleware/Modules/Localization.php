<?php

namespace App\Http\Middleware\Modules;

use Closure;

class Localization
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
        if(session()->has('locale')) {
            app()->setlocale(session()->get('locale'));
            return $next($request);
        }

        app()->setLocale(config('app.locale'));
        session()->put('locale', app()->getLocale());
                
        return $next($request);
    }
}
