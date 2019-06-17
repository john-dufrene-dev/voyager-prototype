<?php

namespace App\Http\Controllers\Api;

use GuzzleHttp\Client;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ApiTokenController extends Controller
{
    /**
     * get token => METHOD : GET.
     *
     */
    public function get(Request $request, Client $guzzle)
    {
        $url = $request->server()['REQUEST_SCHEME'].'://'.$request->server()['HTTP_HOST'].'/oauth/token';

        $error['user'] = [
            "error" => "invalid_credentials",
            "error_description" => "The user credentials were incorrect.",
            "message" => "The user credentials were incorrect.",
        ];
        $error['oauth'] = [
            "error" => "invalid_client",
            "error_description" => "Client authentication failed",
            "message" => "Client authentication failed"
        ];

        $user = DB::table('users')
                ->select('email', 'password')
                ->where('email', $request->username);
        
        $oauth = DB::table('oauth_clients')
                ->select('id','secret','password_client')
                ->where('id', $request->id)
                ->where('secret', $request->secret)
                ->where('password_client', 1);

        if(!$user->count() || !Hash::check($request->password, $user->first()->password)) {
            return response()->json($error['user'], 404);
        }

        if(!$oauth->count()) {
            return response()->json($error['oauth'], 404);
        }

        try {
            $response = $guzzle->post($url, [
                'form_params'   => [
                    'grant_type'    => 'password',
                    'username'      => $request->username,
                    'password'      => $request->password,
                    'client_id'     => $request->id,
                    'client_secret' => $request->secret,
                    'scope'         => '*',
                ],
            ]);
    
        } catch (Exception $e) {
            echo "\n".$e->getMessage()."\n";
        }

        return json_decode((string) $response->getBody(), true);
    }

    /**
     * Rrefresh token => METHOD : GET.
     *
     */
    public function refresh(Request $request, Client $guzzle)
    {
        $url = $request->server()['REQUEST_SCHEME'].'://'.$request->server()['HTTP_HOST'].'/oauth/token';

        $error['oauth'] = [
            "error"             => "invalid_client",
            "error_description" => "Client authentication failed",
            "message"           => "Client authentication failed"
        ];
        
        $oauth = DB::table('oauth_clients')
                ->select('id','secret','password_client')
                ->where('id', $request->id)
                ->where('secret', $request->secret)
                ->where('secret', $request->secret)
                ->where('password_client', 1);
        
        $refresh = DB::table('oauth_access_tokens')
                ->select('id')
                ->where('id', $request->token);

        if(!$oauth->count()) {
            return response()->json($error['oauth'], 404);
        }

        try {
            $response = $guzzle->post($url, [
                'form_params'   => [
                    'grant_type'    => 'refresh_token',
                    'refresh_token' => $request->token,
                    'client_id'     => $request->id,
                    'client_secret' => $request->secret,
                    'scope'         => '',
                ],
            ]);
    
        } catch (Exception $e) {
            echo "\n".$e->getMessage()."\n";
        }

        return json_decode((string) $response->getBody(), true);
    }

    /**
     * Update the authenticated user's API token.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function update(Request $request)
    {
        $token = Str::random(60);

        $request->user()->forceFill([
            'api_token' => hash('sha256', $token),
        ])->save();

        return ['token' => $token];
    }
}