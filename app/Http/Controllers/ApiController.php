<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ApiController extends Controller
{

    public function __construct()
    {
    }

    /**
     * Indexes a given database and returns all of it's models(rows)
     * @param $model
     * @return mixed
     */
    public function index($model)
    {
        $collection = Model::where('name', $model)->get();

        return response()->json($collection);
    }
}
