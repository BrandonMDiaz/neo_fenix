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


	<title>Informe anual</title>
</head>
<body>
    <header>
    	<table>
    		<tr>
    		<td><img src="https://st2.depositphotos.com/3643473/6063/i/450/depositphotos_60637477-stock-photo-friends-holding-hands.jpg" height="100" width="100"></td>
    		<td>Nombre usuario</td>
    		<td><h2 class="blue-text">Informe anual</h2> </td>
    		</tr>
    	</table>
    </header>
    <aside style="float: left; margin: 10px;">
	<ul>

	 	<li><button class="btn btn-lg btn-block" type="button">Plan anual</button></li>
		<li><button class="btn btn-lg btn-block" type="button">Informe anual</button></li>
	</ul>

	<ul>
		<li><a href="/neo_fenix/public/informe/docencia" class="black-text">Docencia</a></li>
		<li><a href="/neo_fenix/public/informe/investigacion" class="black-text">Actividades</a></li>
		<li><a href="/neo_fenix/public/informe/tutoria" class="black-text">Tutoría</a></li>
		<li><a href="/neo_fenix/public/informe/gestion" class="black-text">Gestión</a></li>
        <li><a href="/neo_fenix/public/informe/difusion" class="black-text">Difusión</a></li>
        <li><a href="/neo_fenix/public/informe/superacion" class="black-text">Formación</a></li>
        <li><a href="/neo_fenix/public/informe/horas" class="black-text">Horas</a></li>
        <li><a href="/neo_fenix/public/informe/historial" class="black-text">Comentarios</a></li>
	</ul>
	</aside>
	<section style="align-self: center; margin: 20px;">
		@yield('content')
	</section>
	 <script type="text/javascript" src="{{asset('js/materialize.min.js')}}"></script>
</body>
</html>
