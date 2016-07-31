<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller {

    public function sendEmail(Request $request) {
        $email = $request->input('email');
        $phone = $request->input('phone');
        $body = $request->input('message');

        $success = "false";
        try {
            Mail::send('emails.message', ['email' => $email, 'phone' => $phone, 'body' => $body], function ($message) {
                $message->from('no-reply@euromet.nl');
                $message->to('michael@magnet.me');
                $message->subject('Nieuw bericht via euromet.nl');
            });

            $success = count(Mail::failures()) > 0 ? "true" : "false";
        }
        catch (\Exception $e) {
            // Swallow exception, display error message.
        }

        return redirect('/contact?success=' . $success);
    }

}