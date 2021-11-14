<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PlacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('places', function(Blueprint $table) {
            $table->bigIncrements('place_id');
            $table->unsignedBigInteger('popularity_id');
            $table->unsignedBigInteger('subscription_id');
            $table->string('name');
            $table->string('address');
            $table->bigInteger('space');
            $table->string('mobile');
            $table->string('email');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('places');
    }
}
