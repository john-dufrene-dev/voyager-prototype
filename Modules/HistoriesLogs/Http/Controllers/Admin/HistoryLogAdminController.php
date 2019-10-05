<?php

namespace Modules\HistoriesLogs\Http\Controllers\Admin;

use Illuminate\Http\Request;
use TCG\Voyager\Facades\Voyager;
use Illuminate\Support\Facades\DB;
use Nwidart\Modules\Facades\Module;
use TCG\Voyager\Events\BreadDataAdded;
use TCG\Voyager\Events\BreadDataDeleted;
use TCG\Voyager\Events\BreadDataUpdated;
use TCG\Voyager\Events\BreadDataRestored;
use TCG\Voyager\Events\BreadImagesDeleted;
use Illuminate\Database\Eloquent\SoftDeletes;
use TCG\Voyager\Database\Schema\SchemaManager;
use TCG\Voyager\Http\Controllers\Traits\BreadRelationshipParser;
use App\Voyager\Http\Controllers\VoyagerBaseController as BaseVoyagerBaseController;

class HistoryLogAdminController extends BaseVoyagerBaseController
{
    use BreadRelationshipParser;

    public function __construct() {
        if(Module::find('HistoriesLogs')->disabled())
            abort(403, 'Module HistoriesLogs is not allowed.');
    }
}