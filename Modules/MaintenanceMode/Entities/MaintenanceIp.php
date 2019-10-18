<?php

namespace Modules\MaintenanceMode\Entities;

use TCG\Voyager\Traits\Translatable;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;


class MaintenanceIp extends Model
{
    use Translatable, LogsActivity;
    
    protected static $logAttributes = ['*'];
    
    protected static $logOnlyDirty = true;

    protected static $logName = 'maintenance_ips';

    protected $translatable = ['name_maintenance', 'ip_maintenance'];
    
    protected $table = 'maintenance_ips';

    protected $fillable = ['name_maintenance','ip_maintenance'];

    protected $relations = [
        'translations',
    ];
}
