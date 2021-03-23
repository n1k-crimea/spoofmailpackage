<?php
namespace Nik\SpoofMailPackage\Listeners;

use Illuminate\Mail\Events\MessageSending;

class SpoofingMail
{
    public function handle(MessageSending $event)
    {
        if(config('app.env') !== 'production')
            $event->message->setTo(config('spoofmail.recipient_mail'));
    }
}