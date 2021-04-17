<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'product_name' => 'Vodka',
            'base_price' => 1.20,
            'cost_price'=>0.80,
            'stock'=>3,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);

        DB::table('products')->insert([
            'product_name' => 'Whiskey',
            'base_price' => 1.20,
            'cost_price'=>0.80,
            'stock'=>7,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);

        DB::table('products')->insert([
            'product_name' => 'Fanta',
            'base_price' => 1.50,
            'cost_price'=>0.90,
            'stock'=>3,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);

        DB::table('products')->insert([
            'product_name' => 'Burger & Chips',
            'base_price' => 2.20,
            'cost_price'=>1.80,
            'stock'=>13,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);

        DB::table('products')->insert([
            'product_name' => 'Fish & Chips',
            'base_price' => 3.20,
            'cost_price'=>2.80,
            'stock'=>32,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);

        DB::table('products')->insert([
            'product_name' => 'Curry',
            'base_price' => 2.50,
            'cost_price'=>2.00,
            'stock'=>13,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
    }
}
