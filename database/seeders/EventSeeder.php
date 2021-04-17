<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->insert([
            'event_name' => 'House Masters',
            'event_venue' => 'The Williams',
            'event_organiser'=>'',
            'event_description'=>'The Masters of the universe',
            'event_date'=>'2021-04-18',
            'event_start_time'=>'19:00',
            'event_finish_time'=>'24:00',
            'event_age_limit'=>18,
            'event_country'=>'England',
            'event_address'=>'57 Appleby Close',
            'event_postcode'=>'DL1 4AJ',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
            'event_banner'=>'',
            'event_time_zone'=>0,
            'currency'=>'',
            'transaction_fee'=>0.50
        ]);

        DB::table('events')->insert([
            'event_name' => 'Moon Party',
            'event_venue' => 'The Moon',
            'event_organiser'=>'Bob',
            'event_description'=>'Partay On The MoOoOoN!',
            'event_date'=>'2021-04-18',
            'event_start_time'=>'19:00',
            'event_finish_time'=>'24:00',
            'event_age_limit'=>3,
            'event_country'=>'MOON',
            'event_address'=>'MOON',
            'event_postcode'=>'MOON',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
            'event_banner'=>'',
            'event_time_zone'=>0,
            'currency'=>'',
            'transaction_fee'=>0.50
        ]);
    }
}
