<?php

use Illuminate\Database\Seeder;

class PaisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('paises')->insert(['nome' =>  'Brasil']);
        DB::table('paises')->insert(['nome' =>  'Estados Unidos']);
        DB::table('paises')->insert(['nome' =>  'Espanha']);
        DB::table('paises')->insert(['nome' =>  'Argentina']);
        DB::table('paises')->insert(['nome' =>  'França']);
        DB::table('paises')->insert(['nome' =>  'Itália']);
    }
}
