<?php

namespace Modules\Customer\Entities;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Customer extends Authenticatable
{
    use Notifiable;

    protected $table = 'customers';

    protected $fillable = ['name', 'email',  'password'];

    protected $hidden = ['password',  'remember_token'];
}