<?php

namespace Modules\MaintenanceMode\Http\Controllers\Admin;

use Illuminate\Http\Request;
use TCG\Voyager\Facades\Voyager;
use Nwidart\Modules\Facades\Module;
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
    protected $bulk_active = true;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        if(Module::find('MaintenanceMode')->disabled())
            abort(403,'Module Maintenance is not allowed');
        
        if(Module::find('VoyagerBaseExtend')->disabled())
            abort(403,'Module VoyagerBaseExtend is required');
    }

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
        if(!$this->checkCors($this->maintenance_name))
            abort(403,'MAINTENANCE_MODE value is not allowed');
            
        // GET THE SLUG, ex. 'posts', 'pages', etc.
        $slug = $this->getSlug($request);

        // GET THE DataType based on the slug
        $dataType = Voyager::model('DataType')->where('slug', '=', $slug)->first();

        // Check permission
        $this->authorize('browse', app($dataType->model_name));

        $search = (object) ['value' => $request->get('s'), 'key' => $request->get('key'), 'filter' => $request->get('filter')];

        $getter = $dataType->server_side ? 'paginate' : 'get';

        $searchNames = [];
        if ($dataType->server_side) {
            $searchable = array_keys(SchemaManager::describeTable(app($dataType->model_name)->getTable())->toArray());
            $dataRow = Voyager::model('DataRow')->whereDataTypeId($dataType->id)->get();
            foreach ($searchable as $key => $value) {
                $displayName = $dataRow->where('field', $value)->first()->getTranslatedAttribute('display_name');
                $searchNames[$value] = $displayName ?: ucwords(str_replace('_', ' ', $value));
            }
        }

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

        // Actions
        $actions = [];
        if (!empty($dataTypeContent->first())) {
            foreach (Voyager::actions() as $action) {
                $action = new $action($dataType, $dataTypeContent->first());

                if ($action->shouldActionDisplayOnDataType()) {
                    $actions[] = $action;
                }
            }
        }

        // Check value maintenance mode
        $maintenanceValue = $this->getCorsValue($this->maintenance_name);

        // Get personal Ip + active field
        $ip = $request->ip();
        $active_field = $this->bulk_active;

        $view = 'maintenancemode::admin.bread.browse';

        if (view()->exists("maintenancemode::admin.$slug.browse")) {
            $view = "maintenancemode::admin.$slug.browse";
        }

        return Voyager::view($view, compact(
            'actions',
            'ip',
            'active_field',
            'maintenanceValue',
            'dataType',
            'dataTypeContent',
            'isModelTranslatable',
            'search',
            'orderBy',
            'orderColumn',
            'sortOrder',
            'searchNames',
            'isServerSide',
            'defaultSearchKey',
            'usesSoftDeletes',
            'showSoftDeleted'
        ));
    }

    //***************************************
    //                ______
    //               |  ____|
    //               | |__
    //               |  __|
    //               | |____
    //               |______|
    //
    //  Edit an item of our Data Type BR(E)AD
    //
    //****************************************

    public function edit(Request $request, $id)
    {
        $slug = $this->getSlug($request);

        $dataType = Voyager::model('DataType')->where('slug', '=', $slug)->first();

        if (strlen($dataType->model_name) != 0) {
            $model = app($dataType->model_name);

            // Use withTrashed() if model uses SoftDeletes and if toggle is selected
            if ($model && in_array(SoftDeletes::class, class_uses($model))) {
                $model = $model->withTrashed();
            }
            if ($dataType->scope && $dataType->scope != '' && method_exists($model, 'scope'.ucfirst($dataType->scope))) {
                $model = $model->{$dataType->scope}();
            }
            $dataTypeContent = call_user_func([$model, 'findOrFail'], $id);
        } else {
            // If Model doest exist, get data from table name
            $dataTypeContent = DB::table($dataType->name)->where('id', $id)->first();
        }

        foreach ($dataType->editRows as $key => $row) {
            $dataType->editRows[$key]['col_width'] = isset($row->details->width) ? $row->details->width : 100;
        }

        // If a column has a relationship associated with it, we do not want to show that field
        $this->removeRelationshipField($dataType, 'edit');

        // Check permission
        $this->authorize('edit', $dataTypeContent);

        // Check if BREAD is Translatable
        $isModelTranslatable = is_bread_translatable($dataTypeContent);

        $view = 'maintenancemode::admin.bread.edit-add';

        if (view()->exists("maintenancemode::admin.$slug.edit-add")) {
            $view = "maintenancemode::admin.$slug.edit-add";
        }

        return Voyager::view($view, compact('dataType', 'dataTypeContent', 'isModelTranslatable'));
    }

    //***************************************
    //
    //                   /\
    //                  /  \
    //                 / /\ \
    //                / ____ \
    //               /_/    \_\
    //
    //
    // Add a new item of our Data Type BRE(A)D
    //
    //****************************************

    public function create(Request $request)
    {
        $slug = $this->getSlug($request);

        $dataType = Voyager::model('DataType')->where('slug', '=', $slug)->first();

        // Check permission
        $this->authorize('add', app($dataType->model_name));

        $dataTypeContent = (strlen($dataType->model_name) != 0)
                            ? new $dataType->model_name()
                            : false;

        foreach ($dataType->addRows as $key => $row) {
            $dataType->addRows[$key]['col_width'] = $row->details->width ?? 100;
        }

        // If a column has a relationship associated with it, we do not want to show that field
        $this->removeRelationshipField($dataType, 'add');

        // Check if BREAD is Translatable
        $isModelTranslatable = is_bread_translatable($dataTypeContent);

        $view = 'maintenancemode::admin.bread.edit-add';

        if (view()->exists("maintenancemode::admin.$slug.edit-add")) {
            $view = "maintenancemode::admin.$slug.edit-add";
        }

        return Voyager::view($view, compact('dataType', 'dataTypeContent', 'isModelTranslatable'));
    }

    /*
    *
    * @return enable/disable maintenance mode
    *
    */
    public function StoreTurnMaintenanceMode(Request $request) 
    {   
        // If no iP configure
        if(0 == MaintenanceIp::count()) {
            $this->updateCors($this->maintenance_name,0);
            return redirect()->route('voyager.maintenance.index')
                ->with(['message' => __('maintenancemode::maintenance.no_ip'), 'alert-type' => 'danger']);
        }

        // If our Ip is configure : IN PROGRESS

        // Verify status maintenance mode 1/0
        if($request->get('cors_value') == $this->getCorsValue($this->maintenance_name)) {
            if($request->get('cors_value') == 1) {
                return redirect()->route('voyager.maintenance.index')
                    ->with(['message' => __('maintenancemode::maintenance.in_maintenance'), 'alert-type' => 'warning']);
            } else {
                return redirect()->route('voyager.maintenance.index')
                    ->with(['message' => __('maintenancemode::maintenance.no_maintenance'), 'alert-type' => 'warning']);
            }
        }

        // si 1 = maintenance enabled / si 0 = maintenance disabled
        if($request->get('cors_value') == 1) {
            $this->updateCors($this->maintenance_name,$request->get('cors_value'));
            return redirect()->route('voyager.maintenance.index')
                ->with(['message' => __('maintenancemode::maintenance.enable_maintenance'), 'alert-type' => 'success']);
        } else {
            $this->updateCors($this->maintenance_name,$request->get('cors_value'));
            return redirect()->route('voyager.maintenance.index')
                ->with(['message' => __('maintenancemode::maintenance.disable_maintenance'), 'alert-type' => 'success']);
        }

        // An error occured
        $this->updateCors($this->maintenance_name,0);
        return redirect()->route('voyager.maintenance.index')
            ->with(['message' => __('maintenancemode::maintenance.error_maintenance'), 'alert-type' => 'danger']);
    }

    /*
    * @return ajax IP
    */
    public function getAjaxIp(Request $request)
    {
        if( $request->ajax() ) {
            return $request->ip();
        }

        return 'error is not an ajax request';
    }

    /*
    * @return ajax IP
    */
    public function updateAjaxStatusIp(Request $request)
    {
        if( $request->ajax() ) {

            $new_status = ($request->status_ip == 0) ? 1 : 0;

            $ip = MaintenanceIp::findOrFail($request->id_maintenance_ip);
            $ip->active = $new_status;
            $ip->save();

            return route('voyager.maintenance.index');
        }

        return 'error is not an ajax request';
    }
}