<?php

namespace App\Listeners;

use App\Events\UserRegister;
use App\Mail\WelcomeEmail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendUserRegistrationEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $data;
    protected $users;

    /**
     * Create the event listener.
     */
    public function __construct($data, $users)
    {
        $this->data = $data;
        $this->users = $users;
    }

    /**
     * Handle the event.
     */
    public function handle(UserRegister $event): void
    {
        foreach ($this->users as $user) {
            Mail::to($user->email)->send(new WelcomeEmail($this->data));
        }
    }
}
