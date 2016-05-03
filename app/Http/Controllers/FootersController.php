<?php

namespace App\Http\Controllers;

use App\Footer;
use Illuminate\Http\Request;

use App\Http\Requests;

class FootersController extends Controller
{
    //
    public function index()
    {
        return Hotel::all();
    }

    public function indexRange(Request $request)
    {
        $filter = $request->filter;
        $filter[] = 'id';
        $collection = Footer::all($filter);
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
        $footer = Footer::find($id);

        $footer->content = json_decode($footer->content);

        return response()->json($footer);
    }

    public function create(Request $request)
    {
        $hotel = new Hotel;
        $hotel->title = $request->title;
        $hotel->capacity = $request->capacity;
        $hotel->area = $request->area;
        $hotel->bed_type = $request->bed_type;
        $hotel->description = $request->description;
        $hotel->hotel_id = $request->hotel_id;
        $hotel->user_id = 1;

        $hotel->save();

        return response()->json([
            'status' => 200,
            'monolog' => [
                'title' => 'Hotel created',
                'message' => "Hotel created successfully: $hotel->title"
            ]
        ]);
    }

    public function update(Request $request)
    {
        $hotel = Hotel::find($request->id);
        $hotel->title = $request->title;
        $hotel->capacity = $request->capacity;
        $hotel->area = $request->area;
        $hotel->bed_type = $request->bed_type;
        $hotel->description = $request->description;
        $hotel->hotel_id = $request->hotel_id;

        $hotel->save();

        if ($request->facilities) {
            foreach ($hotel->facilities()->get() as $facility) {
                $facility->delete();
            }

            if ($request->facilities) {
                foreach ($request->facilities as $key => $value) {
                    $fac = new RoomFacility;
                    $fac->key = $key;
                    $fac->value = $value;
                    $fac->room_id = $hotel->id;
                    $fac->save();
                }
            }
        }

        return response()->json([
            'status' => 200,
            'monolog' => [
                'title' => 'Room updated',
                'message' => "Room updated successfully: $hotel->title"
            ]
        ]);
    }

    public function destroy(Request $request)
    {
        $hotel = Hotel::find($request->id);
        $hotel->delete();

        return response()->json([
            'status' => 200,
            'monolog' => [
                'title' => 'Room deleted',
                'message' => "Room deleted: $hotel->title"
            ]
        ]);
    }

    public function destroyMulti(Request $request)
    {
        foreach ($request->ids as $id) {
            $hotel = Hotel::find($id);

            foreach ($hotel->facilities()->get() as $facility) {
                if (!$facility->delete()) $error[] = "Error deleting " . $facility->room()->title;
            }
            if (!$hotel->delete()) $error[] = "Error deleting hotel " . $hotel->title;
        }

        return response()->json([
            'status' => 200,
            'monolog' => [
                'title' => 'Hotels deleted',
                'message' => "Hotels deleted"
            ]
        ]);
    }
}
