<?php

namespace App\Mail;

use App\Models\ChatMessage;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewConsultationRequestMail extends Mailable
{
    use Queueable, SerializesModels;

    public $chatMessage;

    public function __construct(ChatMessage $chatMessage)
    {
        $this->chatMessage = $chatMessage;
    }

    public function build()
    {
        return $this
            ->subject('Новая заявка на консультацию с сайта')
            ->view('emails.chat.consultation-request');
    }
}
