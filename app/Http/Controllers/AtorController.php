<?php

namespace App\Http\Controllers;

use App\Ator;
use App\Pais;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AtorController extends Controller
{
    public function index(){
        $atores = Ator::with('pais')->paginate(5);
        return view('admin.atores.index', ['atores'=>$atores]);
    }

    public function create(){
        $paises = Pais::all();
        return view('admin.atores.create', ['paises' => $paises]);
    }

    public function store(Request $request){
        $dados = $request->all();
        Ator::create($dados);
        return redirect()->action('AtorController@index');
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

    public function update(Request $request){
        $ator = Ator::find($request->id);
        $ator->nome = $request->nome;
        $ator->biografia = $request->biografia;
        $ator->idade = $request->idade;
        $ator->data_nascimento = $request->data_nascimento;
        $ator->pais_id = $request->pais_id;
        $ator->save();
        return redirect()->action('AtorController@index');
    }

    public function delete(Request $request){
        $ator = Ator::find($request->id);
        $ator->delete();
        return redirect()->action('AtorController@index');
    }

}
