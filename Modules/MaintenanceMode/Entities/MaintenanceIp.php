<?php

namespace Modules\MaintenanceMode\Entities;

use Illuminate\Database\Eloquent\Model;


class MaintenanceIp extends Model
{
    protected $table = 'maintenance_ips';

    protected $fillable = ['name_maintenance','ip_maintenance'];
}
