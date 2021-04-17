<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bar_products')->insert([
            'bar_id' => 1,
            'product_id' => 1,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);

        DB::table('bar_products')->insert([
            'bar_id' => 1,
            'product_id' => 2,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);

        DB::table('bar_products')->insert([
            'bar_id' => 2,
            'product_id' => 3,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);

        DB::table('bar_products')->insert([
            'bar_id' => 2,
            'product_id' => 4,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);

        DB::table('bar_products')->insert([
            'bar_id' => 3,
            'product_id' => 5,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);

        DB::table('bar_products')->insert([
            'bar_id' => 3,
            'product_id' => 6,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
    }
}
