<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class MediaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $trash_files = File::allFiles(storage_path("trashed_files"));

        foreach ($trash_files as $file) {
            File::delete($file);
        }

        $files = File::allFiles(public_path("media"));

        foreach($files as $file) {

            $fileInfo = pathinfo($file);
            $url = str_replace(public_path('media'), '', $fileInfo["dirname"]) . "/" . $fileInfo["basename"];
            \App\Media::create([
                "title" => $fileInfo["basename"],
                "url" => ltrim($url, "/"),
                "name" => $fileInfo["basename"],
                "folder" => trim(str_replace($fileInfo["basename"], '', $url), "/"),
                "type" => $fileInfo["extension"],
                "size" => filesize($file),
                "dimension" => getimagesize($file)[0] . " x " . getimagesize($file)[1],
                "caption" => $fileInfo["basename"],
                "description" => $fileInfo["basename"],
                "alt_text" => $fileInfo["basename"]
            ]);
        }
    }
}
