<?php

namespace App\Http\Controllers;

use App\Mail\Support;
use App\Mail\Contact;
use App\Mail\Application;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;

class EmailController extends Controller
{
    public function contactEmail( Request $request )
    {
        $request->validate( [
            'name'    => 'required|string|max:255',
            'email'   => 'required|email',
            'subject' => 'required|string|max:255',
            'text'    => 'required|string',
            'policy'  => 'accepted'
        ] );

        Mail::to( 'ellinor@caland.se' )
            ->send( new Contact(
                $request->name,
                $request->email,
                $request->subject,
                $request->text,
            ) );

        Mail::to( 'lotta@caland.se' )
            ->send( new Contact(
                $request->name,
                $request->email,
                $request->subject,
                $request->text,
            ) );

        return redirect()->back()->with( 'success', 'Ditt email har skickats!' );
    }

    public function applicationEmail( Request $request )
    {
        $request->validate( [
            'name'     => 'required|string|max:255',
            'email'    => 'required|email',
            'text'     => 'required|string',
            'file'     => 'required',
            'policy'   => 'accepted'
        ] );

        if( $request->file->getError() == 1 )
        {
           $max_size = $request->file->getMaxFileSize() / 1024 / 1024;
           $error = 'Dokumentet får inte vara större än ' . $max_size . ' mb.';
           return redirect()->back()->with( 'error', $error);
        }

        Mail::to( 'ansokan@caland.se' )
            ->send( new Application(
                $request->name,
                $request->email,
                $request->position,
                $request->text,
                $request->file
            ) );

        return redirect()->back()->with( 'success', 'Din ansökan har skickats!' );
    }

    public function supportEmail( Request $request )
    {
        $request->validate( [
            'name'    => 'required|string|max:255',
            'email'   => 'required|email',
            'subject' => 'required|string|max:255',
            'text'    => 'required|string',
            'policy'  => 'accepted'
        ] );
        Mail::to( 'ellinor@caland.se' )
            ->send( new Support(
                $request->name,
                $request->email,
                $request->subject,
                $request->text,
            ) );

        return redirect()->back()->with( 'success', 'Ditt ärende har skickats!' );
    }
}
