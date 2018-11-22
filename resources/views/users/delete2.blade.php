@extends ('layouts.root_adm_users')

@section('content')
<!--Esto es lo mismo que crear pero cargando datos con el codigo-->
<h5 align="center">Eliminar</h5>
<div class="row">
  {!! Form::open(['action' => 'UsersController@delUser',
  'method' => 'GET', 'class'=>"col s12"]) !!}
        <div class="row">
            <div class="input-field col s4">
              {{ Form::text('Codigo', '', ['id' => 'idCode',
                      'class' => 'form-control validate']) }}
                <label for="idCode">Codigo</label>
            </div>
            <div>
              {{ Form::submit('Buscar', ['class'=>'btn btn-lg btn-primary']) }}
            </div>
        </div>
    {!! Form::close() !!}
</div>

{!! Form::open(['action' => ['UsersController@destroy',$user->id],
'method' => 'POST', 'class'=>"col s12"]) !!}
    <div class="row">
        <div class="input-field col s4">
          {{ Form::text('name', $user->name, ['id' => 'first_name',
            'class' => 'form-control validate', 'disabled']) }}
            <label for="first_name">Nombre(s)</label>
        </div>
        <div class="input-field col s4">
          {{ Form::text('last_name', $user->last_name, ['id' => 'first_last_name',
            'class' => 'form-control validate', 'disabled']) }}
            <label for="first_last_name">Apellido Paterno</label>
        </div>
        <div class="input-field col s4">
          {{ Form::text('second_last_name', $user->second_last_name, ['id' => 'second_last_name',
            'class' => 'form-control validate', 'disabled']) }}
            <label for="second_last_name">Apellido materno</label>
        </div>
    </div>

    <div class="row">
        <div class="input-field col s6">
          {{ Form::text('email', $user->email, ['id' => 'email',
        'class' => 'form-control validate', 'disabled']) }}
            <label for="email">Email</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s4">
          {{ Form::text('user_name', $user->user_name, ['id' => 'user_name',
        'class' => 'form-control validate', 'disabled']) }}
            <label for="user_name">Nombre de Usuario</label>
        </div>

        <div class="input-field col s4">
          {{ Form::text('user_type', $user->tipo_id, ['id' => 'user_type',
        'class' => 'form-control validate', 'disabled']) }}
            <label for="user_type">tipo de usuario</label>
            {{Form::hidden('_method','DELETE')}}
            <http://127.0.0.1:8000> </div> </div> <div class="row" align="center">
                {{ Form::submit('Eliminar', ['class'=>'btn btn-lg btn-primary']) }}
        </div>
        {!! Form::close() !!}

</div>

@stop
