<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\File;

class FilesController extends Controller
{
    //
    public function index()
    {
        $public_path = public_path();
        $structure = File::allFiles("$public_path/images");
        $files = [];

        foreach ($structure as $file) {
            $fileInfo = pathinfo($file);
            $fileInfo = json_decode(json_encode($fileInfo));
            $files[] = [
                "path" => str_replace($public_path, "", $fileInfo->dirname),
                "basename" => $fileInfo->basename,
                "extension" => $fileInfo->extension,
                "filename" => $fileInfo->filename,
                "fullpath" => str_replace($public_path, "", $fileInfo->dirname) . "/" . $fileInfo->basename
            ];
        }
         return response($files);
    }

    public function mkdir(Request $request)
    {
        $curr_dir = $request->current;
        $new_dir = $request->create;
        File::makeDirectory(public_path("$curr_dir/$new_dir"));
    }
}
