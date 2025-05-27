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
        // берём уже «правильные» — если были pending, они уже сброшены в confirm(), иначе оригинальные
        $testDate        = $this->registration->test_date;
        $testTime        = $this->registration->test_time_slot;
        $interviewDate   = $this->registration->interview_date;
        $interviewTime   = $this->registration->interview_time_slot;

        return $this
            ->subject('Ваша регистрация подтверждена')
            ->view('front.testRegistration.confirmedDate')
            ->with([
                'have_ielts'           => $this->registration->have_ielts,
                'ielts_file'           => $this->registration->ielts_file,
                'test_date'            => $testDate,
                'test_time_slot'       => $testTime,
                'interview_date'       => $interviewDate,
                'interview_time_slot'  => $interviewTime,
            ]);
    }

}

