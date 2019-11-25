<?php

namespace Modules\Customer\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class AuthenticatedCustomer
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
        // $response = $next($request);

        if ($request->session()->has('customer_session_authenticated')) {

            $user = [
                'id'    => $request->session()->get('customer_session_authenticated')['customer_id'],
                'name'  => $request->session()->get('customer_session_authenticated')['customer_name'],
                'email' => $request->session()->get('customer_session_authenticated')['customer_email'],
                'token' => $request->session()->get('customer_session_authenticated')['customer_api_token'],
            ];

            $request->headers->set('Customer-Authenticated', true);
            $request->headers->set('Customer-Id', Crypt::encryptString($user['id']));
            $request->headers->set('Customer-Name', Crypt::encryptString($user['name']));
            $request->headers->set('Customer-Email', Crypt::encryptString($user['email']));
            $request->headers->set('Authorization', 'Bearer '.$user['token']);

            return $next($request);

        }

        $request->headers->set('Customer-Authenticated', false);

        return $next($request);
    }
}
