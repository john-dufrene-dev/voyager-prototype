<?php

namespace App\Http\Middleware;

use Closure;

class RedirectIfNotCustomer
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard="customer")
    {
        if(!auth()->guard($guard)->check()) {
            return redirect(route('customer.login'));
        }
        return $next($request);
    }
}