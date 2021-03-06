@extends ('layouts.root_adm_users')

@section('content')
<h5 align="center">Modificar</h5>
<div class="row">
    {!! Form::open(['action' => 'UsersController@modUser',
    'method' => 'GET', 'class'=>"col s12"]) !!}
    <div class="row">
        <div class="input-field col s4">
            {{ Form::text('Codigo', '', ['id' => 'idCode',
                    'class' => 'form-control validate',"required" => '',
            "aria-required"=> "true"]) }}
            <label for="idCode">Codigo</label>
        </div>
        <div>
            {{ Form::submit('Buscar', ['class'=>'btn btn-lg btn-primary']) }}
        </div>
    </div>
    {!! Form::close() !!}
</div>
<div class="row">
    {!! Form::open(['action' => ['UsersController@update',$user->id],
    'method' => 'POST', 'class'=>"col s12"]) !!}
        <div class="row">
            <div class="input-field col s4">
                {{ Form::text('name', $user->name, ['id' => 'first_name',
                'class' => 'form-control validate',"required" => '',
                "aria-required"=> "true"]) }}
                <label for="first_name">Nombre(s)</label>
            </div>
            <div class="input-field col s4">
                 {{ Form::text('last_name', $user->last_name, ['id' => 'first_last_name',
                'class' => 'form-control validate',"required" => '',
                 "aria-required"=> "true"]) }}
            <label for="first_last_name">Apellido Paterno</label>
        </div>
            <div class="input-field col s4">
                {{ Form::text('second_last_name', $user->second_last_name, ['id' => 'second_last_name',
                'class' => 'form-control validate',"required" => '',
                 "aria-required"=> "true"]) }}
                 <label for="second_last_name">Apellido materno</label>
            </div>
        </div>

        <div class="row">
             <div class="input-field col s6">
               {{ Form::text('email', $user->email, ['id' => 'email',
                'class' => 'form-control validate',"required" => '',
                 "aria-required"=> "true"]) }}
                <label for="email">Email</label>
                <span class="helper-text" data-error="wrong" data-success="right">Ejemplo: fenix@fenix.com</span>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s4">
            {{ Form::text('user_name', $user->user_name, ['id' => 'user_name',
            'class' => 'form-control validate',"required" => '',
            "aria-required"=> "true"]) }}
            <label for="user_name">Nombre de Usuario</label>
            </div>

            <div class="input-field col s4">
                {{ Form::password('password',  ['id' => 'password',
                'class' => 'form-control validate',"required" => '',
                "aria-required"=> "true"]) }}
                <label for="password">Password</label>
            </div>

            <div class="input-field col s4">
                 {{ Form::text('user_type', $user->tipo_id, ['id' => 'user_type',
                 'class' => 'form-control validate',"required" => '',
                "aria-required"=> "true"]) }}
                 <label for="user_type">tipo de usuario</label>
            </div> 
        </div>
            <div class="row" align="center" ">
                {{Form::hidden('_method','PUT')}}
                {{ Form::submit('Modificar', ['class'=>'btn btn-lg btn-primary']) }}
            </div>
       
    </div>
{!! Form::close() !!}


@stop
