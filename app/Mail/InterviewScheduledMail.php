<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;


class InterviewScheduledMail extends Mailable
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
            ->subject('Успешное прохождение теста!')
            ->view('admin.enrollee.interview_scheduled')
            ->with([
                'name'      => $this->registration->name,
                'surname'   => $this->registration->surname,
                'date'      => $this->registration->interview_date,
                'timeSlot'  => $this->registration->interview_time_slot,
            ]);
    }
}
