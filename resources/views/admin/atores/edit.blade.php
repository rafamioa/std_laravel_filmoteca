@extends('admin.base.base')

@section('conteudo')

@componenteCabecalho(['titulo' => 'Editar artista', 'rota'=> 'atores.index', 'link' => 'Voltar'])
@endcomponenteCabecalho

@componenteMensagemValidacao
@endcomponenteMensagemValidacao

<form action="{{ route('atores.update') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <input type="hidden" name="id" value="{{$ator->id}}">
    <div class="form-group">
        <label for="nome" class="font-weight-bold">Nome</label>
    <input type="text" class="form-control" name="nome" value="{{$ator->nome}}" placeholder="Informe o nome completo">
    </div>
    <div class="form-group">
        <textarea name="biografia" cols="30" rows="5" class="form-control" placeholder="Informe a biografia">{{$ator->biografia}}</textarea>
    </div>

    <div class="row">
        <div class="form-group col-3">
            <label for="" class="font-weight-bold">Idade</label>
            <input type="number" class="form-control" name="idade" min="16" max="110" step="1"  value="{{$ator->idade}}" placeholder="Informe a idade">
        </div>
        <div class="form-group col-3">
            <label for="data_nascimento" class="font-weight-bold">Data de Nascimento</label>
            <input type="date" name="data_nascimento" id="data_nascimento" class="form-control"  value="{{$ator->data_nascimento}}">
        </div>
        <div class="form-group col-3">
            <label for="pais" class="font-weight-bold">País de Origem</label>
            <select name="pais_id" class="form-control">
                @foreach($paises as $p)
                @if($p->nome === $ator->pais->nome)
                <option value="{{$p->id}}" selected>{{$p->nome}}</option>
                @else
                <option value="{{$p->id}}">{{$p->nome}}</option>
                @endif
                @endforeach
            </select>
        </div> 
        @componenteUpload @endcomponenteUpload
    </div>

    @componenteBotaoAtualizar @endcomponenteBotaoAtualizar
</form>

@endsection