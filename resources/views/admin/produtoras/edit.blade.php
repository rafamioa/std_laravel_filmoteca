@extends('admin.base.base')

@section('conteudo')

<div class="row">
    <div class="col-11">
        <h1>Editar produtora: <b>{{$produtora->nome}}</b></h1>
    </div>
    <div class="col-1">
        <a href="{{ route('produtoras.index') }}" class="btn btn-info  ml-auto">Lista</a>
    </div>
</div>
<hr>

<form action="{{ route('produtoras.update') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method("PUT")
<input type="hidden" name="id" value={{$produtora->id}} class="form-control">
    <div class="form-group">
        <label for="nome" class="font-weight-bold">Nome</label>
    <input type="text" name="nome" class="form-control {{($errors->has('nome') ? 'is-invalid' : '' )}}" placeholder="Digite o nome da produtora" value={{ $produtora->nome }}>
        <div class="invalid-feedback">
           {{$errors->first('nome')}}
        </div>
    </div>
    <div class="form-group">
        <label for="historia" class="font-weight-bold">História</label>
        <textarea name="historia" id="" cols="30" rows="5" class="form-control {{($errors->has('historia') ? 'is-invalid' : '' )}}" placeholder="Informe a breve história à produtora">{{$produtora->historia}}
        </textarea>
        <div class="invalid-feedback">
            {{$errors->first('historia')}}
         </div>
    </div>
    <div class="row">
        <div class="form-group col-3">
            <label for="data_fundacao" class="font-weight-bold">Data de Fundação</label>
            <input type="date" name="data_fundacao" id="data_fundacao" class="form-control {{($errors->has('data_fundacao') ? 'is-invalid' : '' )}}" value={{$produtora->data_fundacao}}>
            <div class="invalid-feedback">
                {{$errors->first('data_fundacao')}}
            </div>
        </div>
        <div class="col-3">
            <label for="imagem" class="font-weight-bold">Upload da Imagem</label>
            <input type="file" name="imagem" class="form-control text-white bg-danger">
        </div>
    </div>
    <div class="form-group">
        <button class="btn btn-primary">Atualizar</button>
    </div>

</form>

@endsection