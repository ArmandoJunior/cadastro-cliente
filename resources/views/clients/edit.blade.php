@extends('layouts.layout')

@section('content')

    <h3 class="son-main-text-3">Editar cliente</h3>
    @include('form._form_errors')
    {{ Form::model($client,['route' => ['clients.update',$client->id], 'method' => 'PUT', 'class' => 'card son-form', 'files' => true ]) }}

    <div class="card-body son-form-body">
        @include('clients._form')
    </div>

    <div class="card-footer create-btn">
        <button type="submit" class="btn btn-default">Salvar</button>
    </div>
    {{ Form::close() }}
    <br><br>

@endsection
