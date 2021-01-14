<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class HpmDashboardMail extends Mailable
{
    use Queueable, SerializesModels;

    private $mailTemplate;
    private $pdf;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($mailTemplate, $pdf)
    {
        $this->mailTemplate = $mailTemplate;
        $this->pdf = $pdf;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // return $this->subject(!empty($this->mailData['subject']) ? 'dsfsdfsd':'No Header')
        //     ->markdown('emails.dashboard.hpm-mail')
        //     ->attach($this->pdf);
        return $this->subject('HPM Dashboard')->markdown('emails.dashboard.hpm-mail',  $this->mailTemplate)->attach($this->pdf);
    }
}
