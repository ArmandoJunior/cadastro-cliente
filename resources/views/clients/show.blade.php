@extends('layouts.layout')

@section('content')
    <h3 class="son-main-text-3">Cliente</h3>
    <div class="card-footer create-btn">
        <a class="btn btn-secondary create-btn" href="{{ route('clients.edit',['client' => $client->id]) }}">Editar</a>
        <a class="btn btn-danger" href="{{ route('clients.destroy',['client' => $client->id]) }}"
           onclick="event.preventDefault();if(confirm('Deseja excluir este cliente?')){document.getElementById('form-delete').submit();}">Excluir</a>
    </div>


    {{Form::open(['route' => ['clients.destroy',$client->id],'method' => 'DELETE', 'id' => 'form-delete'])}}
    {{Form::close()}}

    <table class="table  bg-white">
        <tbody>
        <tr>
            <th scope="row">ID</th>
            <td>{{$client->id}} </td>
        </tr>
        <tr>
            <th scope="row">Imagem</th>
            <td>
                @if(!empty($client->image))
                <div id="navbar-profile-show" class="ml-auto">
                    <img src="{{ url("storage/clients/{$client->image}") }}" alt="{{ $client->name }}">
{{--                    <span>{{$client->name}}</span>--}}
                </div>
                @else
                sem imagem
                @endif
            </td>
        </tr>
        <tr>
            <th scope="row">Nome</th>
            <td>{{$client->name}}</td>
        </tr>
        <tr>
            <th scope="row">E-mail</th>
            <td>{{$client->email}}</td>
        </tr>
        <tr>
            <th scope="row">Telefone</th>
            <td>{{$client->phone}}</td>
        </tr>
        <tr>
            <th scope="row">Estado Civil</th>
            <td>
                @switch($client->marital_status)
                    @case(1)
                    Solteiro
                    @break

                    @case(2)
                    Casado
                    @break

                    @case(3)
                    Divorciado
                    @break
                @endswitch
            </td>
        </tr>
        <tr>
            <th scope="row">Data Nasc.</th>
            <td>{{$client->date_birth_formatted}}</td>
        </tr>
        <tr>
            <th scope="row">Sexo</th>
            <td>{{$client->sex_formatted }}</td>
        </tr>
        </tbody>
    </table>
@endsection
