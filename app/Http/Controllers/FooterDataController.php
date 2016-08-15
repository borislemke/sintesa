<?php

namespace App\Http\Controllers;

use File;
use App\Http\Requests;
use Illuminate\Http\Request;

class FooterDataController extends Controller
{
    //
    public function index()
    {
        return File::get(storage_path('json/footer.json'));
    }
    
    public function store(Request $request)
    {
        File::put(storage_path('json/footer.json'), json_encode($request->config));

        return $request->config;
    }
}
