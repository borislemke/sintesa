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
        $files = File::allFiles(public_path("media"));

        foreach($files as $file) {
            File::put(storage_path('json/file_spec.json'), json_encode(pathinfo($file))); break;
            /*
            \App\Media::create([
                "title" => $file->,
                "url" => "",
                "filename" => "",
                "type" => "",
                "size" => "",
                "dimension" => "",
                "caption" => "",
                "description" => "",
                "alt_text" => ""
            ]);
            */
        }
    }
}
