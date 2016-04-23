<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;

class WebhookController extends Controller
{
    public function handle()
    {
        File::put(storage_path('webhook.json'), json_encode(Input::all()));

        // Added shell command //
        // Added another shell command //
        shell_exec('cd /var/www/html && git pull');

        return 200;
    }
}
