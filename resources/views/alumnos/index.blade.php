<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<div class="container">
	<h1>Lista de Alumnos</h1>
	<a class="d-flex justify-content-end" href="{{route('alumnos.create')}} "><button type="button" class="btn btn-primary">Nuevo</button></a>
<div class="table-responsive-sm">
	<table class="table table-hover" id="tabla">
		<thead>
			<tr>
				<th>Nombre</th>
				<th>Apellido</th>
				<th>Edad</th>
				<th>ci</th>
				<th>Telefono</th>
				<th>Direccion</th>
				<th>Gmail</th>
				<th>Profesion</th>
				<th>Genero</th>
					<th>Fecha de nacimineto</th>				
			</tr>
		</thead>
		<tbody>
			@foreach ($alumnos as $a)
			<tr>
				<td>{{$a->nombre}}</td>
				<td>{{$a->apellido}}</td>
				<td>{{$a->edad}}</td>
				<td>{{$a->ci}}</td>
				<td>{{$a->telefono}}</td>
				<td>{{$a->direccion}}</td>
				<td>{{$a->gmail}}</td>
				<td>{{$a->profesion}}</td>
				<td>{{$a->genero}}</td>
				<td>{{$a->fechanac}}</td>
			 <td><input type="button" class="btn btn-warning" value="Editar"></td>
            <td>
                <form method="POST" action="{{ url("alumnos/{$a->id}") }}">
			      @csrf
			      @method('DELETE')
			      <input type="submit" class="btn btn-danger" onclick="return confirm('Estas seguro?')" value="Borrar">
			    </form>
                </td>
            </tr>
			@endforeach
		</tbody>
	</table>
    <div class="d-flex justify-content-end">
    {{ $alumnos->links() }}
    </div>
   </div> 
  </tbody>
 </div>
</div>