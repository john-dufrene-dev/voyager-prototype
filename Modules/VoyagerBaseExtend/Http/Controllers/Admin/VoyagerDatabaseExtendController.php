<?php

namespace Modules\VoyagerBaseExtend\Http\Controllers\Admin;

use Exception;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use TCG\Voyager\Facades\Voyager;
use Illuminate\Support\Facades\DB;
use TCG\Voyager\Events\TableAdded;
use TCG\Voyager\Database\Types\Type;
use TCG\Voyager\Events\TableDeleted;
use TCG\Voyager\Events\TableUpdated;
use TCG\Voyager\Database\Schema\Table;
use Illuminate\Support\Facades\Artisan;
use TCG\Voyager\Database\Schema\Column;
use TCG\Voyager\Database\DatabaseUpdater;
use TCG\Voyager\Database\Schema\Identifier;
use TCG\Voyager\Database\Schema\SchemaManager;
use App\Voyager\Http\Controllers\VoyagerDatabaseController as BaseVoyagerDatabaseController;

class VoyagerDatabaseExtendController extends BaseVoyagerDatabaseController
{
    public function index()
    {
        $this->authorize('browse_database');

        $dataTypes = Voyager::model('DataType')->select('id', 'name', 'slug')->get()->keyBy('name')->toArray();

        $tables = array_map(function ($table) use ($dataTypes) {
            $table = [
                'name'       => $table,
                'slug'       => $dataTypes[$table]['slug'] ?? null,
                'dataTypeId' => $dataTypes[$table]['id'] ?? null,
            ];

            return (object) $table;
        }, SchemaManager::listTableNames());

        return Voyager::view('voyagerbaseextend::admin.tools.database.index')->with(compact('dataTypes', 'tables'));
    }
}