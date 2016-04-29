<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('url')->unique();
            $table->string('title');
            $table->string('bodyclass');
            $table->string('meta');
            $table->longText('content');
            $table->string('layout');
            $table->boolean('status');
            $table->integer('user_id');
            $table->integer('navigation_id');
            $table->integer('hotel_id');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pages');
    }
}
