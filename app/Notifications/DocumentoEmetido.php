<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Notification;
use NotificationChannels\Twilio\TwilioChannel;
use NotificationChannels\Twilio\TwilioSmsMessage;


class DocumentoEmetido extends Notification implements ShouldQueue
{
   use Queueable;
    protected string $mesagem;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(string $mesagem)
    {
        $this->mesagem = $mesagem;
    }


    public function via($notifiable)
    {
        return [TwilioChannel::class];
    }

    public function toTwilio($notifiable)
    {
        return (new TwilioSmsMessage())
            ->content($this->mesagem);
    }
}
