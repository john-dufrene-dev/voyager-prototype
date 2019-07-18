<?php

namespace Modules\MaintenanceMode\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Facades\Voyager;
use Illuminate\Support\Facades\Session;
use TCG\Voyager\Database\Schema\SchemaManager;
use Modules\MaintenanceMode\Entities\MaintenanceIp;
use Modules\VoyagerBaseExtend\Traits\CorsSettingTable;
use TCG\Voyager\Http\Controllers\Traits\BreadRelationshipParser;
use App\Voyager\Http\Controllers\VoyagerBaseController as BaseVoyagerBaseController;

class VoyagerMaintenanceModeController extends BaseVoyagerBaseController
{
    use BreadRelationshipParser, CorsSettingTable;

    protected $maintenance_name = 'MAINTENANCE_MODE';

    //***************************************
    //               ____
    //              |  _ \
    //              | |_) |
    //              |  _ <
    //              | |_) |
    //              |____/
    //
    //      Browse our Data Type (B)READ
    //
    //****************************************

    public function index(Request $request)
    {
        // GET THE SLUG, ex. 'posts', 'pages', etc.
        $slug = $this->getSlug($request);

        // GET THE DataType based on the slug
        $dataType = Voyager::model('DataType')->where('slug', '=', $slug)->first();

        // Check permission
        $this->authorize('browse', app($dataType->model_name));

        $getter = $dataType->server_side ? 'paginate' : 'get';

        $search = (object) ['value' => $request->get('s'), 'key' => $request->get('key'), 'filter' => $request->get('filter')];
        $searchable = $dataType->server_side ? array_keys(SchemaManager::describeTable(app($dataType->model_name)->getTable())->toArray()) : '';
        $orderBy = $request->get('order_by', $dataType->order_column);
        $sortOrder = $request->get('sort_order', null);
        $usesSoftDeletes = false;
        $showSoftDeleted = false;
        $orderColumn = [];
        if ($orderBy) {
            $index = $dataType->browseRows->where('field', $orderBy)->keys()->first() + 1;
            $orderColumn = [[$index, 'desc']];
            if (!$sortOrder && isset($dataType->order_direction)) {
                $sortOrder = $dataType->order_direction;
                $orderColumn = [[$index, $dataType->order_direction]];
            } else {
                $orderColumn = [[$index, 'desc']];
            }
        }

        // Next Get or Paginate the actual content from the MODEL that corresponds to the slug DataType
        if (strlen($dataType->model_name) != 0) {
            $model = app($dataType->model_name);

            if ($dataType->scope && $dataType->scope != '' && method_exists($model, 'scope'.ucfirst($dataType->scope))) {
                $query = $model->{$dataType->scope}();
            } else {
                $query = $model::select('*');
            }

            // Use withTrashed() if model uses SoftDeletes and if toggle is selected
            if ($model && in_array(SoftDeletes::class, class_uses($model)) && app('VoyagerAuth')->user()->can('delete', app($dataType->model_name))) {
                $usesSoftDeletes = true;

                if ($request->get('showSoftDeleted')) {
                    $showSoftDeleted = true;
                    $query = $query->withTrashed();
                }
            }

            // If a column has a relationship associated with it, we do not want to show that field
            $this->removeRelationshipField($dataType, 'browse');

            if ($search->value != '' && $search->key && $search->filter) {
                $search_filter = ($search->filter == 'equals') ? '=' : 'LIKE';
                $search_value = ($search->filter == 'equals') ? $search->value : '%'.$search->value.'%';
                $query->where($search->key, $search_filter, $search_value);
            }

            if ($orderBy && in_array($orderBy, $dataType->fields())) {
                $querySortOrder = (!empty($sortOrder)) ? $sortOrder : 'desc';
                $dataTypeContent = call_user_func([
                    $query->orderBy($orderBy, $querySortOrder),
                    $getter,
                ]);
            } elseif ($model->timestamps) {
                $dataTypeContent = call_user_func([$query->latest($model::CREATED_AT), $getter]);
            } else {
                $dataTypeContent = call_user_func([$query->orderBy($model->getKeyName(), 'DESC'), $getter]);
            }

            // Replace relationships' keys for labels and create READ links if a slug is provided.
            $dataTypeContent = $this->resolveRelations($dataTypeContent, $dataType);
        } else {
            // If Model doesn't exist, get data from table name
            $dataTypeContent = call_user_func([DB::table($dataType->name), $getter]);
            $model = false;
        }

        // Check if BREAD is Translatable
        if (($isModelTranslatable = is_bread_translatable($model))) {
            $dataTypeContent->load('translations');
        }

        // Check if server side pagination is enabled
        $isServerSide = isset($dataType->server_side) && $dataType->server_side;

        // Check if a default search key is set
        $defaultSearchKey = $dataType->default_search_key ?? null;

        // CHeck value maintenance mode
        $maintenanceValue = $this->getCorsValue($this->maintenance_name);

        $view = 'maintenancemode::admin.bread.browse';

        if (view()->exists("maintenancemode::admin.$slug.browse")) {
            $view = "maintenancemode::admin.$slug.browse";
        }

        return Voyager::view($view, compact(
            'maintenanceValue',
            'dataType',
            'dataTypeContent',
            'isModelTranslatable',
            'search',
            'orderBy',
            'orderColumn',
            'sortOrder',
            'searchable',
            'isServerSide',
            'defaultSearchKey',
            'usesSoftDeletes',
            'showSoftDeleted'
        ));
    }

    public function StoreTurnMaintenanceMode(Request $request) 
    {   
        // On vérifie qu'il y a bien une adresse ip de configuré
        if(0 == MaintenanceIp::count()) {
            $this->updateCors($this->maintenance_name,0);
            Session::flash('alert-danger', 'ERREUR. Aucune adresses IP configurées.');
            return redirect()->route('voyager.maintenance.index');
        }

        // On vérifie que notre adresse Ip est bien configuré

        // On vérifie que le site n'a pas déjà le mode reçu 1/0
        if($request->get('cors_value') == $this->getCorsValue($this->maintenance_name)) {
            if($request->get('cors_value') == 1) {
                Session::flash('alert-warning', 'Le site est déjà en maintenance.');
                return redirect()->route('voyager.maintenance.index');
            } else {
                Session::flash('alert-warning', 'Le site est déjà activé.');
                return redirect()->route('voyager.maintenance.index');
            }
        }

        // si 1 = mode maintenance activé / si 0 = mode maintenance désactivé
        if($request->get('cors_value') == 1) {
            $this->updateCors($this->maintenance_name,$request->get('cors_value'));
            Session::flash('alert-success', 'Maintenance activée.');
            return redirect()->route('voyager.maintenance.index');
        } else {
            $this->updateCors($this->maintenance_name,$request->get('cors_value'));
            Session::flash('alert-success', 'Maintenance désactivée.');
            return redirect()->route('voyager.maintenance.index');
        }

        // Une erreur est survenue
        $this->updateCors($this->maintenance_name,0);
        Session::flash('alert-danger', 'Une erreur est survenue !');
        return redirect()->route('voyager.maintenance.index'); 
    }
}