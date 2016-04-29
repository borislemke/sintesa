<?php

namespace App\Http\Controllers;

use App\Media;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\File;

class MediaController extends Controller
{
    // Index files and folders inside given directory
    public function indexFolder(Request $request)
    {
        $media_path = public_path("media");
        $current_path = $media_path . "/" . $request->dir;
        if (!is_dir($current_path) || !file_exists($current_path)) return response(["monolog" => ["title" => "Not found", "message" => "Directory or file could not be found", "target" => $current_path]], 404);
        $folders = File::directories($current_path);
        $items = [];

        foreach ($folders as $folder) {
            $items[] = [
                "name" => trim(str_replace("$media_path/$request->dir", "", $folder), "/"),
                "link" => trim(str_replace("$media_path/", "", $folder), "/")
            ];
        }
        $files = Media::where('folder', $request->dir)->get();

        foreach ($files as $file) {
            $file->size = $this->formatBytes($file->size);
        }

        return response()->json([
            "media_path" => $media_path,
            "folders" => $items,
            "files" => $files
        ]);
    }

    public function digestFolder($folder)
    {
        $folders = File::directories(public_path("media/$folder"));

        foreach($folders as $folder) {
            $sub = trim($this->digestFolder(str_replace(public_path("media/"), "", $folder)), "/");
        }

        return $folder;
    }

    public function updateFile(Request $request)
    {
        $file = Media::find($request->id);

        $file->title = $request->title;
        $file->url = $request->url;
        $file->name = $request->name;
        $file->folder = $request->folder;
        $file->type = $request->type;
        $file->size = $request->size;
        $file->dimension = $request->dimension;
        $file->caption = $request->caption;
        $file->description = $request->description;
        $file->alt_text = $request->alt_text;

        $file->save();

        return response()->json([
            "status" => 200,
            "monolog" => [
                "title" => "File uploaded",
                "message" => "File has been saved"
            ]
        ]);
    }

    public function upload(Request $request)
    {
        $uploadedFile = $request->file('file');
        $targetPath = public_path("media/$request->dir");
        $fileName = $request->name;
        $fileExt = $uploadedFile->getClientOriginalExtension();

        if (file_exists("$targetPath/$fileName")) {
            return response([
                "monolog" => [
                    "title" => "Duplicate file name",
                    "message" => "File with same name already exists in same directory, change your name or upload to another directory.",
                    "intended" => "$targetPath/$fileName"
                ]
            ], 500);
        }

        $savedPath = $request->file('file')->move($targetPath, $fileName);
        $file = new Media;

        $file->title = $request->title != "undefined" ? $request->title : $fileName;
        $file->caption = $request->description;
        $file->description = $request->description;
        $file->alt_text = $request->description;
        $file->size = $uploadedFile->getClientSize();
        $file->folder = $request->dir;
        $file->name = $fileName;
        $file->url = trim(str_replace(public_path("media/"), "", $savedPath), "/");
        $file->type = $fileExt;

        $fileSize = getimagesize($savedPath)[0] . " x " . getimagesize($savedPath)[1];
        $file->dimension = $fileSize;

        $file->save();

        return response()->json([
            "status" => 200,
            "monolog" => [
                "title" => "File uploaded",
                "message" => "File has been saved"
            ]
        ]);
    }

    public function resolveDuplicate($path, $fileName)
    {


        return $path;
    }

    public function mkdir(Request $request)
    {
        File::makeDirectory(public_path("media/$request->new_dir"));

        return response()->json([
            "status" => 200,
            "monolog" => [
                "title" => "Folder create",
                "message" => "New folder has been created"
            ]
        ]);
    }

    function formatBytes($size, $precision = 2)
    {
        $base = log($size, 1024);
        $suffixes = array('', 'kb', 'mb', 'gb', 'tb');

        return round(pow(1024, $base - floor($base)), $precision) .' '. $suffixes[floor($base)];
    }
}

/*
guessExtension()
Returns the extension based on the mime type.
from File
string|null	getMimeType()
Returns the mime type of the file.
from File
File	move(string $directory, string $name = null)
Moves the file to a new location.
string|null	getClientOriginalName()
Returns the original file name.
string	getClientOriginalExtension()
Returns the original file extension.
string|null	getClientMimeType()
Returns the file mime type.
string|null	guessClientExtension()
Returns the extension based on the client mime type.
int|null	getClientSize()
Returns the file size.
int	getError()
Returns the upload error.
bool	isValid()
Returns whether the file was uploaded successfully.
static int	getMaxFilesize()
Returns the maximum size of an uploaded file as configured in php.ini.
string	getErrorMessage()
*/
