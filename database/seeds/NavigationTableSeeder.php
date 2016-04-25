<?php

use Illuminate\Database\Seeder;

class NavigationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $nav = json_decode(File::get(storage_path('json/nav.json')));

        foreach ($nav as $n) {
            \App\Nav::create([
                'url' => $n->url,
                'group' => "sintesa",
                'title' => $n->title,
                'tooltip' => $n->title,
                'order' => $n->order,
                'parent' => $n->parent,
                'url_type' => $n->url_type,
                'open_in_new' => 0,
                'no_link' => 0,
                'hide' => 0
            ]);
        }
    }
}
