<!DOCTYPE html>
<html>
<head>
	 <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="{{asset('css/materialize.min.css')}}"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>Administrar cuentas</title>
</head>
<body>
    <header>    	
    	<table>
    		<tr>
    		<td><img src="https://st2.depositphotos.com/3643473/6063/i/450/depositphotos_60637477-stock-photo-friends-holding-hands.jpg" height="100 width="100"></td>
    		<td>Nombre usuario</td>
    		<td><h2 class="blue-text">Administrar cuentas</h2> </td>
    		</tr>
    	</table>
    </header>
    <aside style="float: left;">
	<ul>
		
	 	<li><button class="btn btn-lg btn-block" type="button">Administrar cuentas</button></li>
		<li><button class="btn btn-lg btn-block" type="button">Planes de trabajo</button></li>
  		<li><button class="btn btn-lg btn-block" type="button">Informes anuales</button></li>
		<li><button class="btn btn-lg btn-block" type="button">Estadisticas</button></li>
	</ul>

	<ul>
		<li><a href="/admCreateUser" class="black-text">Crear</a></li>
		<li><a href="/admDeleteUser" class="black-text">Eliminar</a></li>
		<li><a href="/admModificUser" class="black-text">Modificar</a></li>
		<li><a href="/admUploadUser" class="black-text">Cargar</a></li>
		<li><a href="/admPrintUser" class="black-text">Imprimir</a></li>
	</ul>
	</aside>
	<section style="float: left;">
		@yield('content')
	</section>
	 <script type="text/javascript" src="{{asset('js/materialize.min.js')}}"></script>
</body>
</html>