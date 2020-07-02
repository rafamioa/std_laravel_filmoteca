<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriaTabelaFilmesAtores extends Migration
{
    public function up()
    {
        Schema::create('filmes_atores', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('filme_id');
            $table->unsignedInteger('ator_id');

            $table->foreign('filme_id')->references('id')->on('filmes');
            $table->foreign('ator_id')->references('id')->on('atores');          
        });
    }

 
    public function down()
    {
        Schema::dropIfExists('filmes_atores');
    }
}
