<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;


class ConfirmRegistration extends Mailable
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
        $testDate        = $this->registration->pending_test_date      ?? $this->registration->test_date;
        $testTime        = $this->registration->pending_test_time_slot ?? $this->registration->test_time_slot;
        $interviewDate   = $this->registration->pending_interview_date      ?? $this->registration->interview_date;
        $interviewTime   = $this->registration->pending_interview_time_slot ?? $this->registration->interview_time_slot;

        return $this
            ->subject(
                'Civil Aviation Academy'
            )
            ->view('front.testRegistration.confirm')
            ->with([
                'url'                 => route('front.testRegistration.confirm', ['token' => $this->registration->confirmation_token]),
                'have_ielts'          => $this->registration->have_ielts,
                'test_date'           => $testDate,
                'test_time_slot'      => $testTime,
                'interview_date'      => $interviewDate,
                'interview_time_slot' => $interviewTime,
            ]);
    }
}