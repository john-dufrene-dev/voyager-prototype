<?php

namespace Modules\Post\Entities;

use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Traits\Translatable;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Post extends \TCG\Voyager\Models\Post
{
    use LogsActivity;
    
    protected static $logAttributes = ['*'];
    
    protected static $logOnlyDirty = true;

    protected static $logName = 'posts';

    public function getShortExcerptAttribute()
    {
        return Str::words($this->translate()->excerpt, 30, '...');
    }

    public function link() 
    {
    	return url(__('routes.articles') . '/' . $this->category->translate()->slug . '/' . $this->translate()->slug);
    }

    public function linkToCategory() 
    {
    	return url(__('routes.articles') . '/' . $this->category->translate()->slug);
    }

    public function img()
    {
    	return \Voyager::image($this->thumbnail('medium'));
    }
    
    public function category()
    {
        return $this->belongsTo(Voyager::modelClass('Category'));
    }
}
