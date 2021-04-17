<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->bigIncrements('event_id');
            $table->string('event_name');
            $table->string('event_venue', 45);
            $table->string('event_organiser', 45);
            $table->string('event_description');
            $table->date('event_date');
            $table->time('event_start_time');
            $table->time('event_finish_time')->nullable();
            $table->integer('event_age_limit')->nullable();
            $table->string('event_country', 45);
            $table->string('event_address', 45);
            $table->string('event_postcode', 45);
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
            $table->string('event_banner', 45)->nullable();
            $table->integer('event_time_zone')->nullable();
            $table->string('currency', 45);
            $table->integer('transaction_fee');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
