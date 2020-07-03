<?php

namespace App\Http\Controllers;

use App\Pais;
use App\Filme;
use App\Genero;
use App\Diretor;
use App\Produtora;
use App\Classificacao;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class FilmeController extends Controller
{
    public function index(){
        $filmes = Filme::with('pais','produtora')->paginate(5);
        return view('admin.filmes.index', ['filmes' => $filmes]);
    }

    public function create(){
        $generos = Genero::orderBy('nome', 'ASC')->get();
        $produtoras = Produtora::orderBy('nome', 'ASC')->get();
        $classificacoes = Classificacao::all();
        $paises = Pais::orderBy('nome', 'ASC')->get();
        $diretores = Diretor::orderBy('nome', 'ASC')->get();
        return view('admin.filmes.create',[
            'paises' => $paises,
            'classificacoes' => $classificacoes,
            'generos' => $generos,
            'produtoras' => $produtoras,
            'diretores' => $diretores
        ]);
    }

    public function store(Request $request){
       
       $filme = Filme::create([
           'titulo' => $request->titulo,
           'sinopse' => $request->sinopse,
           'data_lancamento' => $request->data_lancamento,
           'duracao' => $request->duracao,
           'produtora_id' => $request->produtora_id,
           'pais_id' => $request->pais_id,
           'classificacao_id' => $request->classificacao_id,
           'imagem' => ($request->file('imagem') === NULL) ? null: $request->file('imagem')->store('public/filmes'),
       ]);

       $generos = $request->get('genero_id');
       foreach($generos as $id){
           $genero = Genero::find($id);
           $filme->generos()->save($genero);
       }
       
       $diretores = $request->get('diretor_id');
       foreach($diretores as $id){
            $diretor = Diretor::find($id);
            $filme->diretores()->save($diretor);
        }
       return redirect()->action('FilmeController@index');     
    }

    public function show(Request $request){
        $filme = Filme::with(['classificacao', 'generos', 'produtora', 'pais'])->find($request->id);
        return view('admin.filmes.show', ['filme' => $filme]);
    }

    public function edit(Request $request){

        $filme = Filme::with(['classificacao', 'generos', 'produtora', 'pais'])->find($request->id);

        $generos = Genero::orderBy('nome', 'ASC')->get();
        $produtoras = Produtora::orderBy('nome', 'ASC')->get();
        $classificacoes = Classificacao::all();
        $paises = Pais::orderBy('nome', 'ASC')->get();
        $diretores = Diretor::orderBy('nome', 'ASC')->get();

        return view('admin.filmes.edit', [
            'filme' => $filme,
            'paises' => $paises,
            'classificacoes' => $classificacoes,
            'generos' => $generos,
            'produtoras' => $produtoras,
            'diretores' =>  $diretores,
            'generosDoFilme' => $filme->generosDoFilme,
            'diretoresDoFilme' => $filme->diretoresDoFilme
        ]);  
        
    }

    public function update(Request $request){

        $filme = Filme::find($request->id);

        $filme->titulo = $request->titulo;
        $filme->sinopse = $request->sinopse;
        $filme->data_lancamento = $request->data_lancamento;
        $filme->duracao = $request->duracao;
        $filme->classificacao_id =$request->classificacao_id;
        $filme->pais_id = $request->pais_id;
        $filme->produtora_id = $request->produtora_id;
        if($request->file('imagem') != NULL){
            Storage::delete($filme->imagem);
            $filme->imagem = $request->file('imagem')->store('public/filmes');
        }
        $filme->save();

        $generos = $request->genero_id;       
        $filme->generos()->sync($generos);
        
        $diretores = $request->diretor_id;
        $filme->diretores()->sync($diretores);

        return redirect()->action('FilmeController@index'); 
    }

    public function delete(Request $request){
        $filme = Filme::find($request->id)->first();
        return json_encode($filme);
        $filme->delete();
        return redirect()->action('FilmeController@index');
    }
}
