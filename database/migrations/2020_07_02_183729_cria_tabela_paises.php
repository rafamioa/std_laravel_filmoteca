<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriaTabelaPaises extends Migration
{
    public function up()
    {
        Schema::create('paises', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
        });
    }


    public function down()
    {
        Schema::drop('paises', function (Blueprint $table) {
            Schema::dropIfExists('paises');
        });
    }
}
