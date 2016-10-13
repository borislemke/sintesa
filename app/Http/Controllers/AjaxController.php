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
        Mail::send('emails.meeting', ['data' => $request], function ($mail) {

            $mail->from('fleavasmtp@gmail.com', 'The Sintesa Jimbaran');

            $mail->to('boris@fleava.com', env('MAIL_RECIPIENT_NAME', 'Boris Lemke'))->subject('Meeting Package');
        });
    }

    public function fitness(Request $request)
    {
        Mail::send('emails.fitness', ['data' => $request], function ($mail) {

            $mail->from('fleavasmtp@gmail.com', 'The Sintesa Jimbaran');

            $mail->to('boris@fleava.com', env('MAIL_RECIPIENT_NAME', 'Boris Lemke'))->subject('Meeting Package');
        });
    }
}
