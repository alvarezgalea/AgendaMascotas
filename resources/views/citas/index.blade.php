@extends('layouts.app')
@section('content')





<!-- modal -->
<div class="container">
<div class="bd-example">
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#evento">
    Launch demo modal
  </button>
</div>

<div class="modal fade" id="evento" tabindex="-1" aria-labelledby="exampleModalLiveLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLiveLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
      	<!-- formulario dentro del modal -->

      	<form action="{{url('/citas/agregar')}}">
      		{!! csrf_field() !!}

			<div class="mb-4">
			  <label for="fechaCita" class="form-label">Fecha de la Cita</label>
			  <input type="Date" name="fecha" class="form-control" id="fechaCita">
			</div>

			<div class="mb-4">
			  <label for="horaCita" class="form-label">Hora de la Cita</label>
			  <input type="Time" name="hora" class="form-control" id="horaCita">
			</div>

			<div class="mb-4">
			  <label for="mascotaCita" class="form-label">Mascota</label>
			  <input type="Text" name='mascota' class="form-control" id="mascotaCita">
			</div>

      	</form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" id="btnGuardar">Guardar</button>
        <button type="button" class="btn btn-warning"id="btnModificar">Modificar</button>
        <button type="button" class="btn btn-danger" id="btnBorrar">Borrar</button>
      </div>
    </div>
  </div>
</div>
</div>


<!-- Inserto el Calendario -->
<div class="container">
	<div id="agenda">		
	</div>
	Calendario
</div>

@endsection