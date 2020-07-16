<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriaTabelaProdutoras extends Migration
{
    public function up()
    {
        Schema::create('produtoras', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->text('historia', 250);
            $table->date('data_fundacao');
            $table->string('imagem')->nullable();
        });
    }


    public function down()
    {
        Schema::dropIfExists('produtoras');
    }
}
