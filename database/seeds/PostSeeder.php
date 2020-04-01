<?php

use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::all()->each(function($u) {
            factory('App\Post')->create([
                'user_id' => $u->id
            ]);
        });
    }
}
