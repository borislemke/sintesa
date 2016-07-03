<?php

use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $json = \File::get(storage_path('json/pages.json'));
        $collection = json_decode($json);

        foreach ($collection as $page) {
            \App\Paper::create([
                'title' => json_encode($page->title),
                'bodyclass' => isset($page->bodyclass) ? $page->bodyclass : "",
                'meta' => json_encode($page->meta),
                'url' => $page->url,
                'layout' => $page->layout,
                'user_id' => 1,
                'status' => $page->status,
                 'content' => json_encode($page->content),
                'navigation_id' => 1
            ]);
        }

    }
}
