<?php

namespace App\Http\Controllers\Pages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PassportController extends Controller
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
        if(!Auth::user()->hasRole(['admin']))
        {
            abort(403, 'Unauthorized action.');
        }
        return view('themes.'.config('prototype.theme').'.modules.passport.index');
    }
}
