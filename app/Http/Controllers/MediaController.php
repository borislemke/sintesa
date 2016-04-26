<?php

namespace App\Http\Controllers;

use DirectoryIterator;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\File;
use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;

class MediaController extends Controller
{
    // Index media directory
    public function index(Request $request)
    {
        $dir = $request->dir;
        $public_path = public_path();
        $target = "$public_path/$dir";
        if (!is_dir($target) || !file_exists($target)) {
            return response()->json([
                "status" => 404,
                "monolog" => [
                    "title" => "Invalid directory",
                    "message" => "Directory could not be found on server $target"
                ]
            ]);
        }
        $files = $this->indexFolder($request->dir);

        return response()->json($files);
    }

    public function indexFolder($path = "media")
    {
        $media_path = public_path("media");
        $current_path = public_path($path);
        $files = File::files($current_path);
        $folders = File::directories($current_path);
        $items = [];

        foreach($folders as $folder) {
            $items[] = [
                "type" => "folder",
                "name" => str_replace("$media_path", "", $folder),
                "fullpath" => $folder
            ];
        }
        foreach($files as $file) {
            $fileInfo = pathinfo($file);
            $filepath = str_replace("$media_path", "", $fileInfo["dirname"]);
            $items[] = [
                "type" => "file",
                "filetype" => $fileInfo["extension"],
                "name" => $fileInfo["basename"],
                "filename" => $fileInfo["filename"],
                "filepath" => $filepath == "" ? "/" : $filepath . "/"
            ];
        }

        return $items;
    }

    public function mkdir(Request $request)
    {
        $curr_dir = $request->current;
        $new_dir = $request->create;
        File::makeDirectory(public_path("$curr_dir/$new_dir"));
    }
}
