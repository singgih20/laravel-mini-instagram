<?php

use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Post::create([
            "user_id" => 1,
            "caption" => "Logo ead",
            "image" => "EAD.png"
        ]);
    }
}
