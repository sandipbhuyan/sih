<?php

use Illuminate\Database\Seeder;

class MailingUser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('mail_users')->insert([
            "name" => "Adam Gilchrist",
            "email"=>"a@gmail.com",
            "join_date"=>"2018-03-01",
            "gender"=>"Male"
        ]);

        DB::table('mail_users')->insert([
            "name" => "Alice Das",
            "email"=>"b@gmail.com",
            "join_date"=>"2018-03-05",
            "gender"=>"Female"
        ]);

        DB::table('mail_users')->insert([
            "name" => "Antonio Diesel",
            "email"=>"c@gmail.com",
            "join_date"=>"2018-03-12",
            "gender"=>"Male"
        ]);

        DB::table('mail_users')->insert([
            "name" => "Arthur Clarke",
            "email"=>"d@gmail.com",
            "join_date"=>"2018-02-01",
            "gender"=>"Male"
        ]);

        DB::table('mail_users')->insert([
            "name" => "DiCaprio Anthony",
            "email"=>"e@gmail.com",
            "join_date"=>"2018-02-01",
            "gender"=>"Male"
        ]);

        DB::table('mail_users')->insert([
            "name" => "Andrew Matt",
            "email"=>"f@gmail.com",
            "join_date"=>"2017-10-01",
            "gender"=>"Male"
        ]);

        DB::table('mail_users')->insert([
            "name" => "Alexander Bell",
            "email"=>"g@gmail.com",
            "join_date"=>"2018-03-14",
            "gender"=>"Male"
        ]);

        DB::table('mail_users')->insert([
            "name" => "Austin Bieber",
            "email"=>"h@gmail.com",
            "join_date"=>"2018-02-14",
            "gender"=>"Male"
        ]);

        DB::table('mail_users')->insert([
            "name" => "Alex Bell",
            "email"=>"i@gmail.com",
            "join_date"=>"2018-03-14",
            "gender"=>"Female"
        ]);

        DB::table('mail_users')->insert([
            "name" => "Aakash Mehta",
            "email"=>"j@gmail.com",
            "join_date"=>"2018-03-14",
            "gender"=>"Male"
        ]);

        DB::table('mail_users')->insert([
            "name" => "Adarsh Hota",
            "email"=>"k@gmail.com",
            "join_date"=>"2018-03-05",
            "gender"=>"Male"
        ]);

        DB::table('mail_users')->insert([
            "name" => "Aaditi Shah",
            "email"=>"l@gmail.com",
            "join_date"=>"2018-03-15",
            "gender"=>"Female"
        ]);

        DB::table('mail_users')->insert([
            "name" => "Aditya Chopra",
            "email"=>"m@gmail.com",
            "join_date"=>"2018-01-14",
            "gender"=>"Male"
        ]);

        DB::table('mail_users')->insert([
            "name" => "Agneyaan Singh",
            "email"=>"n@gmail.com",
            "join_date"=>"2018-03-14",
            "gender"=>"Male"
        ]);

        DB::table('mail_users')->insert([
            "name" => "Aparajita Sarangi",
            "email"=>"o@gmail.com",
            "join_date"=>"2018-01-14",
            "gender"=>"Female"
        ]);

        DB::table('mail_users')->insert([
            "name" => "Aparichit Sinha",
            "email"=>"p@gmail.com",
            "join_date"=>"2018-01-01",
            "gender"=>"Male"
        ]);

        DB::table('mail_users')->insert([
            "name" => "Apoorva Mishra",
            "email"=>"q@gmail.com",
            "join_date"=>"2018-03-14",
            "gender"=>"Female"
        ]);

        DB::table('mail_users')->insert([
            "name" => "Ankita Patel",
            "email"=>"r@gmail.com",
            "join_date"=>"2018-03-16",
            "gender"=>"Female"
        ]);

        DB::table('mail_users')->insert([
            "name" => "Elina Gupta",
            "email"=>"s@gmail.com",
            "join_date"=>"2018-03-14",
            "gender"=>"Female"
        ]);

        DB::table('mail_users')->insert([
            "name" => "Sukanya Singh",
            "email"=>"t@gmail.com",
            "join_date"=>"2018-03-14",
            "gender"=>"Female"
        ]);

    }
}
