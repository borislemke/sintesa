<?php

use Illuminate\Database\Seeder;

class HotelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Hotel::create([
            'title' => 'The Sintesa Jimbaran',
            'status' => 1,
            'user_id' => 1
        ]);
    }
}
