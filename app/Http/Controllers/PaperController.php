<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Paper;
use App\Http\Requests;

class PaperController extends Controller
{

    public function __construct()
    {
    }

    public function index()
    {
        return Paper::all();
    }

    public function indexModules($collection)
    {
        $availableModules = [];
        foreach ($collection as $page) {
            foreach ($page['content'] as $module) {
                $availableModules[$module['type']] = $module['type'];
            }
        }
        return $availableModules;
    }

    public function indexRange(Request $request)
    {
        $filter = $request->filter;
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

    public function get($id)
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
        return $request;
        $page = Paper::find($request->id);
        $page->title = $request->title;
        $page->meta = $request->meta;
        $page->url = $request->url;
        $page->template = $request->template;
        $page->header = $request->header;
        $page->footer = $request->footer;
        $page->status = $request->status;
        $page->content = json_encode($request->content);
        $page->save();

        return ['status' => 200, 'status-text' => 'success', 'monolog' => ['title' => 'Page created', 'message' => 'Page has been created successfully']];
    }

    public function destroy(Request $request)
    {
        return $request->items;
    }
}
