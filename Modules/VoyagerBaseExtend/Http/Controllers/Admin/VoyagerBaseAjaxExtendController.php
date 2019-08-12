<?php

namespace Modules\VoyagerBaseExtend\Http\Controllers\Admin;

use Illuminate\Http\Request;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Http\Controllers\Controller;

class VoyagerBaseAjaxExtendController extends Controller
{
    public function updateMultiplesStatuts(Request $request) {

        if( $request->ajax() ) {

            $namespace = '\\'.$request->bulk_active_model_name;
            $ids = $request->bulk_ids;

            foreach($ids as $id) {
                $model = $namespace::find($id);
                $model->active = $request->bulk_active_model_statut;
                $model->save();
            }

            return $request->server('HTTP_REFERER');
        }

        return 'error is not an ajax request';
    }
}