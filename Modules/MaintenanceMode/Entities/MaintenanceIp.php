<?php

namespace Modules\MaintenanceMode\Entities;

use TCG\Voyager\Traits\Translatable;
use Illuminate\Database\Eloquent\Model;


class MaintenanceIp extends Model
{
    use Translatable;

    protected $translatable = ['name_maintenance', 'ip_maintenance'];
    
    protected $table = 'maintenance_ips';

    protected $fillable = ['name_maintenance','ip_maintenance'];
}
