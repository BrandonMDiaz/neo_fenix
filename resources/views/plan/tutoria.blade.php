@extends ('layouts.plan')

@section('content')

<h5 align="center">Tutoría</h5>
 <div class="row">
    <form class="col s12">
      <div class="row">
      <p>Actividades para su tarea de retención de alumnos</p>
      <p>categoría</p>
      <div class="select">
        
      </div>
      <div class="input-field col s8">
         <input id="actividadRet" type="text" class="validate">
        <label for="actividadRet">Actividad de retención de alumnos</label>
      </div>
      </div>
      
      <div class="row">
      <div class="input-field col s8">
         <input id="actividadRep" type="text" class="validate">
        <label for="actividadRep">Actividad para disminuir la reprobación</label>
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