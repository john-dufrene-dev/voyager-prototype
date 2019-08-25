<?php

namespace Modules\Customer\Entities;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Modules\HistoriesLogs\Notifications\MailResetPasswordNotification;

class Customer extends Authenticatable
{
    use Notifiable;

    protected $table = 'customers';

    protected $fillable = ['name', 'email',  'password'];

    protected $hidden = ['password',  'remember_token'];

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