<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        // \App\Models\Post::factory(10)->create();
        // \App\Models\Comment::factory(15)->create();
        // \App\Models\Image::factory(5)->create();
        // \App\Models\Tag::factory(20)->create();
    }
}
