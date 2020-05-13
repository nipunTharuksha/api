<?php

namespace App\Mail;

use App\LiveAppointment;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class BookingConfirmation extends Mailable
{
    use Queueable, SerializesModels;
    /**
     * @var LiveAppointment
     */
    public $liveAppointment;

    /**
     * Create a new message instance.
     */
    public function __construct(LiveAppointment $liveAppointment)
    {
        $this->liveAppointment = $liveAppointment;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.confirmation');
    }
}
