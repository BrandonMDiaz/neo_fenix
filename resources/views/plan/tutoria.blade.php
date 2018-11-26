@extends ('layouts.plan')

@section('content')

<h5 align="center">Tutoría</h5>
 <div class="row">
    <form class="col s12">
      <div class="row">
      <p>Actividades para su tarea de retención de alumnos</p>
      <div class="select">
      <option></option>
      <label>categoría</label>   
      </div>
      <div class="input-field col s8">
        <textarea id="actividadRet" class="materialize-textarea" class="validate"></textarea> 
        <label for="actividadRet">Actividad de retención de alumnos</label>
      </div>
      </div>
      
      <div class="row">
      <div class="input-field col s8">
        <textarea id="actividadRep" class="materialize-textarea" class="validate"></textarea> 
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