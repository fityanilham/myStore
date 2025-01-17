<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EmailKu extends Mailable
{
    use Queueable, SerializesModels;
    public $massage;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($massage)
    {
        $this->massage = $massage;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Mail From Fake Ghuroba')
                    ->view('massage')
                    ->redirect('/product');

        Toastr::success('Email successfully Send','Success');
    }
}
