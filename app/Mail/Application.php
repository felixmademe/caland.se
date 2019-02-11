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
    public $text;
    public $file;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct( $name, $email, $position, $text, $file )
    {
        $this->name     = $name;
        $this->email    = $email;
        $this->position = $position;
        $this->text     = $text;
        $this->file     = $file;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view( 'mail.application' )
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
