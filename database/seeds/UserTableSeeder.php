<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->delete();

        \ChatApp\User::create([
            'name' => 'Kareem',
            'email' => 'karrem@gmail.com',
            'password' => bcrypt('123456'),
        ]);

        \ChatApp\User::create([
            'name' => 'Mohamed',
            'email' => 'mohamed@gmail.com',
            'password' => bcrypt('123456'),
        ]);
    }
}
