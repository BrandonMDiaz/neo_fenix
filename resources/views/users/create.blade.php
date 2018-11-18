@extends ('layouts.root_adm_users')

@section('content')
<h5 align="center">Crear</h5>
<div class="row">
    {!! Form::open(['action' => 'UsersController@store', 'method' => 'POST',
    'enctype' => 'multipart/form-data', 'class'=>'col s12']) !!}

    <div class="row">
        <div class="input-field col s4">

            {{ Form::text('name', '', ['id' => 'name',
            'class' => 'form-control validate']) }}
            <label for="name">Nombre(s)</label>

        </div>

        <div class="input-field col s4">
            {{ Form::label('first_last_name', 'Apellido Paterno', ['for'=>'first_last_name',
            'class' => 'control-label ']) }}
            {{ Form::text('first_last_name', '', ['id' => 'first_last_name',
            'class' => 'form-control validate']) }}
        </div>

        <div class="input-field col s4">
            {{ Form::label('second_last_name', 'Apellido materno', ['for'=>'second_last_name',
            'class' => 'control-label']) }}
            {{ Form::text('second_last_name', '', ['id' => 'second_last_name',
            'class' => 'form-control validate']) }}
        </div>
    </div>

    <div class="row">
        <div class="input-field col s4">

            {{ Form::label('idCode', 'Codigo', ['for'=>'idCode',
            'class' => 'control-label']) }}
            {{ Form::text('idCode', '', ['id' => 'idCode',
            'class' => 'form-control validate']) }}

        </div>
    </div>

    <div class="row">
        <div class="input-field col s6">
            {{ Form::label('email', 'Email', ['for'=>'email',
            'class' => 'control-label']) }}
            {{ Form::text('email', '', ['id' => 'email',
            'class' => 'form-control validate']) }}
        </div>
    </div>
    <div class="row">
        <div class="input-field col s4">
            {{ Form::text('user_name', '', ['id' => 'user_name',
          'class' => 'form-control validate']) }}
          {{ Form::label('user_name', 'Nombre de usuario', ['for'=>'user_name',
        'class' => 'control-label']) }}
        </div>

        <div class="input-field col s4">
            {{ Form::password('password',['id' => 'password',
          'class' => 'form-control validate']) }}
            <label for="password">Password</label>
        </div>

        <div class="input-field col s4">
            {{ Form::text('user_type', '', ['id' => 'user_type',
            'class' => 'form-control validate']) }}
            {{ Form::label('user_type', 'Tipo de usuario', ['for'=>'user_type',
            'class' => 'control-label']) }}

        </div>
    </div>
    <div class="row" align="center">
        {{ Form::submit('Crear', ['class'=>'btn btn-lg btn-primary']) }}
        {{-- <button class="btn btn-lg btn-primary" type="button">Crear</button> --}}
    </div>
    {!! Form::close() !!}
</div>

@stop
