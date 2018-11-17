@extends('layouts.app')
        

@section('content')
	{!! Form::open(['action'] => divisionController@create]) !!}
    //
	{!! Form::close() !!}
@endsection
