<?php

namespace Modules\Customer\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Nwidart\Modules\Facades\Module;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Modules\Customer\Entities\Customer;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class CustomerLoginController extends Controller
{

    use AuthenticatesUsers;

    protected $redirectTo = '/account';

    public function __construct()
    {
        if(Module::find('Customer')->isDisabled())
            abort(404, 'Not Found');
            
        $this->middleware('guest')->except('logout');
    }

    public function guard()
    {
        return Auth::guard('customer');
    }

    // login from for customer
    public function showLoginForm(Session $session)
    {
        return view('customer::themes.' . Module::find('Customer')->get('theme') . '.auth.login');
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

        // session()->flash('flash_toaster', 'Bon retour parmi nous ' . $customer->name);
        // session()->flash('flash_bg_toaster', 'custom');

        return $this->authenticated($request, $this->guard()->user())
                ?: redirect()->intended($this->redirectPath());
    }

 }