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

    public function deleteFile(Request $request)
    {
        $file = Media::find($request->file_id);

        $file->delete();

        return response()->json([
            "status" => 200,
            "monolog" => [
                "title" => "File deleted",
                "message" => "File has been moved to trash"
            ]
        ]);
    }

    public function mkdir(Request $request)
    {
        File::makeDirectory(public_path("media/$request->new_dir"));

        return response()->json([
            "status" => 200,
            "monolog" => [
                "title" => "Folder create",
                "message" => "New folder has been created",
                "target" => $request->new_dir
            ]
        ]);
    }

    public function renameDir(Request $request)
    {
        File::move(public_path("media/$request->current"), public_path("media/$request->rename"));

        $files = Media::where('folder', '<>', "$request->current%")->get();

        foreach ($files as $file) {
            $file->url = str_replace($request->current, $request->rename, $file->url);
            $file->folder = str_replace($request->current, $request->rename, $file->folder);
            $file->save();
        }

        return response()->json([
            "status" => 200,
            "monolog" => [
                "title" => "Folder renamed",
                "message" => "Folder has been renamed"
            ]
        ]);
    }

    public function rmdir(Request $request)
    {
        if($request->folder_name == "") return response()->json([
            "status" => 403,
            "monolog" => [
                "title" => "Protected folder",
                "message" => "Selected folder could not be deleted, insufficient permission"
            ]
        ]);

        $files = Media::where('folder', 'LIKE', "$request->folder_name%")->get();

        foreach($files as $file) {
            $file->delete();
        }

        File::deleteDirectory(public_path("media/$request->folder_name"));

        return response()->json([
            "status" => 200,
            "monolog" => [
                "title" => "Folder deleted",
                "message" => "Folder and it's content have been permanently deleted",
                "dir_name" => $request->folder_name
            ]
        ]);
    }

    function formatBytes($size, $precision = 2)
    {
        $base = log($size, 1024);
        $suffixes = array('Bytes', 'KB', 'MB', 'GB', 'TB');

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
