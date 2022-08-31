@include('app');
<div class="container">
	<div class="jumbotron">
   <div class="form-row align-items-center">
    <div class="form-group col-md-12">
	<h1>Crear alumno</h1>
	<form action="{{url('/alumnos')}}" method="post" enctype="multipart/from-data">
	@csrf
	<label for="nombre">Nombre de alumno</label>
	<input type="text" class="form-control" name="nombre" id="nombre">
	<label for="Apellido">Apellido</label>
	<input type="text" class="form-control" name="apellido" id="apellido">
	<label for="edad">Edad</label>
	<input type="number" class="form-control" name="edad" id="edad">
	<label for="ci">Ci</label>
	<input type="number" class="form-control" name="ci" id="ci">
	<label for="telefono">Telefono</label>
	<input type="number" class="form-control" name="telefono" id="telefono">
	<label for="direccion">Direccion</label>
	<input type="text" class="form-control" name="direccion" id="direccion">
	<label for="gmail">Gmail</label>
	<input type="gmail" class="form-control" name="gmail" id="gmail">
	<label for="profesion">Profesion</label>
	<input type="text" class="form-control" name="profesion" id="profesion">
	<label for="genero">Genero</label>
	<select class="custom-select " aria-label="Default select example" name="genero" >
	  <option selected>Selecione</option>
	  <option value="masculino">Masculino</option>
	  <option value="femenino">Femenino</option>
	  <option value="otro">Otros</option>
	</select>
	<label for="fechanac">Fecha de nacimiento</label>
	<input type="date" class="form-control" name="fechanac" id="fechanac">
	<br>
    <input type="submit" class="btn btn-primary" value="Guardar">
    <a class="pull-right" href="{{route('alumnos.index')}} "><button type="button" class="btn btn-danger">Cancelar</button></a>
		
	</form>
</div>
</div>
</div>
</div>
