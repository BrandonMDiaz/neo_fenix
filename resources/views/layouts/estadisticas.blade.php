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


	<title>Estadisticas</title>
</head>
<body>
    <header>
    	<table>
    		<tr>
    		<td><img src="https://st2.depositphotos.com/3643473/6063/i/450/depositphotos_60637477-stock-photo-friends-holding-hands.jpg" height="100" width="100"></td>
    		<td>Nombre usuario</td>
    		<td><h2 class="blue-text">Estadisticas</h2> </td>
    		</tr>
    	</table>
    </header>
    <aside style="float: left;">
	<ul>

	 	<li><button class="btn btn-lg btn-block" type="button">Planes de trabajo</button></li>
		<li><button class="btn btn-lg btn-block" type="button">Informes anuales</button></li>
        <li><button class="btn btn-lg btn-block" type="button">Estadisticas</button></li>

	</ul>
    <ul>
        <li><a href="/neo_fenix/public/plan/docencia" class="black-text">Generales</a></li>
        <li><a href="/neo_fenix/public/plan/investigacion" class="black-text">Individuales</a></li>
	</aside>
	<section style="float: left;">
		@yield('content')
	</section>
	 <script type="text/javascript" src="{{asset('js/materialize.min.js')}}"></script>
</body>
</html>
