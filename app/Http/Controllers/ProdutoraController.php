<?php

namespace App\Http\Controllers;

use App\Produtora;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\ProdutoraRequest;
use Illuminate\Support\Facades\Storage;

class ProdutoraController extends Controller
{
    public function index()
    {
        $produtoras = Produtora::paginate(5);
        return view('admin.produtoras.index', ['produtoras' => $produtoras]);
    }

    public function create()
    {
        return view('admin.produtoras.create');
    }

 
    public function store(ProdutoraRequest $request)
    {
        Produtora::create([
            'nome' => $request->nome,
            'data_fundacao' => $request->data_fundacao,
            'historia' => $request->historia,
            'imagem' => ($request->file('imagem') === null)? null: $request->file('imagem')->store('public/produtoras'),
        ]);
        return redirect()->action('ProdutoraController@index');
    }


    public function show(Request $request)
    {
        $produtora = Produtora::find($request->id);
        return view('admin.produtoras.show')->with(['produtora' => $produtora]);
    }

 
    public function edit(Request $request)
    {
        $produtora = Produtora::find($request->id);
        return view('admin.produtoras.edit', ['produtora' => $produtora]);
    }

    public function update(ProdutoraRequest $request)
    {
       $p_resultado = Produtora::find($request->id);
      
       $p_resultado->nome = $request->nome;
       $p_resultado->historia = $request->historia;
       $p_resultado->data_fundacao = $request->data_fundacao;
       if($request->file('imagem') != NULL){
        Storage::delete($request->imagem);
        $p_resultado->imagem = $request->file('imagem')->store('public/produtoras');
    }
       $p_resultado->save();
       return redirect()->action('ProdutoraController@index');
    }

 
    public function destroy(Request $request)
    {
       $produtora = Produtora::find($request->id);  
       Storage::delete($produtora->imagem);
       $produtora->delete();   
       return redirect()->action('ProdutoraController@index'); 
        
    }
}
