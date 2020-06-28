@extends('admin.base.base')

@section('conteudo')

<h1>Cadastro diretor</h1>
<hr>

<form action="{{ route('diretores.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
        <label for="nome" class="font-weight-bold">Nome</label>
        <input type="text" class="form-control" name="nome" placeholder="Informe o nome completo">
    </div>
    <div class="form-group">
        <label for="nome" class="font-weight-bold">Biografia</label>
        <textarea name="biografia" id="" cols="30" rows="5" class="form-control" placeholder="Informe a biografia"></textarea>
    </div>

    <div class="row">
        <div class="form-group col-3">
            <label for="" class="font-weight-bold">Idade</label>
            <input type="number" class="form-control" name="idade" min="16" max="110" step="1" placeholder="Informe a idade">
        </div>
        <div class="form-group col-3">
            <label for="data_nascimento" class="font-weight-bold">Data de Nascimento</label>
            <input type="date" name="data_nascimento" id="data_nascimento" class="form-control" pattern="dd/MM/yyyy">
        </div>
        <div class="form-group col-3">
            <label for="pais" class="font-weight-bold">País de Origem</label>
            <select name="pais_id" class="form-control">
                @foreach($paises as $p)
                <option value="{{$p->id}}">{{$p->nome}}</option>
                @endforeach
            </select>
        </div> 
        <div class="form-group col-3">
            <label for="imagem" class="font-weight-bold">Upload foto</label>
            <input type="file" name="imagem" class="form-control bg-danger text-white" placeholder="Escolha uma imagem">
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