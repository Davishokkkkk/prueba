@include('app');
<div class="container">
	<div class="jumbotron">
   <div class="form-row align-items-center">
    <div class="form-group col-md-12">
	<h1>Datelle alumno</h1>
	<label for="nombre">Nombre de alumno</label>
	<input type="text" class="form-control" name="nombre" id="nombre" value="{{$alumnos->nombre}}" disabled="true">
	<label for="Apellido">Apellido</label>
	<input type="text" class="form-control" name="apellido" id="apellido" value="{{$alumnos->apellido}}" disabled="true">
	<label for="edad">Edad</label>
	<input type="number" class="form-control" name="edad" id="edad" value="{{$alumnos->edad}}" disabled="true">
	<label for="ci">Ci</label>
	<input type="number" class="form-control" name="ci" id="ci" value="{{$alumnos->ci}}" disabled="true">
	<label for="telefono">Telefono</label>
	<input type="number" class="form-control" name="telefono" id="telefono" value="{{$alumnos->telefono}}" disabled="true">
	<label for="direccion">Direccion</label>
	<input type="text" class="form-control" name="direccion" id="direccion" value="{{$alumnos->direccion}}" disabled="true">
	<label for="gmail">Gmail</label>
	<input type="gmail" class="form-control" name="gmail" id="gmail" value="{{$alumnos->gmail}}" disabled="true">
	<label for="profesion">Profesion</label>
	<input type="text" class="form-control" name="profesion" id="profesion" value="{{$alumnos->profesion}}" disabled="true">
	<label for="genero">Genero</label>
	<select class="custom-select " aria-label="Default select example" name="genero" value="{{$alumnos->genero}}" disabled="true">
	  <option selected>Selecione</option>
	  <option value="masculino" {{$alumnos->genero =='masculino'? 'selected' : ''}}>Masculino</option>
	  <option value="femenino" {{$alumnos->genero =='femenino'? 'selected' : ''}}>Femenino</option>
	  <option value="otro" {{$alumnos->genero =='otro'? 'selected' : ''}}>Otros</option>
	</select>
	<label for="fechanac">Fecha de nacimiento</label>
	<input type="date" class="form-control" name="fechanac" id="fechanac" value="{{$alumnos->fechanac}}" disabled="true">
	<br>
    <a class="pull-right" href="{{route('alumnos.index')}} "><button type="button" class="btn btn-danger">Cancelar</button></a>
		
</div>
</div>
</div>
</div>