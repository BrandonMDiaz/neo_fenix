<!DOCTYPE html>
<html>
<head>
	   <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="{{asset('css/materialize.min.css')}}"  media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta charset="utf-8">

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="{{ asset('js/app.js') }}" defer></script>


	<title>Plan anual</title>
</head>
<body>
  <h1 style="text-align: center;">Plan anual</h1>
  <h3>Docencia</h3>

  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Carrera</th>
        <th scope="col">Materia</th>
      </tr>
    </thead>
    <tbody>
      @if(count($Materias > 1))
        @foreach ($Materia as $Materias)
          <th scope="row">{{}}</th>
          <td>{{$materia}}</td>
          <td>{{$}}</td>
          <td>{{$}}</td>
        @endforeach

      <tr>

      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>Larry</td>
        <td>the Bird</td>
        <td>@twitter</td>
      </tr>
    </tbody>
  </table>

  <h3>Investigacion</h3>
  <h3>Tutoria</h3>
  <h3>Gestión</h3>
  <h3>Difusión</h3>
  <h3>Superación academica</h3>
  <h3>horas</h3>

  <script type="text/javascript" src="{{asset('js/materialize.min.js')}}"></script>
</body>
</html>
















@extends ('layouts.plan')

@section('content')

<h5 align="center">Difusión</h5>
 <div class="row">
     <div class="input-field col s12">
         <input id="gestion" type="text" class="validate">
        <label for="gestion">Descripción de su planeación relacionada con la gestión</label>
      </div>

      <div class="checkbox">
         <input id="porDefinir">
        <label for="porDefinir">Por definir</label>
      </div>

      <div class="input-field col s4">
         <input id="fecha" type="text" class="validate">
        <label for="fecha">Fecha</label>
      </div>

      </div>
      <div class="row">
      <div class="input-field col s2">
      <input id="horas" type="text" class="validate">
      <label for="horas">Horas</label>
      </div>
      </div>
      <button class="btn btn-lg btn-primary" type="button">Anterior</button>
      <button class="btn btn-lg btn-primary" type="button">Guardar</button>
      <button class="btn btn-lg btn-primary" type="button">Siguiente</button>
    </form>
 </div>
@stop
