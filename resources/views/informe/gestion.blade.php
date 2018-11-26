@extends ('layouts.plan')

@section('content')

<h5 align="center">Gestión</h5>
 <div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s12">
         <textarea id="gestionAcadCol" class="materialize-textarea" class="validate"></textarea> 
        <label for="gestionAcadCol">Gestión académica colegiada</label>
      </div>
      </div>

      <div class="row">
        <div class="input-field col s12">
        <textarea id="trabajoCol" class="materialize-textarea" class="validate"></textarea> 
        <label for="trabajoCol">Trabajo colectivo de docencia o de participacion en colegiado academico</label>
      </div>
      </div>

      <div class="row">
        <div class="input-field col s12">
         <textarea id="gestionCol" class="materialize-textarea" class="validate"></textarea> 
        <label for="gestionCol">Gestión colectiva</label>
      </div>
      </div>

      <div class="row">
        <div class="input-field col s12">
        <textarea id="gestionAcadPer" class="materialize-textarea" class="validate"></textarea> 
        <label for="gestionAcadPer">Gestión académica personal</label>
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