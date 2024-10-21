@extends("menu1")

@section("izquierda")
<!-- Menú lateral con opciones relevantes para los puestos -->
@endsection

@section("derecha")
<div class="container">
    <h2>Lista de Puestos</h2>
    <table class="table table-bordered table-striped table-hover">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Ver</th> <!-- Columna para el botón "Ver" -->
                <th>Editar</th> <!-- Columna para el botón "Editar" -->
                <th>Eliminar</th> <!-- Columna para el botón "Eliminar" -->
            </tr>
        </thead>
        <tbody>
            @foreach ($puestos as $puesto)
                <tr>
                    <td>{{ $puesto->id }}</td>
                    <td>{{ $puesto->nombre }}</td>
                    <td>{{ $puesto->descripcion }}</td>
                    <!-- Botones para las acciones -->
                    <td>
                        <button class="btn btn-info btn-sm">Ver</button>
                    </td>
                    <td>
                        <button class="btn btn-warning btn-sm">Editar</button>
                    </td>
                    <td>
                        <button class="btn btn-danger btn-sm">Eliminar</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

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