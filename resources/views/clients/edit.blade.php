@extends('layouts.layout')

@section('content')
    <h3>Editar cliente</h3>
    @include('form._form_errors')
    {{ Form::model($client,['route' => ['clients.update',$client->id], 'method' => 'PUT' ]) }}
    @include('clients._form')
    <button type="submit" class="btn btn-default">Salvar</button>
    {{ Form::close() }}
@endsection
