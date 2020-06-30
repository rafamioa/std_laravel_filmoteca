@extends('admin.base.base')

@section('conteudo')

<div class="row">
    <div class="col-11">
        <h1>Editar o diretor: <b>{{$diretor->nome}}</b></h1>
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

<form action="{{ route('diretores.update') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <input type="hidden" name="id" value="{{$diretor->id}}">
    <div class="form-group">
        <label for="nome" class="font-weight-bold">Nome</label>
    <input type="text" class="form-control" name="nome" value="{{$diretor->nome}}" placeholder="Informe o nome completo">
    </div>
    <div class="form-group">
        <textarea name="biografia" cols="30" rows="5" class="form-control" placeholder="Informe a biografia">{{$diretor->biografia}}</textarea>
    </div>

    <div class="row">
        <div class="form-group col-3">
            <label for="" class="font-weight-bold">Idade</label>
            <input type="number" class="form-control" name="idade" min="16" max="110" step="1"  value="{{$diretor->idade}}" placeholder="Informe a idade">
        </div>
        <div class="form-group col-3">
            <label for="data_nascimento" class="font-weight-bold">Data de Nascimento</label>
            <input type="date" name="data_nascimento" id="data_nascimento" class="form-control"  value="{{$diretor->data_nascimento}}">
        </div>
        <div class="form-group col-3">
            <label for="pais" class="font-weight-bold">País de Origem</label>
            <select name="pais_id" class="form-control">
                @foreach($paises as $p)
                @if($p->nome === $diretor->pais->nome)
                <option value="{{$p->id}}" selected>{{$p->nome}}</option>
                @else
                <option value="{{$p->id}}">{{$p->nome}}</option>
                @endif
                @endforeach
            </select>
        </div> 
        <div class="col-3">
            <label for="imagem" class="font-weight-bold">Upload imagem</label>
        <input type="file" name="imagem" class="form-control bg-danger text-white">
        </div>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-danger">
            <i class="fa fa-undo"></i>
            Atualizar
        </button>
    </div>
</form>

@endsection