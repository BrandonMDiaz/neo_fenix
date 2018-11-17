@extends ('layouts.root_adm_users')

@section('content')
<!--Esto es lo mismo que crear pero cargando datos con el codigo-->
<h5 align="center">Modificar</h5>
 <div class="row">
    <form class="col s12">
       <div class="row">
        <div class="input-field col s4">
          <input id="idCode" type="text" class="validate">
          <label for="idCode">Codigo</label>
        </div>
        <div>
            <button class="btn btn-lg btn-primary" type="button">Buscar</button>
        </div>
        </div>

      <div class="row">
        <div class="input-field col s4">
          <input id="first_name" type="text" class="validate">
          <label for="first_name">Nombre(s)</label>
        </div>
        <div class="input-field col s4">
          <input id="first_last_name" type="text" class="validate">
          <label for="first_last_name">Apellido Paterno</label>
        </div>
        <div class="input-field col s4">
          <input id="second_last_name" type="text" class="validate">
          <label for="second_last_name">Apellido materno</label>
        </div>
      </div>
     	 </div>
      	<div class="row">
        <div class="input-field col s6">
          <input id="email" type="email" class="validate">
          <label for="email">Email</label>
        </div>
      </div>
       <div class="row">
        <div class="input-field col s4">
          <input id="user_name" type="text" class="validate">
          <label for="user_name">Nombre de Usuario</label>
        </div>
       
        <div class="input-field col s4">
          <input id="password" type="password" class="validate">
          <label for="password">Password</label>
       </div>
        
        <div class="input-field col s4">
          <input id="user_type" type="text" class="validate">
          <label for="user_type">tipo de usuario</label> 
          <http://127.0.0.1:8000>
       </div>
       </div>
       <div class="row" align="center">
        <button class="btn btn-lg btn-primary" type="button">Modificar</button>
      </div>
    </form>
 </div>
	
@stop