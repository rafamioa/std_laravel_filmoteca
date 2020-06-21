<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColunasHistoriaEDataFundacaoProdutoras extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('produtoras', function (Blueprint $table) {
            $table->text('historia', 250)->after('nome');
            $table->date('data_fundacao')->after('historia');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('produtoras', function (Blueprint $table) {
            $table->dropColumn('historia');
            $table->dropColumn('data_fundacao');
        });
    }
}
