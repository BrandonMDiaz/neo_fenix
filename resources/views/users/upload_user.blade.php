@extends ('layouts.root_adm_users')

@section('content')
<h5 align="center">Cargar</h5>
 <div class="row">
    <form class="col s12">

      <div class="row">
          <input id="userFile" type="file">
      </div>
      <div class="row" align="center">
        <button class="btn btn-lg btn-primary" type="button">Cargar</button>
      </div>
    </form>
 </div>
	
@stop