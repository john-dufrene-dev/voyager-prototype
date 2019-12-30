<?php

namespace Modules\Prototype\Http\Middleware;

use Closure;
use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class IfAjaxRequest
{
    protected $url;
    protected $token;

    use AuthenticatesUsers;

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if($request->token) {
            $this->token = \Auth::guard('jwt')->getToken();

            $response = $next($request);
            $response->headers->set('Authorization', 'Bearer '. $this->token);

            $user = auth('jwt')->user();

            if(!$user) {
                return response()->json([
                    'message' => 'Unauthorized',
                    'error' => '401',
                ], 401);
            }

            return $response;
        }


        if( $request->header('Authorization') ) {

            $user = auth('jwt')->user();

            if(!$user) {
                return response()->json([
                    'message' => 'Unauthorized',
                    'error' => '401',
                ], 401);
            }

            $response = $next($request);
            $response->headers->set('Authorization', 'Bearer '.$this->token);

            return $response;
        }

        $this->url = $request->root();

        if($this->url != config('app.url')) {
            return response()->json([
                'message' => 'Domain name are not authorized',
                'error' => '403',
            ], 403);
        }

        if( $request->ajax() ) {
            return $next($request);
        }

        return response()->json([
            'message' => 'Not an allowed Request',
            'error' => '402',
        ], 402);
  
    }
    
}
