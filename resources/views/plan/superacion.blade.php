@extends ('layouts.plan')

@section('content')

<h5 align="center">Superación acedémica</h5>
 <div class="row">
     <div class="input-field col s12">

    <p>
      <label>
        <input type="checkbox" id="porDefinir" />
        <span>por Definir</span>
      </label>
    </p>

      <div class="input-field col s5">
         <input id="programa" type="text" class="validate">
        <label for="programa">Programa de formación</label>
      </div>

      <div class="input-field col s4">
         <input id="institucion" type="text" class="validate">
        <label for="institucion">Institución</label>
      </div>
      <div class="input-field col s4">
         <input id="duracion" type="text" class="validate">
        <label for="duracion">Duración</label>
      </div>
      <div class="input-field col s4">
         <input id="horario" type="text" class="validate">
        <label for="horario">Horario</label>
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