@extends ('layouts.plan')

@section('content')

<h5 align="center">Investigación</h5>
 <div class="row">
    <form class="col s12">
      <p>Asignatura para el periodo Fecha - Fecha</p>
      <div class="row">
      <p>Linea de investigación</p>
      <div class="select">
         
               </div>

      <div class="input-field col s8">
         <input id="descripcion" type="text" class="validate">
        <label for="descripcion">Descripción</label>
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