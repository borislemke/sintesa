<?php

namespace App\Http\Controllers;

use App\Hotel;
use Illuminate\Http\Request;

use App\Http\Requests;

class HotelsController extends Controller
{

    public function __construct()
    {
    }

    public function index(Request $request)
    {
        if(isset($request->start)) return $this->indexRange($request);
        return Hotel::all();
    }

    public function indexRange(Request $request)
    {
        $filter = explode(',', $request->filter);
        $filter[] = 'id';
        $collection = Hotel::all($filter);
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
        $hotel = Hotel::find($id);

        if(!$hotel) return abort(404);

        $hotel->content = json_decode($hotel->content);

        return response()->json($hotel);
    }

    public function create(Request $request)
    {
        return ['status' => 200, 'status-text' => 'success', 'monolog' => ['title' => 'Page created', 'message' => 'Page has been created successfully']];
    }

    public function update(Request $request)
    {
        return $request;
        $hotel = Hotel::find($request->id);

        return ['status' => 200, 'status-text' => 'success', 'monolog' => ['title' => 'Page created', 'message' => 'Page has been created successfully']];
    }

    public function destroy(Request $request)
    {
        return $request->items;
    }
}
