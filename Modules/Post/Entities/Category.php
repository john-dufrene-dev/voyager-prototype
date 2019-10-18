<?php

namespace Modules\Post\Entities;

use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Traits\Translatable;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Category extends \TCG\Voyager\Models\Category
{
    use Translatable, LogsActivity;
    
    protected static $logAttributes = ['*'];
    
    protected static $logOnlyDirty = true;

    protected static $logName = 'categories';

    protected $translatable = ['slug', 'name'];

    protected $table = 'categories';

    protected $fillable = ['slug', 'name'];

    protected $relations = [
        'posts',
        'translations',
    ];

    public function posts()
    {
        return $this->hasMany(Voyager::modelClass('Post'));
    }

    public function parentId()
    {
        return $this->belongsTo(self::class);
    }
}
