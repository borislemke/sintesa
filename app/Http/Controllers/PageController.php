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

    // $target equals $url in this context
    public function render($target = '')
    {
        if (match_locale()) $target = substr($target, (strpos($target, '/') + 1));
        $target = ($target == '' ? 'home' : $target);
        $data = env('APP_DEBUG') ? $this->fromJson($target) : Paper::where('url', $target)->where('status', 1)->first();

        if (!$data) return abort(404);

        $page_content = env('APP_DEBUG') ? json_decode(json_encode($data->content), TRUE) : json_decode($data->content, TRUE);
        usort($page_content, function ($a, $b) {
            return $a['order'] - $b['order'];
        });
        $data->content = json_decode(json_encode($page_content));

        $footer = $this->footer();
        return view('templates.frontend', compact('data', 'footer'));
    }

    public function fromJson($target)
    {
        $jsonData = json_decode(File::get(storage_path('json/pages.json')));

        foreach ($jsonData as $page) {
            if ($page->url == $target) return $page;
        }

        return false;
    }

    public function listUrls()
    {
        $pages = json_decode(File::get(storage_path('json/pages.json')));
        foreach ($pages as $page) {
            echo "&ltmd-option value=\"$page->url\"&gt$page->title&lt/md-option&gt<br>";
        }
    }
}
