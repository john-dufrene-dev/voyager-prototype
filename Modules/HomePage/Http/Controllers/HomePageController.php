<?php

namespace Modules\HomePage\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Nwidart\Modules\Facades\Module;
use Artesaos\SEOTools\Facades\SEOMeta;

class HomePageController extends Controller
{
    public function __construct()
    {
        if(Module::find('Homepage')->isDisabled())
            abort(404, 'Not Found');
    }

    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        SEOMeta::setTitle(get_cors('PAGE_HOME_META_TITLE') ?? __('seo.homepage.meta_title'));
        SEOMeta::setDescription(get_cors('PAGE_HOME_META_DESCRIPTION') ?? __('seo.homepage.meta_description'));
        SEOMeta::setKeywords(get_cors('PAGE_HOME_META_KEYWORDS') ?? __('seo.homepage.meta_keywords'));
        SEOMeta::setRobots('index,follow');

        return view('homepage::themes.' . Module::find('HomePage')->get('theme') . '.index');
    }
}
