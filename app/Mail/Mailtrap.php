<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Event;

class Mailtrap extends Mailable
{
    use Queueable, SerializesModels;

    protected $eventTitle;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($eventTitle)
    {
        $this->eventTitle = $eventTitle;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('shinigamis@root.com', 'Mailtrap')
            ->subject('Shinigamis Events')
            ->view('email')
            ->with([
                'title' => $this->eventTitle,
            ]);
    }
}
