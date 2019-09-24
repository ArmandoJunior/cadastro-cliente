@extends('layouts.layout')

@section('content')
    <div class="table-title">
        <h3 id="main-page-form-title" class="son-main-text-3">Listagem de clientes</h3>
        <form action="{{route('clients.index')}}" type="GET">
            <input type="text" name="name" class="form-control form-field son-form-field" placeholder="Pesquisar">
        </form>
    </div>
    <table class="table bg-white">
        <thead>
        <tr>
            <th class="table-col-title">#</th>
            <th class="table-col-title">Nome</th>
            <th class="table-col-title">Data Nasc.</th>
            <th class="table-col-title">E-mail</th>
            <th class="table-col-title">Telefone</th>
            <th class="table-col-title">Sexo</th>
            <th class="table-col-title">Ação</th>
        </tr>
        </thead>
        <tbody>
        @foreach($clients as $client)
            <tr>
                <td>{{ $client->id }}</td>
                <td>{{ $client->name }}</td>
                <td>{{ $client->date_birth }}</td>
                <td>{{ $client->email }}</td>
                <td>{{ $client->phone }}</td>
                <td>{{ $client->sex }}</td>
                <td>
                    <a href="{{route('clients.edit',['client' => $client->id])}}">Editar</a> |
                    <a href="{{route('clients.show',['client' => $client->id])}}">Ver</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <div>
        <div class="col-12 d-flex justify-content-center">
            {{
                $clients->appends($request->toArray())->links()
            }}
        </div>
    </div>

@endsection
