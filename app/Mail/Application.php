<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Application extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $email;
    public $position;
    public $message;
    public $file;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct( $name, $email, $position, $message, $file )
    {
        $this->name     = $name;
        $this->email    = $email;
        $this->position = $position;
        $this->message  = $message;
        $this->file     = $file;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown( 'mail.application' )
                    ->from( $this->email, $this->name )
                    ->replyTo( $this->email )
                    ->subject( $this->position )
                    ->attach( $this->file->getRealPath(),
                    [
                        'as' => $this->file->getClientOriginalName(),
                        'mime' => $this->file->getClientMimeType(),
                    ] );
    }
}
