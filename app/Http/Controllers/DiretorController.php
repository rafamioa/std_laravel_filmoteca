<?php

namespace App\Http\Controllers;

use App\Pais;
use App\Diretor;
use Illuminate\Http\Request;
use App\Http\Requests\DiretorRequest;
use Illuminate\Support\Facades\Storage;

class DiretorController extends Controller
{
    public function index(){
        $diretores = Diretor::with('pais')->paginate(5);
        return view('admin.diretores.index', ['diretores'=>$diretores]);
    }

    public function create(){
        $paises = Pais::orderBy('nome', 'ASC')->get();
        return view('admin.diretores.create',['paises'=>$paises]);
    }

    public function store(DiretorRequest $request){
        
        Diretor::create([
            'nome' => $request->nome,
            'idade' =>$request->idade,
            'data_nascimento' => $request->data_nascimento,
            'biografia' => $request->biografia,
            'imagem' => $request->file('imagem')->store('public/diretores'),
            'pais_id' => $request->pais_id
        ]);
        return redirect()->action('DiretorController@index');
        
    }
    
    public function show(Request $request){
        $diretor = Diretor::with('pais')->find( $request->id);
        return view('admin.diretores.show',['diretor'=>$diretor]);
    }

    public function edit(Request $request){
        $diretor = Diretor::with('pais')->find( $request->id);
        $paises = Pais::orderBy('nome', 'ASC')->get();
        return view('admin.diretores.edit',['diretor'=>$diretor, 'paises'=>$paises]);
    }

    public function update(DiretorRequest $request){
        $diretor = Diretor::find($request->id);
        $diretor->nome = $request->nome;
        $diretor->biografia = $request->biografia;
        $diretor->idade = $request->idade;
        $diretor->data_nascimento = $request->data_nascimento;
        $diretor->pais_id = $request->pais_id;
        if($request->file('imagem') != NULL){
            Storage::delete($diretor->imagem);
            $diretor->imagem = $request->file('imagem')->store('public/diretores');
        }
        $diretor->save();
        return redirect()->action('DiretorController@index');
    }

    public function delete(Request $request){
        $diretor = Diretor::find($request->id);
        Storage::delete($diretor->imagem);
        $diretor->delete();
        return redirect()->action('DiretorController@index');
    }

}
