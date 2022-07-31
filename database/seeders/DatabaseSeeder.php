<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Comment;
use App\Models\User;
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
        // \App\Models\User::factory(10)->create();

        $this->call([
            UsersTableSeeder::class,
            PostsTableSeeder::class,
            CommentsTableSeeder::class,
        ]);


        // User::factory(5)->create()->each(function ($user) {
        //     for ($i = 0; $i < 5; $i++) {
        //         $user = Post::factory()->make();
        //         $user = Comment::factory()->make();
        //     }
        // });
    }
}
