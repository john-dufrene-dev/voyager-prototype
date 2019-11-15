<?php

namespace Modules\Customer\Entities;

use Illuminate\Notifications\Notifiable;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Modules\HistoriesLogs\Notifications\MailResetPasswordNotification;

class Customer extends Authenticatable
{
    use Notifiable, LogsActivity;
    
    protected static $logAttributes = ['*'];
    
    protected static $logOnlyDirty = true;

    protected static $logName = 'customers';

    protected $table = 'customers';

    protected $fillable = ['name', 'email',  'password', 'api_token'];

    protected $hidden = ['password',  'remember_token'];

    public function getIdUser()
    {
        return $this->id;
    }

    public function getApiToken()
    {
        return $this->api_token;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new MailResetPasswordNotification($token));    
    }
}