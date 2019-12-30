<?php

namespace Modules\Customer\Http\Controllers\Account;

use Illuminate\Http\Request;
use Nwidart\Modules\Facades\Module;
use App\Http\Controllers\Controller;

class AccountController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        if(Module::find('Customer')->isDisabled())
            abort(404, 'Not Found');
            
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('customer::themes.' . Module::find('Customer')->get('theme') . '.account.index');
    }
}
