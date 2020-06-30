use App\Filme;
@extends('admin.base.base')

@section('conteudo')

<h1>Cadastro filme</h1>
<hr>

<form action="{{ route('filmes.store') }}" method="POST">
    @csrf

    <div class="row">
        <div class="col-9">
            <div class="form-group">
                <label for="titulo" class="font-weight-bold">Título do filme</label>
                <input type="text" class="form-control" name="titulo" placeholder="Título">
            </div>
        </div>

        <div class="col-3">
            <div class="form-group">
                <label for="produtora" class="font-weight-bold">Produtora</label>
                <select name="produtora_id" class="form-control">
                    @foreach($produtoras as $produtora)
                        <option class="form-control" value="{{$produtora->id}}">{{$produtora->nome}}</option>
                    @endforeach
                </select>
             </div>
        </div>
    </div>


    <div class="form-group">
        <label for="sinopse" class="font-weight-bold">Sinopse</label>
        <textarea name="sinopse" id="" cols="30" rows="5" class="form-control" placeholder="Sinopse"></textarea>
    </div>

    <div class="form-group">
        <label for="genero" class="font-weight-bold">Gênero</label><br>
        @foreach($generos as $genero)
        <div class="form-check form-check-inline">      
            <input class="form-check-input" type="checkbox"  name="genero_id[]" value="{{$genero->id}}">
            <label class="form-check-label" for="inlineCheckbox1">{{$genero->nome}}</label>    
        </div>
        @endforeach
    </div>


    <div class="row">
        <div class="col-3">
            <label for="duracao" class="font-weight-bold">Duração do filme (em minutos)</label>
            <input type="number" class="form-control" name="duracao" placeholder="Duração" min="30" max="240" step="1">
        </div>
        <div class="col-3">
            <label for="data_lancamento" class="font-weight-bold">Data do Lançamento</label>
            <input type="date" class="form-control" name="data_lancamento" placeholder="Data do Lançamento">
        </div>
        <div class="col-3">
            <div class="form-group">
                <label for="pais" class="font-weight-bold">País de Origem</label>
                <select name="pais_id" class="form-control">
                    @foreach($paises as $pais)
                        <option class="form-control" value="{{$pais->id}}">{{$pais->nome}}</option>
                    @endforeach
                </select>
             </div>
        </div>
        <div class="col-3">
            <div class="form-group">
                <label for="classificacao" class="font-weight-bold">Classificação</label>
                <select name="classificacao_id" class="form-control">
                    @foreach($classificacoes as $classificacao)
                        <option class="form-control" value="{{$classificacao->id}}">{{$classificacao->tipo}}</option>
                    @endforeach
                </select>
             </div>
        </div>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </div>


</form>

@endsection