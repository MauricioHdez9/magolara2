<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIncidentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incidents', function (Blueprint $table) {
            $table->increments('id');
            $table->string('description');        
            $table->string('severity',1);           
            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('categories');
            
            $table->integer('level_id')->unsigned();
            $table->foreign('level_id')->references('id')->on('levels');
            
            
            $table->integer('client_id')->unsigned();
            $table->foreign('client_id')->references('id')->on('users');    
            
            $table->integer('support_id')->unsigned();
            $table->foreign('support_id')->references('id')->on('users');
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
        Schema::dropIfExists('incidents');
    }
}
