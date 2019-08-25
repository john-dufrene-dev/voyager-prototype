<?php

namespace Modules\HomePage\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Nwidart\Modules\Facades\Module;

class HomePageController extends Controller
{
    public function __construct()
    {
        if(Module::find('Homepage')->disabled())
            abort(404, 'Not Found');
    }

    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        return view('homepage::themes.' . Module::find('HomePage')->theme . '.index');
    }
}
