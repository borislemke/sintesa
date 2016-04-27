<?php

namespace App\Http\Controllers;

use File;
use App\Paper;

use App\Http\Requests;

class PageController extends Controller
{
    //
    public function __construct()
    {
    }

    public function footer()
    {
        $footer = json_decode(File::get(storage_path('json/footers.json')));
        return $footer[0];
    }

    public function render($url = '')
    {
        $url = ($url == '' ? 'home' : $url);
        $data = Paper::where('url', $url)->where('status', 1)->first();

        if(!$data) return abort(404);

        $page_content = json_decode($data->content, TRUE);
        usort($page_content, function($a, $b) {
            return $a['order'] - $b['order'];
        });
        $data->content = json_decode(json_encode($page_content));

        $footer = $this->footer();
        return view('templates.frontend', compact('data', 'footer'));
    }
}
