<?php

namespace App\Http\Controllers;

use App\Produtora;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\ProdutoraRequest;

class ProdutoraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produtoras = Produtora::paginate(5);
        return view('admin.produtoras.index', ['produtoras' => $produtoras]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.produtoras.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProdutoraRequest $request)
    {
        Produtora::create([
            'nome' => $request->nome,
            'data_fundacao' => $request->data_fundacao,
            'historia' => $request->historia,
            'imagem' => $request->file('imagem')->store('public/produtoras'),
        ]);
        return redirect()->action('ProdutoraController@index');
    }

    /**
     * Undocumented function
     *
     * @param Request $request
     * @return void
     */
    public function show(Request $request)
    {
        $produtora = Produtora::find($request->id);
        return view('admin.produtoras.show')->with(['produtora' => $produtora]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Produtora  $produtora
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $produtora = Produtora::find($request->id);
        return view('admin.produtoras.edit', ['produtora' => $produtora]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Produtora  $produtora
     * @return \Illuminate\Http\Response
     */
    public function update(ProdutoraRequest $produtora)
    {
       $p_resultado = Produtora::find($produtora->id);

       if($p_resultado == null){
            return redirect()->action('ProdutoraController@create');
       }
      
       $p_resultado->nome = $produtora->nome;
       $p_resultado->historia = $produtora->historia;
       $p_resultado->data_fundacao = $produtora->data_fundacao;
       $p_resultado->save();
       return redirect()->action('ProdutoraController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Produtora  $produtora
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $produtora)
    {
       $produtora = Produtora::find($produtora->id);
       
       if($produtora != null){
        $produtora->destroy($produtora->id);
        return redirect()->action('ProdutoraController@index');
       }
       return "Erro ao excluir";  

    }
}
