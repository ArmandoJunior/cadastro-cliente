<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Painel - Clientes') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
</head>
<body>
<div class="d-flex" id="wrapper">
    <!-- SIDEBAR-->
    <div id="sidebar-wrapper">
        <div class="sidebar-heading"><span>Cadastro de Clientes</span></div>
        <div class="list-group list-group-flush border-right">
            <a href="{{ route('clients.index') }}" class="list-group-item list-group-item-action">
                <i class="fas fa-home"></i>Inicio - listar</a>
            <a href="{{ route('clients.create') }}" class="list-group-item list-group-item-action">
                <i class="fas fa-users"></i>Novo cliente</a>
            <a href="#" class="list-group-item list-group-item-action"></a>
            <a href="#" class="list-group-item list-group-item-action"></a>
            <a href="#" class="list-group-item list-group-item-action"></a>
            <a href="#" class="list-group-item list-group-item-action"></a>
            <a href="#" class="list-group-item list-group-item-action"></a>
            <a href="#" class="list-group-item list-group-item-action"></a>
            <a href="#" class="list-group-item list-group-item-action"></a>
            <a href="#" class="list-group-item list-group-item-action"></a>
            <a href="#" class="list-group-item list-group-item-action"></a>
            <a href="#" class="list-group-item list-group-item-action"></a>
            <a href="#" class="list-group-item list-group-item-action"></a>
            <a href="#" class="list-group-item list-group-item-action"></a>
            <a href="#" class="list-group-item list-group-item-action"></a>
        </div>
    </div>
    <!-- CONTEÚDO -->
    <div id="page-content-wrapper">
        <nav class="navbar navbar-expand-lg navbar-light" id="son-navbar">
            <span id="menu-toggle" class="mr-auto"><img src="{{ asset('logo.png') }}" class="mx-auto d-block"></span>
            <a  class="navbar-brand" href="#" id="navbar-site-title">Painel</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#son-navbar-collapse"
                    aria-controls="son-navbar-collapse" aria-expanded="false" aria-label="Exibe toda navbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="son-navbar-collapse">
                <form class="form-inline" id="navbar-search-form">
                    <input type="text" class="form-control form-field son-form-field" placeholder="Pesquisar" id="navbar-search-field">
                </form>

                <div id="navbar-profile" class="ml-auto">
                    <img src="https://media.licdn.com/dms/image/C5603AQFsDohUoQ6Vzg/profile-displayphoto-shrink_100_100/0?e=1574899200&v=beta&t=9-eqMeyBSounstf2Eb7EUYWnVHV31Z9gx1J5PlvCkRA" alt="" srcset="">
                    <span>Armando Junior</span>
                </div>
            </div>
        </nav>
        <div id="content" class="container-fluid">
            @if(Session::has('message'))
                <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    {{Session::get('message')}}
                </div>
            @endif
            @yield('content')

        </div>
    </div>
</div>
<!-- SCRIPTS-->
{{--<script type="text/javascript" src="{{asset('js/app.js')}}"></script>--}}
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<!-- JS do Bootstrap -->
<script>
    $("#menu-toggle").click(function(event) {
        event.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>
</body>
</html>
