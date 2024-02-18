<?php

namespace App\Models\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Support extends Mailable
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
        return $this->view( 'mail.support' )
                    ->from( 'no-reply@caland.se', config('app.name') )
                    ->replyTo( $this->email )
                    ->subject( $this->subject );
    }
}
