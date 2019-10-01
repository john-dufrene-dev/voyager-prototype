<?php

namespace Modules\VoyagerBaseExtend\Entities;

use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Traits\Translatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class CorsSetting extends Model
{
    use Translatable;

    protected $translatable = ['cors_value'];
    
    protected $table = 'cors_settings';

    protected $fillable = ['cors_name','cors_value'];
}
