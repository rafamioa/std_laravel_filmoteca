<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>FILMOTECA - @yield('titulo')</title>
</head>
<body>

@include('admin.base.navbar')

<div class="row">
    <div class="col-2">
        @include('admin.base.sidebar')
    </div>
    <div class="col-10">
        <div class="container">
            <div class="mt-3">
                @yield('conteudo')
            </div>
         </div>
    </div>
</div>
    
@include('admin.base.rodape')

<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/scripts.js') }}"></script>
</body>
</html>