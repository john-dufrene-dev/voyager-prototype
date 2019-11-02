<?php

namespace Modules\VoyagerBaseExtend\Entities;

use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Traits\Translatable;
use Illuminate\Database\Eloquent\Model;
use Rinvex\Cacheable\CacheableEloquent;
use Illuminate\Database\Eloquent\Builder;

class CorsSetting extends Model
{
    use Translatable, CacheableEloquent;
    
    protected static $logAttributes = ['*'];
    
    protected static $logOnlyDirty = true;

    protected static $logName = 'cors_settings';

    protected $translatable = ['cors_value'];
    
    protected $table = 'cors_settings';

    protected $fillable = ['cors_name','cors_value'];

    protected $relations = [
        'translations',
    ];
}
