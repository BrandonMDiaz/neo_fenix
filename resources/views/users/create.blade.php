@extends('layouts.app')


@section('content')
	<h3>Create User</h3>
	{!! Form::open(['action' => 'UsersController@store', 'method' => 'POST']) !!}
    	<div class="form-group">
    		{{Form::label('name','Name')}}
        {{Form::label('last_name','Last Name')}}
        {{Form::label('email','Email')}}

    	</div>
	{!! Form::close() !!}
@endsection
