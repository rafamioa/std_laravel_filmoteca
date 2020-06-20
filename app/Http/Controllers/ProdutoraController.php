<?php

namespace App\Http\Controllers;

use App\Produtora;
use Illuminate\Http\Request;

class ProdutoraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(Request $request)
    {
        $dados = $request->all();
        Produtora::create($dados);
        return redirect()->action('ProdutoraController@create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Produtora  $produtora
     * @return \Illuminate\Http\Response
     */
    public function show(Produtora $produtora)
    {
        //
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
