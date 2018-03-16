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
        DB::table('users')->insert([
            "name" => "Sandip Bhuyan",
            "email" => "sandipbhuyan@gmail.com",
            "profile_img" => "",
            "password" => Hash::make("11111"),
            "address" => "cet",
            "username" => "sandip",
            "super_Admin" => 1,
            "phone" => 7032040642,
            "last_login" => "28/2/2018",
        ]);
    }
}
