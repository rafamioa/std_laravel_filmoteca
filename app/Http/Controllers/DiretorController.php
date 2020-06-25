<?php

namespace App\Http\Controllers;

use App\Diretor;
use Illuminate\Http\Request;

class DiretorController extends Controller
{
    public function index(){
        $diretores = Diretor::with('pais')->paginate(5);
        return view('admin.diretores.index', ['diretores'=>$diretores]);
    }
}
