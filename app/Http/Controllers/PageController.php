<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PageController extends Controller
{
    //
    public function __construct()
    {
        $paper = new PaperController();
        $this->pages = $paper->getPagesFromJson();
    }

    public function render($url = '')
    {
        $url = ($url == '' ? 'home' : $url);

        foreach ($this->pages as $data) {
            if ($data->url == $url) return view('templates.frontend', compact('data'));
        }

        return abort(404);
    }
}
