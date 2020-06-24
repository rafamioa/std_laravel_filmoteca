<?php

namespace App\Http\Controllers;

use App\Ator;
use App\Pais;
use Illuminate\Http\Request;

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
}
