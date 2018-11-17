@extends ('layouts.root_adm_users')

@section('content')
<h5 align="center">Imprimir</h5>
 <div class="row">
    <form class="col s12">
      <div class="row">
      <p>
      <label>
        <input type="checkbox" />
        <span>Nombre</span>
      </label>
      </p>
       <p>
      <label>
        <input type="checkbox" />
        <span>Codigo</span>
      </label>
    </p>
     <p>
      <label>
        <input type="checkbox" />
        <span>Correo</span>
      </label>
    </p>
        <button class="btn btn-lg btn-primary green" type="button">Vista previa</button>
      </div>
      <div class="row" align="center">
        <button class="btn btn-lg btn-primary" type="button">Imprimir</button>
      </div>
    </form>
 </div>
	
@stop