<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use File;
use App\Http\Requests;

class PaperController extends Controller
{
    //
    public function index()
    {
        $data = $this->getPagesFromJson();

        return response()->json($data);
    }

    public function get($id)
    {
        $collection = $this->getPagesFromJson();

        foreach ($collection as $item) {
            if ($item->id == $id) {
                return response()->json($item);
            }
        }

        return abort(404);
    }

    public function getPagesFromJson()
    {
        $collection = json_decode(File::get(storage_path('json/pages.json')));

        return $collection;
    }
}
