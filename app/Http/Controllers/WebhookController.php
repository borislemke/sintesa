<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Http\Response;

class WebhookController extends Controller
{
    //
    public function handle(Request $request)
    {
        Storage::put('webhook.json', json_encode($request));

        return (new Response(json_encode($request), 200))
            ->header('Content-Type', 'json');
    }
}
