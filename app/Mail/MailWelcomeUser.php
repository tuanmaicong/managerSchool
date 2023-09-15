<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MailWelcomeUser extends Mailable
{
    use Queueable, SerializesModels;
    protected $mailData;
    /**
     * Create a new message instance.
     */
    public function __construct($mailData)
    {
        $this->mailData = $mailData;
    }
    public function build()
    {
        return $this->subject('THPH My Duc B')
            ->view('mails.mail')
            ->with([
                'data' => $this->mailData,
            ]);
    }
}
