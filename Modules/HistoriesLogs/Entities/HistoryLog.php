<?php

namespace Modules\HistoriesLogs\Entities;

use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Traits\Translatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class HistoryLog extends Model
{
    use Translatable;
    
    protected $table = 'history_log';

    protected $translatable = ['description'];

    protected $relations = [
        'translations',
    ];
}
