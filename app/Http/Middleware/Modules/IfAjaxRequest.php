<?php

namespace App\Http\Middleware\Modules;

use Closure;

class IfAjaxRequest
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
        if(!$request->ajax()) {
            return response()->json([
                'message' => 'Not an allowed Request',
                'error' => '402',
            ], 403);
        }

        return $next($request);
    }
}
