<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MyUserHobbies extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('hobbies', function (Blueprint $table) {
            $table->integer('id_user')->unsigned();
            $table->string('hobby_one');
            $table->string('hobby_two')->nullable();

            
            $table->foreign('id_user')->references('id_usuario')->on('usuarios');
            Schema::enableForeignKeyConstraints();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('hobbies');
    }
}
