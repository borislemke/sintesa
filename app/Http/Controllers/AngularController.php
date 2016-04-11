<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use File;
use App\Http\Requests;

class AngularController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function run()
    {
        return response(File::get(public_path('admin/index.html')));
    }

    public function serve($file)
    {
        $content_type = str_contains($file, '.js') ? 'application/javascript' : str_contains($file, '.css') ? 'text/css' : 'text/html';
        return response($this->getHtmlFile("assets/$file"))->header('Content-Type', $content_type);
    }

    public function renderTemplate($templateUrl)
    {
        return response(File::get(public_path("admin/templates/$templateUrl")));
    }

    private function getHtmlFile($url) {

        return File::get(public_path('admin/' . $url));
    }
}
