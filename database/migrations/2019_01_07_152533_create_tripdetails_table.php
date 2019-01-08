<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTripdetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tripdetails', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('trips_id');
            $table->text('name');
            $table->char('pic');
            $table->char('introduced1');
            $table->char('introduced2');
            $table->char('introduced3');
            $table->char('introduced4');
            $table->char('introduced5');
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
        Schema::dropIfExists('tripdetails');
    }
}
