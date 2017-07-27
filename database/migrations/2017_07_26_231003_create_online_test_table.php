<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOnlineTestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
    {
        Schema::create('online_test', function (Blueprint $table) {
            $table->increments('id');
         
            $table->string('title');
            $table->string('a');
            $table->string('b');
            $table->string('c')->nullable();
            $table->string('d')->nullable();
            $table->string('answer')->nullable();
            $table->rememberToken();
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
        Schema::drop('online_test');
    }
}
