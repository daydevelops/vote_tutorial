<?php

use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Post::all()->each(function($p) {
            factory('App\Comment',10)->create([
                'post_id' => $p->id,
                'user_id' => \App\User::all()->random()->id
            ]);
        });
    }
}
