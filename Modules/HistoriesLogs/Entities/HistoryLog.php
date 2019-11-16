<?php

namespace Modules\HistoriesLogs\Entities;

use TCG\Voyager\Facades\Voyager;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class HistoryLog extends Model
{    
    protected $table = 'history_log';

    protected $relations = [
        'users',
        'translations',
    ];

    public function user()
    {
        return $this->belongsTo('App\User', 'causer_id');
    }
}
