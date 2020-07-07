<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(ClassificacaoTableSeeder::class);
        $this->call(SexoTableSeeder::class);
        $this->call(PaisTableSeeder::class);
        $this->call(ProdutoraTableSeeder::class);
        $this->call(GeneroTableSeeder::class); 
        $this->call(DiretorTableSeeder::class); 
        $this->call(AtorTableSeeder::class);   
        $this->call(FilmeTableSeeder::class);  
        $this->call(FilmesGenerosTableSeeder::class); 
        $this->call(FilmesDiretoresTableSeeder::class);  
               
    }
}
