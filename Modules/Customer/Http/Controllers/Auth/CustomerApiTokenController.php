<?php

namespace Modules\Customer\Http\Controllers\Auth;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Nwidart\Modules\Facades\Module;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CustomerApiTokenController extends Controller
{
    protected $guard;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        if(Module::find('Customer')->isDisabled())
            abort(404, 'Not Found');

        $this->middleware('guest');
        
        $this->guard = 'customer';
    }

    public function responseTokenCustomer(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::guard($this->guard)->attempt($credentials)) {

            $token = Str::random(80);
            $user = $this->saveNewTokenCustomer($token);

            if( $request->get('scopes') == 'customer_informations' ) {
                return $this->getInfosCustomer($user);
            }

            if( $request->get('scopes') == 'customer_authorization' ) {
                return $this->getTokenCustomer($user, $token);
            }

            return $this->ErrorCustomerTokenResponse('Invalid scopes');
        }

        return $this->ErrorCustomerTokenResponse('Bad credentials');
    }

    protected function saveNewTokenCustomer($token)
    {
        $user = auth($this->guard)->user();
        $user->api_token = hash('sha256', $token);
        $user->save();

        return $user;
    }

    protected function getTokenCustomer($user, $token)
    {
        return [
            'api_token' => $token,
            'token_type' => "bearer",
            'expires_in' => "-1",
            'scopes' => "customer_authorization",
        ];
    }

    protected function getInfosCustomer($user)
    {
        return [
            'id' => $user->getIdUser(),
            'username' => $user->getName(), 
            'email' => $user->getEmail(),
        ];
    }

    protected function ErrorCustomerTokenResponse($description, $status = 401) 
    {
        return response()->json([
            'error' => 'Unauthenticated',
            'description' => $description,
            'status' => $status
        ], $status);
    }
}