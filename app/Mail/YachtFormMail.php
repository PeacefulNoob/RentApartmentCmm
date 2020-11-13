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
        $this->pud = $request['pud'];
        $this->dofd = $request['dofd'];
        $this->put = $request['put'];
        $this->doft = $request['doft'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('test.qqriq@gmail.com')
        ->subject('CMM-rental')
        ->markdown('emails.rentYacht')->with('pud',  $this->pud);;
    }
}
