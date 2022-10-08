@include('app')
@include('menu')

	@if (count($errors)>0)
<div class="alert alert-danger" role="aler">
	<u>
		@foreach ($errors->all() as $error)
		<li>
			{{$error}}
		</li>
		@endforeach
	</u>
@endif
</div></div>
<div class="container">

	<div class="jumbotron">
   <div class="form-row align-items-center">
    <div class="form-group col-md-12">
	<h1>Crear curso</h1>
	<form action="{{url('/cursos')}}" method="post" enctype="multipart/from-data">
	@csrf
	<label for="nombre">Nombre del curso</label>
	<input type="text" class="form-control" name="nombre" id="nombre">
	<label for="descripcion">Descripcion</label>
	<input type="text" class="form-control" name="descripcion" id="descripcion">
	<label for="fecha_inicio">Fecha de inicio</label>
	<input type="date" class="form-control" name="fecha_inicio" id="fecha_inicio">
	<label for="fecha_fin">Fecha Fin</label>
	<input type="date" class="form-control" name="fecha_fin" id="fecha_fin">
	<label for="estado">Cursos</label>
	<select class="custom-select " aria-label="Default select example" name="estado" >
	  <option selected>Selecione una opcion</option>
	  <option value="Proximamente">Proximamente</option>
	  <option value="En curso">En proceso</option>
	  <option value="Terminado">Terminado</option>
	</select>
		<br>
    <input type="submit" class="btn btn-primary" value="Guardar">
    <a class="pull-right" href="{{route('cursos.index')}} "><button type="button" class="btn btn-danger">Cancelar</button></a>
		
	</form>
</div>
</div>
</div>
</div>