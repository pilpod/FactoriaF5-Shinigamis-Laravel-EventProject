<?php

namespace App\Jobs;

use App\Mail\Mailtrap;
use App\Models\Event;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $userEmail;
    protected $eventTitle;
    protected $eventHour;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($userEmail, $eventTitle)
    {
        $this->userEmail = $userEmail;
        $this->eventTitle = $eventTitle;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $email = new Mailtrap($this->eventTitle);
        Mail::to($this->userEmail)->send($email);
    }

}
