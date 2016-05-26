<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Access\Response;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Mail;

class AjaxController extends Controller
{
    //
    public function submit(Request $request)
    {

        Mail::send('emails.contact', ['data' => $request], function ($mail) {

            $mail->from('fleavasmtp@gmail.com', 'The Sintesa Jimbaran');

            $mail->to(env('MAIL_RECIPIENT_ADDRESS', 'boris@fleava.com'), env('MAIL_RECIPIENT_NAME', 'Boris Lemke'))->subject('Contact Request');
        });

    }
}
