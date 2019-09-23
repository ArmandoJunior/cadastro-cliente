@extends('layouts.layout')

@section('content')

    <h3 class="son-main-text-3">Novo cliente</h3>

    @include('form._form_errors')

    {{ Form::open([
    'route' => 'clients.store',
    'class' => 'card son-form',
    ]) }}

    <div class="card-body son-form-body">
        @include('clients._form')
    </div>

    <div class="card-footer create-btn">
        <button type="submit" class="btn btn-default">Criar</button>
    </div>
    <br>
    {{ Form::close() }}
    <br><br>
@endsection
