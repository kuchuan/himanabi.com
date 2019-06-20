<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Auth\Notifications\ResetPassword;//Dean Add

// class CustomResetPassword extends Notification//Dean Del
class CustomResetPassword extends ResetPassword //Dean add
{
    use Queueable;

    public $token; //Dean Add

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($token) //$token Dean Add
    {
        $this->token = $token;// Dean
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    // ->line('The introduction to the notification.')
                    // ->action('Notification Action', url('/'))
                    // ->line('Thank you for using our application!');
                    //Uper 3 lines Dell, under 4 lines add Dean
                    ->subject(__('Reset Password'))
                    ->line(__('Click button below and reset password.'))
                    ->action(__('Reset password'), url(route('password.reset', $this->token, false)))
                    ->line(__('If you did not request a password reset, no further action is required.'));
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
            //
        ];
    }
}
