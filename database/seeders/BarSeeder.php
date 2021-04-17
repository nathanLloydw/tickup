<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bars')->insert([
            'event_id' => 1,
            'bar_name' => 'Main Bar',
            'food'=>1,
            'drink'=>1,
            'location'=>'Enterence',
            'size'=>3,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);

        DB::table('bars')->insert([
            'event_id' => 1,
            'bar_name' => 'Drinks Bar',
            'food'=>0,
            'drink'=>1,
            'location'=>'East',
            'size'=>2,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);

        DB::table('bars')->insert([
            'event_id' => 2,
            'bar_name' => 'Moon Bar',
            'food'=>1,
            'drink'=>1,
            'location'=>'Moon',
            'size'=>13,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);

        DB::table('bars')->insert([
            'event_id' => 2,
            'bar_name' => 'Moon Drinks Bar',
            'food'=>0,
            'drink'=>1,
            'location'=>'Moon',
            'size'=>6,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);

        DB::table('bars')->insert([
            'event_id' => 2,
            'bar_name' => 'Moon Food Bar',
            'food'=>1,
            'drink'=>0,
            'location'=>'Moon',
            'size'=>5,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
    }
}
