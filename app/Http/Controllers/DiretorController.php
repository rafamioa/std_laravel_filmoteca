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
}
