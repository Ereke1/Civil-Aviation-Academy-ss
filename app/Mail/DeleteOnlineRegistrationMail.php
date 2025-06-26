<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;


class DeleteOnlineRegistrationMail extends Mailable
{
    use Queueable, SerializesModels;
   /** @var \App\Models\RegistrationForTesting */
    public $registration;

    public function __construct($registration)
    {
        $this->registration = $registration;
    }

    public function build()
    {
        return $this
            ->subject('Неправильно загружены сертификаты!')
            ->view('admin.enrollee.deleted_massage')
            ->with([
                'name'      => $this->registration->name,
                'surname'   => $this->registration->surname,
            ]);
    }
}