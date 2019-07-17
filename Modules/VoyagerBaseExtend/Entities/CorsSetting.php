<?php

namespace Modules\VoyagerBaseExtend\Entities;

use Illuminate\Database\Eloquent\Model;

class CorsSetting extends Model
{
    protected $table = 'cors_settings';

    protected $fillable = ['cors_name','cors_value'];
}
