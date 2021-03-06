use App\Filme;
use App\Diretor;
@extends('admin.base.base')

@section('conteudo')

@componenteCabecalho(['titulo' => 'Cadastrar filme', 'rota'=> 'filmes.index', 'link' => 'Voltar'])
@endcomponenteCabecalho

@componenteMensagemValidacao
@endcomponenteMensagemValidacao

<form action="{{ route('filmes.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="row">
        <div class="col-6">
            <div class="form-group">
                <label for="titulo" class="font-weight-bold">Título do filme</label>
            <input type="text" class="form-control" name="titulo" placeholder="Título" value="{{ old('titulo') }}">
            </div>
        </div>

        <div class="col-3">
            <div class="form-group">
                <label class="font-weight-bold">Upload de capa</label>
                <input type="file" name="imagem" class="form-control bg-danger text-white">
            </div>
        </div>

        <div class="col-3">
            <div class="form-group">
                <label for="produtora" class="font-weight-bold">Produtora</label>
                <select name="produtora_id" class="form-control" >
                    @foreach($produtoras as $produtora)
                        <option class="form-control" value="{{$produtora->id}}" {{ (old("produtora_id") == $produtora->id ? "selected": "") }}>{{$produtora->nome}}</option>
                    @endforeach
                </select>
             </div>
        </div>
    </div>


    <div class="form-group">
        <label for="sinopse" class="font-weight-bold">Sinopse</label>
        <textarea name="sinopse" id="" cols="30" rows="5" class="form-control" placeholder="Sinopse" >{{ old('sinopse') }}</textarea>
    </div>

    <div class="form-group">
        <label for="genero" class="font-weight-bold">Gênero</label><br>
        @foreach($generos as $genero)
        <div class="form-check form-check-inline">      
            <input class="form-check-input" type="checkbox"  name="genero_id[]" value="{{$genero->id}}" >
            <label class="form-check-label" for="inlineCheckbox1">{{$genero->nome}}</label>    
        </div>
        @endforeach
    </div>

    <div class="form-group">
        <label for="diretor" class="font-weight-bold">Diretor</label><br>
        @foreach($diretores as $diretor)
        <div class="form-check form-check-inline">      
            <input class="form-check-input" type="checkbox"  name="diretor_id[]" value="{{$diretor->id}}">
            <label class="form-check-label" for="inlineCheckbox1">{{$diretor->nome}}</label>    
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
                        <option class="form-control" value="{{$pais->id}}" {{ (old("pais_id") == $pais->id ? "selected": "") }}>{{$pais->nome}}</option>
                    @endforeach
                </select>
             </div>
        </div>
        <div class="col-3">
            <div class="form-group">
                <label for="classificacao" class="font-weight-bold">Classificação</label>
                <select name="classificacao_id" class="form-control">
                    @foreach($classificacoes as $classificacao)
                        <option class="form-control" value="{{$classificacao->id}}" {{ (old("classificacao_id") == $classificacao->id ? "selected": "") }}>{{$classificacao->tipo}}</option>
                    @endforeach
                </select>
             </div>
        </div>
    </div>

    @componenteBotaoCadastrar
    @endcomponenteBotaoCadastrar


</form>

@endsection