<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PopularityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('popularity', function(Blueprint $table) {
            $table->bigIncrements('popularity_id');
            $table->bigInteger('total_likes');
            $table->bigInteger('total_dislikes');
            $table->bigInteger('total_views');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('popularity');
    }
}
