<?php

namespace App\Mail;

use Carbon\Carbon;
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
    public function __construct( $name, $email, $text, $file )
    {
        $this->name     = $name;
        $this->email    = $email;
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
                    ->from( 'no-reply@caland.se', 'Caland AB' )
                    ->replyTo( $this->email )
                    ->subject( 'Jobbansökan: ' . $this->name )
                    ->attach( $this->file->getRealPath(),
                    [
                        'as' => $this->file->getClientOriginalName(),
                        'mime' => $this->file->getClientMimeType(),
                    ] );
    }
}
