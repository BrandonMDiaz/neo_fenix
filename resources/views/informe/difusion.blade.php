@extends ('layouts.informe')

@section('content')

<h5 align="center">Difusión</h5>
 <div class="row">
     <div class="input-field col s5">
      <textarea id="actividad" class="materialize-textarea" class="validate"></textarea>
        <label for="actividad">Actividad</label>
      </div>

      <div class="input-field col s9">
         <textarea id="detalles" class="materialize-textarea" class="validate"></textarea>
        <label for="detalles">Detalles</label>
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
