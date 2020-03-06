<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Invoice extends Mailable
{
    use Queueable, SerializesModels;

        public  $farmer_transactions;
    /**
     * Create a new message instance.
     *
     * @return void
     */
     public function __construct($farmer_transactions)
     {
        $this->farmer_transactions = $farmer_transactions;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('TractorOnTheGo Invoice')->view('email.invoice');
    }
}
