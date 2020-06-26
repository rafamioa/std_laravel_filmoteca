<?php

namespace App\Http\Controllers;

use App\Pais;
use App\Diretor;
use Illuminate\Http\Request;

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

    public function store(Request $request){
        $dados = $request->all();
        Diretor::create($dados);
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

    public function update(Request $request){
        $diretor = Diretor::find($request->id);
        $diretor->nome = $request->nome;
        $diretor->biografia = $request->biografia;
        $diretor->idade = $request->idade;
        $diretor->data_nascimento = $request->data_nascimento;
        $diretor->pais_id = $request->pais_id;
        $diretor->save();
        return redirect()->action('DiretorController@index');
    }

}
