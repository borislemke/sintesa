<?php

namespace App\Http\Controllers;

use Config;
use File;
use Htmldom;
use App\Paper;

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
    public function render($target)
    {
        if (match_locale()) $target = substr($target, (strpos($target, '/') + 1));
        $target = ($target == '' ? 'home' : $target);
        $data = env('JSON_DATABASE') ? $this->fromJson($target) : Paper::where('url', $target)->where('status', 1)->first();

        if (!$data) return abort(404);

        $page_content = env('JSON_DATABASE')
            ? json_decode(json_encode($data->content), TRUE)
            : json_decode($data->content, TRUE);

        usort($page_content, function ($a, $b) {
            return $a['order'] - $b['order'];
        });
        $data->content = json_decode(json_encode($page_content));
        $data->title = json_decode($data->title);
        $data->meta = json_decode($data->meta);

        $footer = $this->footer();
        return view('templates.frontend', compact('data', 'footer'));
    }

    public function serve($page = '') {

        $page = ($page == '' ? 'home' : $page);

        if (env('SERVE_MANUAL')) return $this->serveManual($page);

        return File::get(storage_path("rendered/$page.html"));
    }

    public function serveManual($url)
    {
        $data = Paper::where('url', $url)->where('status', 1)->first();

        if (!$data) return abort(404);

        $page_content = json_decode($data->content, TRUE);

        usort($page_content, function ($a, $b) {
            return $a['order'] - $b['order'];
        });

        $data->content = json_decode(json_encode($page_content));
        $data->title = json_decode($data->title);
        $data->meta = json_decode($data->meta);

        $footer = $this->footer();

        return view('templates.frontend', compact('data', 'footer'));
    }

    public function renderAll()
    {
        $paper = Paper::all();

        foreach ($paper as $pap) {
            $dom = new Htmldom();
            $page = $dom->file_get_html('http://sintesa.dev/render/' . $pap->url);
            File::put(storage_path('rendered/' . $pap->url . '.html'), $page);
        }
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
