@extends ('layouts.plan')

@section('content')

<h5 align="center">Difusión</h5>
 <div class="row">
     <div class="input-field col s12">
         <input id="gestion" type="text" class="validate">
        <label for="gestion">Descripción de su planeación relacionada con la gestión</label>
      </div>

      <div class="checkbox">
         <input id="porDefinir">
        <label for="porDefinir">Por definir</label>
      </div>

      <div class="input-field col s4">
         <input id="fecha" type="text" class="validate">
        <label for="fecha">Fecha</label>
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