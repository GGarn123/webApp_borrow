<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Admin;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'name'=>'admin',
            'email'=>'admin@gmail.com',
            'password'=>Hash::make('123456')
        ]);
        // \App\Models\User::factory(10)->create();
    }
}
