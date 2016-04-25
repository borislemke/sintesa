<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNavigationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('navigation', function (Blueprint $table) {
            $table->increments('id');
            $table->string('url');
            $table->string('title');
            $table->string('tooltip');
            $table->string('group');
            $table->integer('order');
            $table->integer('parent');
            $table->boolean('open_in_new');
            $table->boolean('no_link');
            $table->boolean('hide');
            $table->enum('url_type', ['internal', 'external']); // internal/external

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
        //
        Schema::drop('navigation');
    }
}
