<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory("App\User")->create([
            'name'=>'admin',
            'email'=>'admin@admin.com'
        ]);
        factory("App\User",10)->create();
    }
}
