<?php

namespace App\Http\Controllers;

use App\Room;
use App\RoomFacility;
use Illuminate\Http\Request;

use App\Http\Requests;

class RoomsController extends Controller
{
    //
    public function index()
    {
        return Room::all();
    }

    public function indexRange(Request $request)
    {
        $filter = $request->filter;
        $filter[] = 'id';
        $collection = Room::all($filter);
        $row_count = $collection->count();

        if ($request->sortDir) {
            $collection = $collection->sortByDesc($request->sortBy);
        } else {
            $collection = $collection->sortBy($request->sortBy);
        }

        $start = ($request->start - 1) * $request->offset;
        $collection = $collection->slice($start, $request->offset);

        foreach ($collection as $room) {
            $hotel = $room->hotel()->first();
            $room->hotel_id = $hotel->title;
        }

        return response()->json([
            'data' => $collection,
            'start' => $start + 1,
            'sortDir' => $request->sortDir,
            'last' => $start + count($collection),
            'length' => $row_count
        ]);
    }

    public function indexByHotel(Request $request)
    {
        return Room::where('hotel_id', $request->hotel)->get();
    }

    public function get($id)
    {
        $room = Room::find($id);

        return response()->json($room);
    }

    public function create(Request $request)
    {
        $room = new Room;
        $room->title = $request->title;
        $room->capacity = $request->capacity;
        $room->area = $request->area;
        $room->bed_type = $request->bed_type;
        $room->description = $request->description;
        $room->hotel_id = $request->hotel_id;
        $room->user_id = 1;

        $saved = $room->save();

        if (!$saved) {
            return response()->json([
                'status' => 300,
                'monolog' => [
                    'title' => 'Something went wrong',
                    'message' => "Failed to update: $room->title"
                ]
            ]);
        }

        if ($request->gallery) {
            foreach ($request->gallery as $room_gallery) {
                echo $room_gallery;
            }
        }

        if ($request->facilities) {
            foreach ($request->facilities as $key => $value) {
                $fac = new RoomFacility;
                $fac->key = $key;
                $fac->value = $value;
                $fac->room_id = $room->id;
                $fac->save();
            }
        }

        return response()->json([
            'status' => 200,
            'monolog' => [
                'title' => 'Room created',
                'message' => "Room created successfully: $room->title"
            ]
        ]);
    }

    public function update(Request $request)
    {
        $room = Room::find($request->id);
        $room->title = $request->title;
        $room->capacity = $request->capacity;
        $room->area = $request->area;
        $room->bed_type = $request->bed_type;
        $room->description = $request->description;
        $room->hotel_id = $request->hotel_id;

        $room->save();

        if ($request->facilities) {
            foreach ($room->facilities()->get() as $facility) {
                $facility->delete();
            }

            if ($request->facilities) {
                foreach ($request->facilities as $key => $value) {
                    $fac = new RoomFacility;
                    $fac->key = $key;
                    $fac->value = $value;
                    $fac->room_id = $room->id;
                    $fac->save();
                }
            }
        }

        return response()->json([
            'status' => 200,
            'monolog' => [
                'title' => 'Room updated',
                'message' => "Room updated successfully: $room->title"
            ]
        ]);
    }

    public function destroy(Request $request)
    {
        $room = Room::find($request->id);
        $room->delete();

        return response()->json([
            'status' => 200,
            'monolog' => [
                'title' => 'Room deleted',
                'message' => "Room deleted: $room->title"
            ]
        ]);
    }

    public function destroyMulti(Request $request)
    {
        foreach ($request->ids as $id) {
            $room = Room::find($id);

            foreach ($room->facilities()->get() as $facility) {
                if (!$facility->delete()) $error[] = "Error deleting " . $facility->room()->title;
            }
            if (!$room->delete()) $error[] = "Error deleting room " . $room->title;
        }

        return response()->json([
            'status' => 200,
            'monolog' => [
                'title' => 'Rooms deleted',
                'message' => "Rooms deleted"
            ]
        ]);
    }
}
