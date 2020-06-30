@extends('admin.base.base')

@section('titulo', 'Cadastro produtora')

@section('conteudo')

@section('cabecalho', 'Cadastro produtora')


@isset($mensagem)
<div class="col-12">
<p class="alert alert-success">{{$mensagem}}</p>
</div>
@endisset

<form action="{{ route('produtoras.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="nome" class="font-weight-bold">Nome</label>
    <input type="text" name="nome" class="form-control {{($errors->has('nome') ? 'is-invalid' : '' )}}" placeholder="Digite o nome da produtora" value={{ old('nome')}}>
        <div class="invalid-feedback">
           {{$errors->first('nome')}}
        </div>
    </div>
    <div class="form-group">
        <label for="historia" class="font-weight-bold">História</label>
        <textarea name="historia" id="" cols="30" rows="5" class="form-control {{($errors->has('historia') ? 'is-invalid' : '' )}}" placeholder="Informe a breve história à produtora">{{ old('historia')}}</textarea>
        <div class="invalid-feedback">
            {{$errors->first('historia')}}
         </div>
    </div>
    <div class="row">
        <div class="form-group col-3">
            <label for="data_fundacao" class="font-weight-bold">Data de Fundação</label>
            <input type="date" name="data_fundacao" id="data_fundacao" class="form-control {{($errors->has('data_fundacao') ? 'is-invalid' : '' )}}" value={{ old('data_fundacao')}}>
            <div class="invalid-feedback">
                {{$errors->first('data_fundacao')}}
            </div>
        </div>
        <div class="form-group col-3">
            <label for="imagem" class="font-weight-bold">Upload da imagem</label>
            <input type="file" name="imagem" class="form-control bg-danger text-white"> 
        </div>
    </div>
    <div class="form-group">
        <button class="btn btn-danger">Cadastrar</button>
    </div>
</form>

@endsection