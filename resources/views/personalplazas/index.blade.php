 <!-- Formulario para agregar nuevos registros -->
 <form action="#" method="get">
    <button type="submit">Agregar Nuevo Personal</button>
</form>


<div class="container">
    <h1 class="mb-4">Lista de Personal y Plazas</h1>

    <!-- Botón de insertar (por ahora no tiene funcionalidad) -->
    {{-- <a href="#" class="btn btn-primary mb-3">Insertar Nuevo Registro</a> --}}

    <!-- Tabla para mostrar los registros -->
    <table border="1"
     class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tipo de Nombramiento</th>
                <th>Plaza ID</th>
                <th>Personal ID</th>
                <th>Fecha de Creación</th>
                <th>Fecha de Actualización</th>
            </tr>
        </thead>
        <tbody>
            @foreach($personalPlazas as $personalPlaza)
                <tr>
                    <td>{{ $personalPlaza->id }}</td>
                    <td>{{ $personalPlaza->tiponombramiento }}</td>
                    <td>{{ $personalPlaza->plaza_id }}</td>
                    <td>{{ $personalPlaza->personal_id }}</td>
                    <td>{{ $personalPlaza->created_at }}</td>
                    <td>{{ $personalPlaza->updated_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>



@section("piepagina")
<div class="row fixed-bottom bg-black text-white text-center p-2">
    <div class="col-12">
        <p class="mb-0">
            <a href="https://laravel.com" target="_blank" class="text-white">Laravel</a> |
            <a href="https://www.php.net" target="_blank" class="text-white">PHP</a> |
            <a href="https://www.w3.org/standards/webdesign/htmlcss" target="_blank" class="text-white">HTML/CSS</a> |
            <a href="https://www.javascript.com" target="_blank" class="text-white">JavaScript</a> |
            <a href="https://getbootstrap.com" target="_blank" class="text-white">Bootstrap</a>
        </p>
    </div>
</div>
@endsection