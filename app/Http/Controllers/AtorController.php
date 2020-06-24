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
}
