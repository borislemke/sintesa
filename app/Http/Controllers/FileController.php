<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Response;

class FileController extends Controller
{
    //
    public function renderPdf($target = "")
    {
        if ($target == "") return abort(404);

        $path = public_path("media/$target");

        return Response::make(file_get_contents($path), 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="' . $target . '"'
        ]);
    }
}
