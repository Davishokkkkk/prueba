@include('app')
@include('menu')
<div class="container">
	<div class="jumbotron">
   <div class="form-row align-items-center">
    <div class="form-group col-md-12">
	<h1>Crear curso</h1>
	<form action="{{url('/cursos/'.$cursos->id)}}" method="post" enctype="multipart/from-data">
	@csrf
	{{method_field('PATCH')}}
	<label for="nombre">Nombre del curso</label>
	<input type="text" class="form-control" name="nombre" id="nombre" value="{{$cursos->nombre}}">
	<label for="descripcion">Descripcion</label>
	<input type="text" class="form-control" name="descripcion" id="descripcion" value="{{$cursos->descripcion}}">
	<label for="fecha_inicio">Fecha de inicio</label>
	<input type="date" class="form-control" name="fecha_inicio" id="fecha_inicio" value="{{$cursos->fecha_inicio}}">
	<label for="fecha_fin">Fecha Fin</label>
	<input type="date" class="form-control" name="fecha_fin" id="fecha_fin" value="{{$cursos->fecha_fin}}">
	<label for="estado">Estado</label>
	<select class="custom-select " aria-label="Default select example" value="estado">
	  <option selected>Selecione una opcion</option>
	  <option value="Proximamente"{{$cursos->estado =='Proximamente'? 'selected' : ''}}>Proximamente</option>
	  <option value="En curso" {{$cursos->estado =='En curso'? 'selected' : ''}}>En curso</option>
	  <option value="Terminado" {{$cursos->estado =='Terminado'? 'selected' : ''}}>Terminado</option>
	</select>
		<br>
    <input type="submit" class="btn btn-primary" value="Guardar">
    <a class="pull-right" href="{{route('cursos.index')}} "><button type="button" class="btn btn-danger">Cancelar</button></a>
		
	</form>
</div>
</div>
</div>
</div>
