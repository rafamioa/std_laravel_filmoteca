<?php

namespace App\Http\Controllers;

use App\Pais;
use App\Filme;
use App\Genero;
use App\Produtora;
use App\Classificacao;
use Illuminate\Http\Request;

class FilmeController extends Controller
{
    public function create(){
        $generos = Genero::orderBy('nome', 'ASC')->get();
        $produtoras = Produtora::orderBy('nome', 'ASC')->get();
        $classificacoes = Classificacao::all();
        $paises = Pais::orderBy('nome', 'ASC')->get();
        return view('admin.filmes.create',[
            'paises' => $paises,
            'classificacoes' => $classificacoes,
            'generos' => $generos,
            'produtoras' => $produtoras
        ]);
    }

    public function store(Request $request){
       $generos = $request->get('genero_id');
       $filme = Filme::create($request->all());
       foreach($generos as $id){
           $genero = Genero::find($id);
           $filme->generos()->save($genero);
       }

       return redirect()->action('FilmeController@index');
       
    }
}
