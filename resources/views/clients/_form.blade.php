@component('form._form_group',['field' => 'name'])
    {{ Form::label('name','Nome',['class' => 'control-label']) }}
    {{ Form::text('name',null,['class' => 'form-control form-field son-form-field']) }}
@endcomponent
<hr>
@component('form._form_group',['field' => 'email'])
    {{ Form::label('email', 'E-mail',['class' => 'control-label']) }}
    {{ Form::email('email', null,['class' => 'form-control form-field son-form-field'])}}
@endcomponent
<hr>
@component('form._form_group',['field' => 'phone'])
    {{ Form::label('phone', 'Telefone',['class' => 'control-label']) }}
    {{ Form::text('phone', null,['class' => 'form-control form-field son-form-field'])}}
@endcomponent
<hr>
@component('form._form_group',['field' => 'marital_status'])
    {{ Form::label('marital_status', 'Estado Civil',['class' => 'control-label']) }}
    {{
        Form::select('marital_status', [
            '' => 'Selecione o estado civil',
            1 => 'Solteiro',
            2 => 'Casado',
            3 => 'Divorciado'
       ],null,['class' => 'form-control form-field son-form-field'])
    }}
@endcomponent
<hr>
@component('form._form_group',['field' => 'date_birth'])
    {{ Form::label('date_birth', 'Data Nasc.',['class' => 'control-label']) }}
    {{ Form::date('date_birth', null,['class' => 'form-control form-field son-form-field'])}}
@endcomponent
<hr>
@php
    $sex = $client->sex;
@endphp

<div class="form-group">
    {{ Form::label('sex', 'Sexo',['class' => 'control-label']) }}
    <div class="form-group radio{{$errors->has('sex')?' has-error':''}}">
        <label>
            {{ Form::radio('sex','m') }} Masculino
        </label>
    </div>

    <div class="form-group radio{{$errors->has('sex')?' has-error':''}}">
        <label>
            {{ Form::radio('sex','f') }} Feminino
        </label>
    </div>
    <div class="{{$errors->has('sex')?' has-error':''}}">
        @include('form._help_block',['field' => 'sex'])
    </div>
</div>

<hr>
@component('form._form_group',['field' => 'company_name'])
    {{ Form::label('company_name','Empresa em que trabalha',['class' => 'control-label']) }}
    {{ Form::text('company_name',null,['class' => 'form-control form-field son-form-field']) }}
@endcomponent

{{--@component('form._form_group',['field' => 'file_name'])--}}
{{--    {{ Form::label('file_name','Imagem',['class' => 'control-label']) }}--}}
{{--    {{ Form::file('file_name',['class' => 'form-control']) }}--}}
{{--@endcomponent--}}

