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
        return view('admin.produtoras.list', ['produtoras' => $produtoras]);
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
        Produtora::create($request->validated());
        $mensagem = 'Salvo com sucesso';
        return view('admin.produtoras.create')->with(['mensagem' => $mensagem]);
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
    public function edit(Produtora $produtora)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Produtora  $produtora
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produtora $produtora)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Produtora  $produtora
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produtora $produtora)
    {
        //
    }
}
