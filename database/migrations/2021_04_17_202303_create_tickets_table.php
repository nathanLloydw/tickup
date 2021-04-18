<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->increments('ticket_id');
            $table->integer('event_id');
            $table->string('ticket_type', 45);
            $table->float('ticket_price', 10, 0);
            $table->integer('ticket_capacity');
            $table->float('ticket_booking_fee', 10, 0)->nullable();
            $table->string('ticket_status', 45)->nullable();
            $table->integer('min_per_order')->nullable();
            $table->integer('max_per_order')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tickets');
    }
}
