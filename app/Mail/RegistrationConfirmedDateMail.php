<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RegistrationConfirmedDateMail extends Mailable
{
    use Queueable, SerializesModels;

    public $registration;

    public function __construct($registration)
    {
        $this->registration = $registration;
    }

    public function build()
    {
        return $this->subject('Регистрация подтверждена')
            ->view('front.testRegistration.confirmedDate')
            ->with([
                'test_date' => $this->registration->test_date,
            ]);
    }
}
