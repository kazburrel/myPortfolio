<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\profile;

class ContactMe extends Mailable
{
    use Queueable, SerializesModels;
    // public $dataReceived;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($FormFields)
    {
        $this->FormFields = $FormFields;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        return $this->view('email')
            ->subject('A new contact email')
            ->from('oegbosionu@gmail.com', 'Admin')
            ->with('FormFields', $this->FormFields);
    }
}
