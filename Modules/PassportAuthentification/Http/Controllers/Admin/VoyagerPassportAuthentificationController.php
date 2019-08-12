<?php

namespace Modules\PassportAuthentification\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Nwidart\Modules\Facades\Module;
use Illuminate\Support\Facades\Auth;

class VoyagerPassportAuthentificationController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('admin.user');
    }

    /**
     * Show the passport page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(Module::find('PassportAuthentification')->disabled())
            abort(403, 'Module is not allowed.');

        if(!Auth::user()->hasRole(['admin'])) {
            abort(403, 'Unauthorized action.');
        }
        
        return view('passportauthentification::passport.index');
    }
}
