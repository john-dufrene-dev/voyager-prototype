<?php

namespace App\Voyager\Models;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Traits\Translatable;

class Translation extends Model
{
    protected $table = 'translations';
}
