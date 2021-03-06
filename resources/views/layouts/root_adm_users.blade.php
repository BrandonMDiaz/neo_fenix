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


	<title>Administrar cuentas</title>
</head>
<body>
     @include('inc.messages')
    <header>
    	<table>
    		<tr>
    		<td><img src="https://st2.depositphotos.com/3643473/6063/i/450/depositphotos_60637477-stock-photo-friends-holding-hands.jpg" height="100" width="100"></td>
    		<td>Nombre usuario</td>
    		<td><h2 class="blue-text">Administrar cuentas</h2> </td>
    		</tr>
    	</table>
    </header>
    <aside style="float: left; margin: 10px;">
	<ul>

	 	<li><button class="btn btn-lg btn-block" type="button">Administrar cuentas</button></li>
		<li><button class="btn btn-lg btn-block" type="button">Planes de trabajo</button></li>
  		<li><button class="btn btn-lg btn-block" type="button">Informes anuales</button></li>
		<li><button class="btn btn-lg btn-block" type="button">Estadisticas</button></li>
	</ul>

	<ul>
		<li><a href="/neo_fenix/public/user/create" class="black-text">Crear</a></li>
		<li><a href="/neo_fenix/public/user/delete" class="black-text">Eliminar</a></li>
		<li><a href="/neo_fenix/public/user/edit" class="black-text">Modificar</a></li>
		<li><a href="/neo_fenix/public/user/upload" class="black-text">Cargar</a></li>
	</ul>
	</aside>
	<section style=" align-self: center; margin: 20px;">
		@yield('content')
	</section>
	 <script type="text/javascript" src="{{asset('js/materialize.min.js')}}"></script>
</body>
</html>
