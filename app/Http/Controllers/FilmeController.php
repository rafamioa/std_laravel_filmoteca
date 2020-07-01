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
    public function index(){
        $filmes = Filme::all();
        return view('admin.filmes.index', ['filmes' => $filmes]);
    }

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
       $filme = Filme::create([
           'titulo' => $request->titulo,
           'sinopse' => $request->sinopse,
           'data_lancamento' => $request->data_lancamento,
           'duracao' => $request->duracao,
           'produtora_id' => $request->produtora_id,
           'pais_id' => $request->pais_id,
           'classificacao_id' => $request->classificacao_id,
           'imagem' => ($request->file('imagem') === null) ? null: $request->file('imagem')->store('public/filmes')
       ]);
       foreach($generos as $id){
           $genero = Genero::find($id);
           $filme->generos()->save($genero);
       }
       return redirect()->action('FilmeController@index');     
    }

    public function show(Request $request){
        $filme = Filme::with(['classificacao', 'generos', 'produtora', 'pais'])->find($request->id)->first();
        return view('admin.filmes.show', ['filme' => $filme]);
    }
}
