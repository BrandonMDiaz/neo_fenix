@extends ('layouts.informe')

@section('content')

<h5 align="center">Actividades</h5>
 <div class="row">
    <form class="col s12">
      <div class="row">

      <div class="input-field col s12">
         <input id="linea" type="text" class="validate">
        <label for="linea">Linea de generación y aplicación del conocimiento</label>
      </div>

        <div class="input-field col s12">
         <textarea id="otras" class="materialize-textarea" class="validate"></textarea>
        <label for="otras">Otras actividades</label>
      </div>

        <div class="input-field col s12">
        <textarea id="proyectos" class="materialize-textarea" class="validate"></textarea>
        <label for="proyectos">Proyectos</label>
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
