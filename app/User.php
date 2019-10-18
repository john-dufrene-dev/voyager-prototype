<?php

namespace App;

use Carbon\Carbon;
use Laravel\Passport\HasApiTokens;
use TCG\Voyager\Traits\VoyagerUser;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use TCG\Voyager\Contracts\User as UserContract;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends \TCG\Voyager\Models\User
{
    use HasApiTokens, Notifiable, VoyagerUser;

    protected $guarded = [];

    protected $relations = [
        'roles',
        'role',
    ];

    public $additional_attributes = ['locale'];

    public function getAvatarAttribute($value)
    {
        return $value ?? config('voyager.user.default_avatar', 'users/default.png');
    }

    public function setCreatedAtAttribute($value)
    {
        $this->attributes['created_at'] = Carbon::parse($value)->format('Y-m-d H:i:s');
    }

    public function setSettingsAttribute($value)
    {
        $this->attributes['settings'] = $value->toJson();
    }

    public function getSettingsAttribute($value)
    {
        return collect(json_decode($value));
    }

    public function setLocaleAttribute($value)
    {
        $this->settings = $this->settings->merge(['locale' => $value]);
    }

    public function getLocaleAttribute()
    {
        return $this->settings->get('locale');
    }

    public function isAdmin()
    {
        foreach ($this->role()->get() as $role)
        {
            if ($role->name == 'admin')
            {
                return true;
            }
        }
        return false;
    }

    public function isGuest()
    {
        foreach ($this->role()->get() as $role)
        {
            if ($role->name != 'admin')
            {
                return true;
            }
        }
        return false;
    }

    public function is($roleName)
    {
        foreach ($this->role()->get() as $role)
        {
            if ($role->name == $roleName)
            {
                return true;
            }
        }

        return false;
    }
}
