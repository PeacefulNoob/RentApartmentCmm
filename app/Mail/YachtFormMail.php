<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class YachtFormMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($request)
    {
       $this->request = $request->all();

    }
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $data = $this->request;

        return $this->from('test.qqriq@gmail.com')
        ->subject('CMM-rental | Rent Yacht Inquiry')
        ->markdown('emails.rentYacht',compact('data'));
    }
}
