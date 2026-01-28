<?php

namespace App\Mail;

use App\Models\Event;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class EventRegistrationMail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public $event;
    public $user;

    public function __construct($event, $user)
    {
        $this->event = $event;
        $this->user = $user;
    }

    public function build()
    {
        return $this->subject('Event Registration Confirmation')
            ->markdown('emails.event.registration')
            ->with([
                'event' => $this->event,
                'user' => $this->user
            ]);
    }
}
