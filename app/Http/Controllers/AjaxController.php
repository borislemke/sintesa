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

    public function meeting(Request $request)
    {

        var_dump($request->title);
        var_dump($request->name);
        var_dump($request->email);
        var_dump($request->telephone);
        var_dump($request->nationality);
        var_dump($request->country);
        var_dump($request->nationality);
        var_dump($request->address);

        var_dump($request->city);
        var_dump($request->province);
        var_dump($request->event);
        var_dump($request->company);
        var_dump($request->category);
        var_dump($request->attendance);
        var_dump($request->rooms);
        var_dump($request->budget);
        var_dump($request->needs);
        var_dump($request->activity);
        var_dump($request->requeststart);
        var_dump($request->requestend);
        var_dump($request->alternatestart);
        var_dump($request->alternateend);
        var_dump($request->message);
        die();

        Mail::send('emails.meeting', ['data' => $request], function ($mail) {

            $mail->from('fleavasmtp@gmail.com', 'The Sintesa Jimbaran');

            $mail->to('boris@fleava.com', env('MAIL_RECIPIENT_NAME', 'Boris Lemke'))->subject('Meeting Package');
        });
    }
}
