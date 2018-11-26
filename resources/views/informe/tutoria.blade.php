@extends ('layouts.plan')

@section('content')

<h5 align="center">Tutoría</h5>
 <div class="row">
    <form class="col s12">
      <div class="row">
  
      <div class="input-field col s12">
         <textarea id="asesoria" class="materialize-textarea" class="validate"></textarea> 
        <label for="asesoria">Asesoria a estudiantes o de direccion de tesina  o trabajo de titulación</label>
      </div>
      </div>
      
      <div class="row">
      <div class="input-field col s12">
         <textarea id="servicio" class="materialize-textarea" class="validate"></textarea> 
        <label for="servicio">Servicio social, practicas profesionales, competencias, organización de viajes de estudio, etc.</label>
      </div>
      </div>

           <div class="row">
      <div class="input-field col s12">
        <textarea id="participacion" class="materialize-textarea" class="validate"></textarea> 
        <label for="participacion">Participación</label>
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