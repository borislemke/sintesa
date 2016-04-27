<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\User::create([
            'username' => 'borislemke',
            'email' => 'boris@fleava.com',
            'password' => bcrypt('fleava'),
            'remember_token' => str_random(10),
            'role_id' => 1,
            'firstname' => 'Boris',
            'lastname' => 'Lemke',
            'image' => 'http://gravatar.com/avatar/7f4ec37467f2f7db6fffc7b4d2cc8dc2?s=200&d=https%3A%2F%2Fscotch.io%2Fwp-content%2Fthemes%2Fscotchpress%2Fimg%2Flogo-large.png',
            'active' => 1
        ]);
    }
}
