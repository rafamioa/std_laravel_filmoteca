<?php

use Illuminate\Database\Seeder;

class AtorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('atores')->insert(['nome' => 'Nicole Kidman', 'idade' => 53,'data_nascimento' => '1967-06-20']);
        DB::table('atores')->insert(['nome' => 'Tom Cruise', 'idade' => 57,'data_nascimento' => '1962-07-03']);
    }
}
