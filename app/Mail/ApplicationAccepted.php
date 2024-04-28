<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ApplicationAccepted extends Mailable
{
    use Queueable, SerializesModels;

    public $application_name = '';

    /**
     * Create a new message instance.
     *
     * @param string $application_name
     */
    public function __construct($application_name)
    {
        $this->application_name = $application_name;
    }

    public function build()
    {
        return $this->view('emails.application_accepted')
            ->subject('Application Accepted');
    }
}
