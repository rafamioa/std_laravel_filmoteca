@extends('admin.base.base')

@section('conteudo')

<div class="my-3">
    <h1>Cadastro de produtora</h1>
    <hr>
</div>
<form action="{{ route('produtoras.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" name="nome" class="form-control" placeholder="Digite o nome da produtora">
    </div>
    <div class="form-group">
        <button class="btn btn-primary">Cadastrar</button>
    </div>
</form>

@endsection