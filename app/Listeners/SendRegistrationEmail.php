<?php

namespace App\Listeners;

use App\Events\UserRegistered;
use App\Mail\MailWelcomeUser;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendRegistrationEmail
{
    /**
     * Create the event listener.
     */

    /**
     * Handle the event.
     */
    public function handle(UserRegistered $event): void
    {
        $mailContent = [
            'email' => $event->email,
        ];
        Mail::to($event->email)->send(new MailWelcomeUser($mailContent));
    }
}
