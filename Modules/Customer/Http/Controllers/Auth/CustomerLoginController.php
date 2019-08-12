<?php

namespace Modules\Customer\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Modules\Customer\Entities\Customer;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class CustomerLoginController extends Controller
{

    use AuthenticatesUsers;

    protected $redirectTo = '/mon-compte';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->redirectTo = __('routes.account');
    }

    public function guard()
    {
        return Auth::guard('customer');
    }

    // login from for customer
    public function showLoginForm(Session $session)
    {
        return view('customer::themes.' . config('customer.theme') . '.auth.login');
    }

    /**
     * Send the response after the user was authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    protected function sendLoginResponse(Request $request)
    {
        $customer = Customer::where('email', $request->email)->first();
        
        session(['id_customer' => $customer->id]);
        $request->session()->regenerate();

        $this->clearLoginAttempts($request);

        return $this->authenticated($request, $this->guard()->user())
                ?: redirect()->intended($this->redirectPath());
    }

 }