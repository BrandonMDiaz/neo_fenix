@extends ('layouts.informe')

@section('content')

<h5 align="center">Comentarios</h5>
 <div class="row">
  <form class="col s12">
    <div class="row">
      <div class="input-field col s12">
        <textarea id="cumplimiento" class="materialize-textarea" class="validate"></textarea> 
        <label for="cumplimiento">Cumplimiento</label>
      </div>
    </div>
     
      <div class="row">
      <div class="input-field col s12">
      <textarea id="observaciones" class="materialize-textarea" class="validate"></textarea> 
      <label for="observaciones">Observaciones</label>
      </div>
      </div>
      
      <div class="row">     
      <button class="btn btn-lg btn-primary" type="button">Anterior</button>
      <button class="btn btn-lg btn-primary" type="button">Guardar</button>
      <button class="btn btn-lg btn-primary" type="button">Imprimir</button>
    </div>
 
    </form>
 </div>
@stop