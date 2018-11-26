@extends ('layouts.plan')

@section('content')

<h5 align="center">Formación</h5>
 <div class="row">
  <form class="col s12">
     <div class="input-field col s12">
         <textarea id="programa" class="materialize-textarea" class="validate"></textarea> 
        <label for="programa">Progreso o formación propia en programas de posgrado</label>S
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