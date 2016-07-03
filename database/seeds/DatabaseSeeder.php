<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        factory(App\Notif::class, 50)->create();

        $this->call(UsersTableSeeder::class);
        $this->call(PagesTableSeeder::class);
        $this->call(HotelsTableSeeder::class);
        $this->call(RoomsTableSeeder::class);
        $this->call(NavigationTableSeeder::class);
        $this->call(FootersTableSeeder::class);
        $this->call(MediaTableSeeder::class);
        $this->call(SettingsTableSeeder::class);

        Model::reguard();
    }
}
