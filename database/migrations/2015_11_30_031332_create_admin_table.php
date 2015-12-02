<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('administrator', function (Blueprint $table) {
            $table->increments('id');

            //Developer Created
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')
                ->references('id')
                ->on('users');
            $table->string('fname');
            $table->string('lname');
            $table->string('home_street');
            $table->string('home_city');
            $table->string('home_state');
            $table->string('home_zip');
            $table->string('home_phone');
            $table->integer('security_level');
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
        Schema::drop('administrator');
    }
}
