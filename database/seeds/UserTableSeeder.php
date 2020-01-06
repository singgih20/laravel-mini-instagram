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
        \App\User::create([
            "name" => "Singgih",
            "email" => "singgih.aji2010@gmail.com",
            "password" => "12345678",
            "title" => Str::title(10),
            "description" => Str::random(10),
            "url" => 'www.' . Str::random(10) . '.com',
            "avatar" => "joker.png"
        ]);
    }
}
