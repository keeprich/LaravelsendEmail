<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Mail\SendMail;

class Mailsend extends Controller
{
    // all route functions

    public function mailsend() {
        $details = [
            'title' => 'Title: Mail from Laravel app',
            'body' => 'Body: This is testing email usinf smtp'

        ];

        \Mail::to('keeprich@gmail.com')->send(new SendMail($details));
        return view('emails.thanks');

    }
}
