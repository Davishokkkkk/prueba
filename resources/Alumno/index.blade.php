<div class="table-responsive-sm">
    <table class="table table-border" id="tabla">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Edad</th>
                <th>Ci</th>
                <th>Telefono</th>
                <th>Direccion</th>
            </tr>
        </thead>
        <tbody>
            @foreach($alumnos as $a)
            <tr>{{$a->nombre}}<tr>
            <tr>{{$a->apellido}}<tr>
            <tr>{{$a->edad}}<tr>
            <tr>{{$a->ci}}<tr>
            <tr>{{$a->telefono}}<tr>
            <tr>{{$a->direccion}}<tr>
            @endforeach
        </tbody>
    </table>
</div>
