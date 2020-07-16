<div class="row">
    <div class="col-11">
        <h1>{{$titulo}}</h1>
    </div>
    <div class="col-1">
        <a href="{{ route($rota) }}" class="btn btn-danger ml-auto">
            @if($link == 'Voltar')
                <i class="fa fa-arrow-left"> </i>
                Voltar
            @else
                <i class="fa fa-plus"> </i>
                Novo
            @endif
        </a>
    </div>
</div>
<hr>