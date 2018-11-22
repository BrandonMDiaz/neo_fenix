@extends ('layouts.plan')

@section('content')

<h5 align="center">Gestión</h5>
 <div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s12">
         <input id="gestion" type="text" class="validate">
        <label for="gestion">Descripción de su planeación relacionada con la gestión</label>
      </div>
      </div>
      <button class="btn btn-lg btn-primary" type="button">Anterior</button>
      <button class="btn btn-lg btn-primary" type="button">Guardar</button>
      <button class="btn btn-lg btn-primary" type="button">Siguiente</button>
    </form>
 </div>
	
@stop