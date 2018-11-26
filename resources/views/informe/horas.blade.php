@extends ('layouts.informe')

@section('content')

<h5 align="center">Investigación</h5>
 <div class="row">
    <form class="col s12">
      <div class="row">
      <div class="input-field col s2">
      <input id="horasDocencia" type="text" class="validate" disabled="">
      <label for="horasDocencia">Horas docencia</label>
      </div>
      </div>
       <div class="row">
      <div class="input-field col s2">
      <input id="horasInvestigacion" type="text" class="validate" disabled="">
      <label for="horasInvestigacion">Horas investigación</label>
      </div>
      </div>
       <div class="row">
      <div class="input-field col s2">
      <input id="horasTutoria" type="text" class="validate" disabled="">
      <label for="horasTutoria">Horas Tutoria</label>
      </div>
      </div>
       <div class="row">
      <div class="input-field col s2">
      <input id="horasGestion" type="text" class="validate" disabled="">
      <label for="horasGestion">Horas Gestión</label>
      </div>
      </div>
       <div class="row">
      <div class="input-field col s2">
      <input id="horasDifusion" type="text" class="validate" disabled="">
      <label for="horasDifusion">Horas difusión</label>
      </div>
      </div>
       <div class="row">
      <div class="input-field col s2">
      <input id="horasSuperacion" type="text" class="validate" disabled="">
      <label for="horasSuperacion">Horas Superación Académica</label>
      </div>
      </div>
       <div class="row">
      <div class="input-field col s2">
      <input id="horasTotal" type="text" class="validate" disabled="">
      <label for="horasTotal">Total de horas</label>
      </div>
      </div>
      <button class="btn btn-lg btn-primary" type="button">Anterior</button>
      <button class="btn btn-lg btn-primary" type="button">Guardar</button>
      <button class="btn btn-lg btn-primary" type="button">Imprimir</button>
      <button class="btn btn-lg btn-primary" type="button">Terminar</button>
    </form>
 </div>
@stop
