<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {

            $table->bigIncrements('user_id');
            $table->unsignedBigInteger('status_id');
            $table->unsignedBigInteger('group_id');
            $table->unsignedBigInteger('subscription_id');
            $table->string('name');
            $table->string('surname');
            $table->string('genre');
            $table->string('mobile');
            $table->string('email');
            $table->string('address');
            $table->bigInteger('investment');
            $table->string('requirements');
            $table->bigInteger('user_likes');
            $table->bigInteger('user_dislikes');
            $table->bigInteger('user_views');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
