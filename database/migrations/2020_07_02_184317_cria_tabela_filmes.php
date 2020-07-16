<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriaTabelaFilmes extends Migration
{
    public function up()
    {
        Schema::create('filmes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo');
            $table->text('sinopse');
            $table->string('duracao');
            $table->date('data_lancamento');
            $table->string('imagem')->nullable();
            $table->unsignedInteger('classificacao_id');
            $table->unsignedInteger('pais_id');
            $table->unsignedInteger('produtora_id');
            
            $table->foreign('classificacao_id')->references('id')->on('classificacoes')->onDelete('cascade');
            $table->foreign('pais_id')->references('id')->on('paises')->onDelete('cascade');
            $table->foreign('produtora_id')->references('id')->on('produtoras')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('filmes');
    }
}
