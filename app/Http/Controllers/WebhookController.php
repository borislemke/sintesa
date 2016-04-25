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
        shell_exec('cd ' . storage_path() . '.. && git fetch --all && git reset --hard origin/master');
        
        return 200;
    }
}
