<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
        DB::table('users')->insert([
            'name' => 'Nathan',
            'email' => 'Nathan@gmail.com',
            'password' => Hash::make('password'),
            'profile_photo_path'=>''
        ]);

        DB::table('users')->insert([
            'name' => 'Dan',
            'email' => 'Dan@gmail.com',
            'password' => Hash::make('password'),
            'profile_photo_path'=>''
        ]);

        DB::table('users')->insert([
            'name' => 'Jason',
            'email' => 'Jason@gmail.com',
            'password' => Hash::make('password'),
            'profile_photo_path'=>''
        ]);
    }
}
