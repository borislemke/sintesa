<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Paper;
use App\Http\Requests;
use Illuminate\Support\Facades\File;

class PaperController extends Controller
{

    public function __construct()
    {
    }

    public function index(Request $request)
    {
        if(isset($request->start)) return $this->indexRange($request);
        return Paper::all();
    }

    public function indexModules()
    {
        $collection = Paper::all();

        $availableModules = [];
        foreach ($collection as $page) {
            foreach (json_decode($page->content) as $module) {
                $availableModules[] = $module->type;
            }
        }
        $availableModules = array_unique($availableModules);
        echo "<pre>"; print_r($availableModules); echo "</pre>";
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

        if(!$page) return abort(404);

        $page->content = json_decode($page->content);

        return response()->json($page);
    }

    public function create(Request $request)
    {
        return ['status' => 200, 'status-text' => 'success', 'monolog' => ['title' => 'Page created', 'message' => 'Page has been created successfully']];
    }

    public function update(Request $request)
    {
        $page = Paper::find($request->id);
        $page->bodyclass = $request->bodyclass;
        $page->content = json_encode($request->content);
        $page->layout = $request->layout;
        $page->meta = $request->meta;
        $page->navigation_id = $request->navigation_id;
        $page->status = $request->status;
        $page->title = $request->title;
        $page->url = $request->url;
        $page->save();

        return ['status' => 200, 'status-text' => 'success', 'monolog' => ['title' => 'Page created', 'message' => 'Page has been created successfully']];
    }

    public function destroy(Request $request)
    {
        return $request->items;
    }
}
