@extends ('layouts.root_adm_users')

@section('content')
<h5 align="center">Eliminar</h5>
 <div class="row">
    <form class="col s12">
       <div class="row">
        <div class="input-field col s5">
          <input id="password" type="password" class="validate">
          <label for="password">Password</label>
       </div>
        <div class="input-field col s5">
          <input id="user_type" type="text" class="validate">
          <label for="user_type">tipo de usuario</label> 
       </div>
       </div>
       <table> <!--aqui se tendra que hacer el llenado ode la tabla con lo que se obtenga d e resultados-->
       <tr>
         <td>
           
         </td>
       </tr> 
       </table>       
       <div class="row" align="center">
        <button class="btn btn-lg btn-primary" type="button">Eliminar</button>
      </div>
    </form>
 </div>
	
@stop