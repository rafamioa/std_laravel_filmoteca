<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            'data_falecimento' => null,
            'pais_id'=> 2,
            'sexo_id' => 1,
        ]);

        DB::table('atores')->insert([
            'nome' => 'Tom Cruise',
            'biografia'=>'É um ator e produtor de cinema americano. Listado pela revista Forbes como a celebridade mais popular de 2006, foi indicado por três vezes para o Oscar e venceu três Globos de Ouro. ',
            'idade' => 57,
            'data_nascimento' => '1962-07-03', 
            'data_falecimento' => null,
            'pais_id'=> 2,
            'sexo_id' => 2,
        ]);

        DB::table('atores')->insert([
            'nome' => 'Keanu Reeves',
            'biografia'=>'Keanu Charles Reeves é um ator, diretor, filantropo e produtor cinematográfico naturalizado canadense, nascido no Líbano. É considerado um dos melhores produtores cinematográficos do mundo.',
            'idade' => 55,
            'data_nascimento' => '1964-02-09', 
            'data_falecimento' => null,
            'pais_id'=> 2,
            'sexo_id' => 2,
        ]);

        DB::table('atores')->insert([
            'nome' => 'Monica Bellucci',
            'biografia'=>'Monica Anna Maria Bellucci é uma atriz e ex-modelo internacional italiana.',
            'idade' => 55,
            'data_nascimento' => '1964-09-30', 
            'data_falecimento' => null,
            'pais_id'=> 2,
            'sexo_id' => 1,
        ]);

        DB::table('atores')->insert([
            'nome' => 'Vincent Cassel',
            'biografia'=>'É um ator francês, filho da jornalista Sabine Liquite e do também ator Jean-Pierre Cassel.',
            'idade' => 53,
            'data_nascimento' => '1966-11-23', 
            'data_falecimento' => null,
            'pais_id'=> 2,
            'sexo_id' => 2,
        ]);

        DB::table('atores')->insert([
            'nome' => 'Matt Damon',
            'biografia'=>'Matthew Paige Damon é um ator estadunidense. Alcançou o estrelato com Gênio Indomável (Good Will Hunting), que escreveu e protagonizou juntamente com o seu amigo, Ben Affleck.',
            'idade' => 49,
            'data_nascimento' => '1970-10-08', 
            'data_falecimento' => null,
            'pais_id'=> 2,
            'sexo_id' => 2,
        ]);
    }
}
