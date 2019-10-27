<?php

namespace Modules\Post\Entities;

use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Traits\Translatable;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Post extends \TCG\Voyager\Models\Post
{
    use Translatable, LogsActivity;
    
    protected static $logAttributes = ['*'];
    
    protected static $logOnlyDirty = true;

    protected static $logName = 'posts';

    protected $translatable = [
        'title', 
        'seo_title', 
        'excerpt',
        'body', 
        'meta_description', 
        'meta_keywords',
    ];

    protected $relations = [
        'category',
        'translations'
    ];

    public function getShortExcerptAttribute()
    {
        return Str::words($this->translate()->excerpt, 30, '...');
    }

    public function link() 
    {
        $link = ( true == config('voyager.multilingual.enabled') ) 
        ? $this->category->translate()->slug . '/' . $this->translate()->slug 
        : $this->category->slug . '/' . $this->slug;

    	return url(__('routes.articles') . '/' . $link);
    }

    public function linkToCategory() 
    {
        $link = ( true == config('voyager.multilingual.enabled') ) 
        ? $this->category->translate()->slug 
        : $this->category->slug;

    	return url(__('routes.articles') . '/' . $link);
    }

    public function img($img = 'medium')
    {
    	return \Voyager::image($this->thumbnail($img));
    }
    
    public function category()
    {
        return $this->belongsTo(Voyager::modelClass('Category'));
    }
}
