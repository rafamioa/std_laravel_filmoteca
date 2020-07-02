<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SexoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sexos')->insert(['sexo' => 'Feminino']);
        DB::table('sexos')->insert(['sexo' => 'Masculino']);
    }
}
