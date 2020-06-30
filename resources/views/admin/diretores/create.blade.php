@extends('admin.base.base')

@section('conteudo')

<div class="row">
    <div class="col-11">
        <h1>Cadastro diretor</h1>
    </div>
    <div class="col-1">
        <a href="{{ route('diretores.index') }}" class="btn btn-danger ml-auto">
            <i class="fa fa-arrow-left"> </i>
            Voltar
        </a>
    </div>
</div>
<hr>

@componenteMensagemValidacao
@endcomponenteMensagemValidacao

<form action="{{ route('diretores.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
        <label for="nome" class="font-weight-bold">Nome</label>
        <input type="text" class="form-control" name="nome" placeholder="Informe o nome completo" value={{old('nome')}}>
    </div>
    <div class="form-group">
        <label for="nome" class="font-weight-bold">Biografia</label>
        <textarea name="biografia" id="" cols="30" rows="5" class="form-control" placeholder="Informe a biografia">{{old('biografia')}}</textarea>
    </div>

    <div class="row">
        <div class="form-group col-3">
            <label for="" class="font-weight-bold">Idade</label>
            <input type="number" class="form-control" name="idade" step="1" placeholder="Informe a idade" value={{old('idade')}}>
        </div>
        <div class="form-group col-3">
            <label for="data_nascimento" class="font-weight-bold">Data de Nascimento</label>
            <input type="date" name="data_nascimento" id="data_nascimento" class="form-control" value={{old('data_nascimento')}}>
        </div>
        <div class="form-group col-3">
            <label for="pais" class="font-weight-bold">País de Origem</label>
            <select name="pais_id" class="form-control" value={{old('pais_id')}}>
                @foreach($paises as $p)
                <option value="{{$p->id}}">{{$p->nome}}</option>
                @endforeach
            </select>
        </div> 
        <div class="form-group col-3">
            <label for="imagem" class="font-weight-bold">Upload foto</label>
            <input type="file" name="imagem" class="form-control bg-danger text-white " value={{old('imagem')}}>
        </div>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-danger">
            <i class="fa fa-save"></i>
            Cadastrar
        </button>
    </div>
</form>

@endsection