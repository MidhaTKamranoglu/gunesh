<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRullerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
       public function up()
    {
        Schema::create('ruller', function (Blueprint $table) {
            $table->increments('id');
             $table->integer('group_id')->unsigned();
            $table->foreign('group_id')->references('id')->on('group')->onDelete('cascade')->onUpdate('cascade');
            $table->string('name');
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('date');
            $table->text('about');
            $table->text('img');
            $table->integer('type');
            $table->integer('mobile');
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
        Schema::drop('ruller');
    }
}
