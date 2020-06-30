<?php

namespace App\Http\Controllers;

use App\Ator;
use App\Pais;
use Illuminate\Http\Request;
use App\Http\Requests\AtorRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class AtorController extends Controller
{
    public function index(){
        $atores = Ator::with('pais')->paginate(5);
        return view('admin.atores.index', ['atores'=>$atores]);
    }

    public function create(){
        $paises = Pais::orderBy('nome', 'ASC')->get();
        return view('admin.atores.create', ['paises' => $paises]);
    }

    public function store(AtorRequest $request){
        $ator = Ator::find($request);
        Ator::create([
            'nome' => $request->nome,
            'biografia' => $request->biografia,
            'idade' => $request->idade,
            'data_nascimento' => $request->data_nascimento,
            'pais_id' => $request->pais_id,
            'imagem' => ($request->file('imagem') === null) ? null : $request->file('imagem')->store('public/atores')
        ]);
        return redirect()->action('AtorController@create');
    }

    public function show(Request $request){
        $ator = Ator::with('pais')->find($request->id);
        return view('admin.atores.show', ['ator' => $ator]);
    }

    public function edit(Request $request){
        $ator = Ator::with('pais')->find($request->id);
        $paises = Pais::all();
        return view('admin.atores.edit',['ator'=>$ator,'paises'=>$paises]);
    }

    public function update(AtorRequest $request){
        $ator = Ator::find($request->id);
        $ator->nome = $request->nome;
        $ator->biografia = $request->biografia;
        $ator->idade = $request->idade;
        $ator->data_nascimento = $request->data_nascimento;
        $ator->pais_id = $request->pais_id;
        if($request->file('imagem') != null){
            ($ator->imagem != null) ? Storage::delete($ator->imagem): null;
            $ator->imagem = $request->file('imagem')->store('public/atores');
        }
        $ator->save();
        return redirect()->action('AtorController@index');
    }

    public function delete(Request $request){
        $ator = Ator::find($request->id);
        Storage::delete($ator->imagem);
        $ator->delete();
        return redirect()->action('AtorController@index');
    }

}
