<?php

namespace App\Jobs;

use App\Mail\HpmDashboardMail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    private $mail;
    private $pdfData;
    private $pdf;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($mail, $pdfData, $file)
    {
        $this->mail = $mail;
        $this->pdfData = $pdfData;
        $this->pdf = $file;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Mail::to($this->user)->send(new HpmDashboardMail($this->pdfData, $this->pdf));
    }
}
