<?php

namespace Modules\Post\Entities;

use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Traits\Translatable;
use Illuminate\Database\Eloquent\Model;

class Post extends \TCG\Voyager\Models\Post
{
    public function getShortExcerptAttribute()
    {
        return Str::words($this->excerpt, 30, '...');
    }

    public function link() 
    {
    	return url('/articles/' . $this->category->slug . '/' . $this->slug);
    }

    public function linkToCategory() 
    {
    	return url('/articles/' . $this->category->slug);
    }

    public function image()
    {
    	return \Voyager::image($this->thumbnail('medium'));
    }
    
    public function category()
    {
        return $this->belongsTo(Voyager::modelClass('Category'));
    }
}
