<?php

namespace Modules\HistoriesLogs\Notifications;

use Modules\Customer\Entities\Customer;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class NewUserNotification extends Notification
{
    protected $email;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($email)
    {
        $this->email = $email;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param mixed $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database', 'mail'];
    }

    /**
     * Build the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('New Customer registration')
            ->line('New customer registration ' . $this->getCustomerRegister()->name)
            ->line('With adress ' . $this->getCustomerRegister()->email);
    }

    /**
     * Return the Customer register
     *
     * @return Modules\Customer\Entities\Customer
     */
    public function getCustomerRegister()
    {
        return Customer::where('email', $this->email)->firstOrFail();
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {      
        return [
            'id'    => $this->getCustomerRegister()->id,
            'name'  => $this->getCustomerRegister()->name,
            'email' => $this->getCustomerRegister()->email,
        ];
    }
}
