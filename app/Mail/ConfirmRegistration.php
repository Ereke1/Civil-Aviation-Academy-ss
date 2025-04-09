<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ConfirmRegistration extends Mailable
{
    use Queueable, SerializesModels;

    public $registration;

    public function __construct($registration)
    {
        $this->registration = $registration;
    }

    public function build()
    {
        return $this->subject('Подтвердите регистрацию')
            ->view('front.testRegistration.confirm')
            ->with([
                'url' => route('front.testRegistration.confirm', ['token' => $this->registration->confirmation_token]),
                'test_date' => $this->registration->test_date,
            ]);
    }
}
