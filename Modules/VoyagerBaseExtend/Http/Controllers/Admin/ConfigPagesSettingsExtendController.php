<?php

namespace Modules\VoyagerBaseExtend\Http\Controllers\Admin;

use Exception;
use Illuminate\Http\Request;
use TCG\Voyager\Facades\Voyager;
use Nwidart\Modules\Facades\Module;
use Illuminate\Support\Facades\Auth;
use TCG\Voyager\Traits\Translatable;
use TCG\Voyager\Http\Controllers\Controller;
use Modules\VoyagerBaseExtend\Entities\CorsSetting;
use Modules\VoyagerBaseExtend\Traits\CorsSettingTable;

class ConfigPagesSettingsExtendController extends Controller
{
    use CorsSettingTable,
        Translatable;
    
    public function __construct() {
        if(Module::find('VoyagerBaseExtend')->disabled())
            abort(403, 'Module VoyagerBaseExtend is not allowed.');
    }

    public function home(Request $request) {

        Auth::guard(app('VoyagerGuard'))->user()->hasPermissionOrAbort('browse_configs');

        $isModelTranslatable = is_bread_translatable(app(CorsSetting::class));

        $view = 'voyagerbaseextend::admin.configs.home';

        return Voyager::view($view, compact('isModelTranslatable'));
    }

    public function homeUpdate(Request $request) {

        Auth::guard(app('VoyagerGuard'))->user()->hasPermissionOrAbort('browse_configs');

        if ($request->isMethod('post')) {

            foreach($request->except('_token') as $key => $req) {
                if($this->checkCors($key)) {  
                    
                    $dataType = CorsSetting::where('cors_name', '=', $key)->first();

                    $trans = json_decode($request->get($key.'_i18n'), true);

                    if(null != $trans) {
                        foreach( $trans as $lang => $field ) {

                            $dataType = $dataType->translate($lang);
                            $dataType->cors_value = $field;
    
                            $dataType->save();
                        }
                    }
                    
                    $this->updateCors($key, $req);
                } 
            }

            return redirect()->route('voyager.config.pages.settings.home.post')
            ->with([
                'message'    => __('generic.successfully_updated'),
                'alert-type' => 'success',
            ]);
        }
    }
}

