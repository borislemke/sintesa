<?php

use Illuminate\Database\Seeder;

class FootersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $footers = json_decode(File::get(storage_path('json/footers.json')));

        foreach ($footers as $foot) {
            \App\Footer::create([
                "name" => $foot->name,
                "content" => json_encode($foot->data)
            ]);
        }
    }
}
