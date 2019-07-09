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
        return Str::words($this->excerpt, 5, '...');
    }
}
