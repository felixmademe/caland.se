<?php

namespace App\Http\Controllers;

use App\Models\Mail\Support;
use App\Models\Mail\Contact;
use App\Models\Mail\Application;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;

define('RECAPTCHA_ERROR_TEXT', 'reCAPTCHA fel, var god försök igen!');

class EmailController extends Controller
{
    public function contactEmail( Request $request )
    {
        $request->validate( [
            'name'    => 'required|string|max:255',
            'email'   => 'required|email',
            'subject' => 'required|string|max:255',
            'text'    => 'required|string',
            'policy'  => 'accepted',
            'recaptcha' => 'required'
        ] );

        $result = $this->validateRecaptcha( $request );
        
        if( $result != true )
        {
            return back()->with( 'error', RECAPTCHA_ERROR_TEXT );
        }

        Mail::to( 'lotta@caland.se' )
                ->send( new Contact(
                    $request->name,
                    $request->email,
                    $request->subject,
                    $request->text
                ) );

        return back()->with('success', 'Ditt meddelande har skickats!');
    }

    public function applicationEmail( Request $request )
    {
        $request->validate( [
            'name'     => 'required|string|max:255',
            'email'    => 'required|email',
            'text'     => 'required|string',
            'file'     => 'required',
            'policy'   => 'accepted',
            'recaptcha' => 'required'
        ] );

        $result = $this->validateRecaptcha( $request );

        if( $result != true )
        {
            return back()->with( 'error', RECAPTCHA_ERROR_TEXT );
        }

        $file = $request->file('file');
        if( $file->getError() == 1 )
        {
           $max_size = $file->getMaxFileSize() / 1024 / 1024;
           $error = 'Dokumentet får inte vara större än ' . $max_size . ' mb.';
           return back()->with( 'error', $error);
        }

        Mail::to( 'ansokan@caland.se' )
            ->send( new Application(
                $request->name,
                $request->email,
                $request->text,
                $request->file
            ) );

        
        return back()->with('success', 'Din ansökan har skickats!');
    }

    public function supportEmail( Request $request )
    {
        $request->validate( [
            'name'    => 'required|string|max:255',
            'email'   => 'required|email',
            'subject' => 'required|string|max:255',
            'text'    => 'required|string',
            'policy'  => 'accepted',
            'recaptcha' => 'required'
        ] );

        $result = $this->validateRecaptcha( $request );

        if( $result != true )
        {
            return back()->with( 'error', RECAPTCHA_ERROR_TEXT );
        }

        Mail::to( 'johan@caland.se' )
            ->send( new Support(
                $request->name,
                $request->email,
                $request->subject,
                $request->text
            ) );

        return back()->with( 'success', 'Ditt ärende har skickats!' );
    }

    private function validateRecaptcha( Request $request )
    {
        $url = 'https://www.google.com/recaptcha/api/siteverify';
        $data = [
            'secret'   => config( 'recaptcha.key.secret' ),
            'response' => $request->recaptcha
        ];

        $options = [
            'http' => [
                'header'  => 'Content-type: application/x-www-form-urlencoded',
                'method'  => 'POST',
                'content' => http_build_query( $data )
            ]
        ];

        $context = stream_context_create( $options );
        $result = file_get_contents( $url, false, $context );
        $json = json_decode( $result );

        // Only returns success if app is not in production. 
        if( config('app.env') != 'production' ) {
            $json->success = true;
        }
        
        return $json->success;
    }
}
