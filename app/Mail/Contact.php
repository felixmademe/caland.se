<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Contact extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $email;
    public $subject;
    public $text;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct( $name, $email, $subject, $text )
    {
        $this->name    = $name;
        $this->email   = $email;
        $this->subject = $subject;
        $this->text    = $text;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view( 'mail.contact' )
                    ->from( 'no-reply@caland.se', 'Caland AB' )
                    ->replyTo( $this->email )
                    ->subject( $this->subject );
    }
}
