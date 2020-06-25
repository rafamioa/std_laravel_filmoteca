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
        DB::table('atores')->insert([
            'nome' => 'Nicole Kidman',
            'biografia' => 'À época de seu nascimento, a família morava no Havaí, tendo logo se mudado para Washington, DC; quando a pequena Nicole tinha três anos, os Kidman voltaram para Sydney, onde ela cresceu e começou a trabalhar como atriz nos anos 80.',
            'idade' => 53,
            'data_nascimento' => '1967-06-20', 
            'pais_id'=> 2
        ]);

        DB::table('atores')->insert([
            'nome' => 'Tom Cruise',
            'biografia'=>'É um ator e produtor de cinema americano. Listado pela revista Forbes como a celebridade mais popular de 2006, foi indicado por três vezes para o Oscar e venceu três Globos de Ouro. ',
            'idade' => 57,
            'data_nascimento' => '1962-07-03', 
            'pais_id'=> 2
        ]);

       

    }
}
