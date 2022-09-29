@include('app')
@include('menu')
<div class="container">
	<h1>Lista de Alumnos</h1>
	<a class="btn pull-righ" href="{{route('alumnos.create')}} "><button type="button" class="btn btn-primary">Nuevo</button></a>
		<form class="form-inline my-2 my-lg-0 float-right">
              <input name="buscarpor" class="form-control mr-sm-2" type="search" placeholder="Buscar por nombre" aria-label="Search">
              <button class="btn btn-success" type="submit">Buscar</button>
              </form>
              <br>
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
				<th>Opciones</th>				
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
			 <td>
			 	<div class="btn-group">
			 	<a href="{{url('/alumnos/'.$a->id.'/edit')}}">
			 	<input type="submit"  class="btn btn-warning" value="Editar">
			 	</a>
                <form method="POST" action="{{ url("alumnos/{$a->id}") }}">
			      @csrf
			      @method('DELETE')
			      <input type="submit" class="btn btn-danger" onclick="return confirm('Estas seguro?')" value="Borrar">
			    </form>
                
                	<a href="{{route('alumnos.show', $a->id )}}"><input type="submit" class="btn btn-info" value="Ver"> </a>
                </div>
                </td>
            </tr>
			@endforeach
		</tbody>
	</table>
	<div class="d-flex justify-content-end">
    {{ $alumnos->links() }}
    <div class="pull-right mr-3">
   </div> 
  </tbody>
 </div>
</div>