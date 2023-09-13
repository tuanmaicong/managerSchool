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
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(UserRegistered $event): void
    {
        $mailContent = [
            'email' => $event->email,
            'user' => $event->user,
        ];
        Mail::to($event->email,$event->user)->send(new MailWelcomeUser($mailContent));
    }
}
