<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Support\Facades\File;

class AdminNavController extends Controller
{
    //
    public function index()
    {
        $nav_json = File::get(storage_path('json/admin_nav.json'));
        $navObject = json_decode($nav_json);

        return response()->json($navObject);
    }
}
