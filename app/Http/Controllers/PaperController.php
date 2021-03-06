<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Htmldom;
use File;

use App\Paper;
use App\Http\Requests;

class PaperController extends Controller
{

    public function __construct()
    {
    }

    public function index(Request $request)
    {
        if (isset($request->start)) return $this->indexRange($request);
        return Paper::all();
    }

    public function indexModules()
    {
        $collection = Paper::all();

        $availableModules = [];
        $added_modules = [];
        foreach ($collection as $page) {
            foreach (json_decode($page->content) as $module) {
                if (!in_array($module->type, $added_modules)) {
                    $added_modules[] = $module->type;
                    $availableModules[] = $module;
                }
            }
        }
        echo "<pre>";
        echo json_encode($availableModules, JSON_PRETTY_PRINT);
        echo "</pre>";
    }

    public function indexRange(Request $request)
    {
        $filter = explode(',', $request->filter);
        $filter[] = 'id';
        $collection = Paper::all($filter);
        $row_count = $collection->count();

        if ($request->sortDir) {
            $collection = $collection->sortByDesc($request->sortBy);
        } else {
            $collection = $collection->sortBy($request->sortBy);
        }

        $start = ($request->start - 1) * $request->offset;
        $collection = $collection->slice($start, $request->offset);

        foreach ($collection as $pageData) {
            $pageTitle = json_decode($pageData->title);
            $pageData->title = $pageTitle->en;
        }

        return response()->json([
            'data' => $collection,
            'start' => $start + 1,
            'sortDir' => $request->sortDir,
            'last' => $start + count($collection),
            'length' => $row_count
        ]);
    }

    public function show($id)
    {
        $page = Paper::find($id);

        if (!$page) return abort(404);

        $page->title = json_decode($page->title);
        $page->meta = json_decode($page->meta);
        $page->content = json_decode($page->content);

        return response()->json($page);
    }

    public function store(Request $request)
    {
        $url_conflict = Paper::where('url', $request->url)->first();

        if ($url_conflict) {
            return [
                'status' => 500, 'status-text' => 'error',
                'monolog' => [
                    'title' => 'Error saving page',
                    'message' => 'A page with the same URL already exists. Please choose a different URL']];
        }

        $page = new Paper();
        $page->bodyclass = $request->bodyclass;
        $page->content = json_encode($request->{'content'});
        $page->layout = 'main';
        $page->meta = json_encode($request->meta);
        $page->navigation_id = 1;
        $page->status = $request->status;
        $page->title = json_encode($request->title);
        $page->url = $request->url;

        if ($page->save()) {
            return [
                'status' => 200,
                'status-text' => 'success',
                'monolog' =>
                    ['title' => 'Page created', 'message' => 'Page has been created successfully'], 'saved_id' => $page->id];
        } else {
            return [
                'status' => 500,
                'status-text' => 'error',
                'monolog' => [
                    'title' => 'Error saving page',
                    'message' => 'Something went wrong saving the page. If the error persists, contact your developer for assistance.'
                ]
            ];
        }
    }

    public function update(Request $request)
    {
        $page = Paper::find($request->id);
        $page->bodyclass = $request->bodyclass;
        $page->content = json_encode($request->{'content'});
        $page->layout = 'main';
        $page->meta = json_encode($request->meta);
        $page->navigation_id = 1;
        $page->status = $request->status;
        $page->title = json_encode($request->title);
        $page->url = $request->url;

        if ($page->save()) {
            $this->renderPage($page->url);
        }

        return [
            'status' => 200,
            'status-text' => 'success',
            'monolog' => [
                'title' => 'Page created',
                'message' => 'Page has been created successfully'
            ]
        ];
    }

    public function destroy(Request $request)
    {
        return $request->items;
    }

    public function jsonToObject($json)
    {
        return json_decode($json);
    }

    public function renderPage($url)
    {
        $dom = new Htmldom();

        $page = $dom->file_get_html(env('APP_URL') . $url);

        File::put(storage_path('rendered/' . $url . 'html'), $page);
    }
}
