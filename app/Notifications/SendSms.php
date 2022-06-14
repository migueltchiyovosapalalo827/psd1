<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class SendSms extends Notification implements ShouldQueue

{
    use Queueable;
    protected string $mesagem;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(string $mesagem = "")
    {
        $this->mesagem = $mesagem;
    }


    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return [SmsChannel::class];
    }

    public function toSms($notifiable)
    {
        // We are assuming we are notifying a user or a model that has a telephone attribute/field.
        // And the telephone number is correctly formatted.
        // TODO: SmsMessage, doesn't exist yet :-) We should create it.
        return (new SmsMessage)
                      ->to($notifiable->contacto)
                    ->line($this->mesagem);
    }

}
