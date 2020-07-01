<div class="d-flex flex-column bg-dark">
    <div class="p-2 mt-3">
        <a href="#" class="nav-link" id="filmes">
            <h5 class="menu-item">Filmes</h5>
        </a>
        <ul class="list-group list-group-flush text-white" id="filmes-gestao">
            <li class="list-group-item  bg-dark">
            <a href="{{ route('filmes.create') }}" class="nav-link menu-link p-0">
                    Cadastro
                </a>
            </li>
            <li class="list-group-item  bg-dark">
                <a href="{{ route('filmes.index') }}" class="nav-link menu-link p-0">
                    Lista
                </a>
            </li>
        </ul>
    </div>
    <div class="dropdown-divider"></div>
    <div class="p-2">
        <a href="#" class="nav-link" id="artistas">
            <h5 class="menu-item">Artistas</h5>
        </a>
        <ul class="list-group list-group-flush text-white" id="artistas-gestao">
            <li class="list-group-item  bg-dark">
            <a href="{{ route('atores.create') }}" class="nav-link menu-link p-0">
                    Cadastro
                </a>
            </li>
            <li class="list-group-item  bg-dark">
            <a href="{{ route('atores.index') }}" class="nav-link menu-link p-0">
                    Lista
                </a>
            </li>
        </ul>
    </div>
    <div class="dropdown-divider"></div>
    <div class="p-2">
        <a href="#" class="nav-link">
            <h5 class="menu-item" id="produtoras">Produtoras</h5>
        </a>
        <ul class="list-group list-group-flush text-white" id="produtoras-gestao">
            <li class="list-group-item  bg-dark">
            <a href="{{ route('produtoras.create') }}" class="nav-link menu-link p-0">
                    Cadastro
                </a>
            </li>
            <li class="list-group-item  bg-dark">
            <a href="{{ route('produtoras.index') }}" class="nav-link menu-link p-0">
                    Lista
                </a>
            </li>
        </ul>
    </div>
    <div class="dropdown-divider"></div>
    <div class="p-2">
        <a href="#" class="nav-link">
            <h5 class="menu-item" id="diretores">Diretores</h5>
        </a>
        <ul class="list-group list-group-flush text-white" id="diretores-gestao">
            <li class="list-group-item  bg-dark">
                <a href="{{route('diretores.create')}}"  class="nav-link menu-link p-0">
                    Cadastro
                </a>
            </li>
            <li class="list-group-item  bg-dark">
            <a href="{{route('diretores.index')}}" class="nav-link menu-link p-0">
                    Lista
                </a>
            </li>
        </ul>
    </div>
</div>