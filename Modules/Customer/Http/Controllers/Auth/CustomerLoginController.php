<?php

namespace Modules\Customer\Http\Controllers\Auth;

use Illuminate\Support\Str;
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

    /**
     * Log the user out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        $this->guard()->logout();

        $locale = session()->get('locale');

        $request->session()->invalidate();
        session()->put('locale', $locale);

        return $this->loggedOut($request) ?: redirect('/');
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
        
        $request->session()->regenerate();

        $this->clearLoginAttempts($request);

        // session()->flash('flash_toaster', 'Bon retour parmi nous ' . $customer->name);
        // session()->flash('flash_bg_toaster', 'custom');

        return $this->authenticated($request, $this->guard()->user())
                ?: redirect()->intended($this->redirectPath());
    }

    /**
     * The user has been authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $user
     * @return mixed
     */
    protected function authenticated(Request $request, $user)
    {
        $this->setCustomerSession($user);
    }

    protected function setCustomerSession($user)
    {
        session([
            'customer_session_authenticated' => [
                'customer_id' => $user->getIdUser(),
                'customer_name' => $user->getName(),
                'customer_email' => $user->getEmail(),
            ],
        ]);
    }
 }