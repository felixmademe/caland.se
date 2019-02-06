<?php

namespace App\Http\Controllers;

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
            'message' => 'required|string'
        ] );
        Mail::to( 'felix.wetell@gmail.com' )
            ->send( new Contact (
                $request->name,
                $request->email,
                $request->subject,
                $request->message,
            ) );
        return redirect()->back()->with( 'success', 'Ditt email har skickats!' );
    }

    public function applicationEmail( Request $request )
    {
        $request->validate( [
            'name'    => 'required|string|max:255',
            'email'   => 'required|email',
            'subject' => 'required|string|max:255',
            'message' => 'required|string'
        ] );
    }
}
