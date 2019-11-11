<?php

namespace Modules\Customer\Http\Controllers\Auth;

use App\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Nwidart\Modules\Facades\Module;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Modules\Customer\Entities\Customer;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Notification;
use Illuminate\Foundation\Auth\RegistersUsers;
use Modules\HistoriesLogs\Notifications\NewUserNotification;

class CustomerRegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    protected $redirectTo = '/account';

    /**
     * User who receive notification when a customer is create
     * @return array
     */
    protected $roles_for_notifications = ['admin', 'notifiable'];

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
    }

    public function guard()
    {
        return Auth::guard('customer');
    }

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationForm()
    {
        return view('customer::themes.' . Module::find('Customer')->get('theme') . '.auth.register');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:customers'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return Customer::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));

        $this->guard()->login($user);

        $customer = Customer::where('email', $request->email)->first();
        session(['id_customer' => $customer->id]);

        $users = User::whereHas('roles', function($q) {
            $q->whereIn('roles.name', $this->roles_for_notifications);
        })->get();

        // Send message User with Role "notifiable"
        Notification::send($users, new NewUserNotification(['customer' => $request->email]));

        return $this->registered($request, $user)
                        ?: redirect($this->redirectPath());
    }

 }