@extends("menu1")

@section("izquierda")
<!-- Menú lateral con opciones relevantes para el inventario de puestos -->
@endsection

@section('derecha')
<div class="container">
    <h2>Lista de Puestos</h2>

    <!-- Formulario para insertar un nuevo puesto -->
    <form action="{{ route('puestos.store') }}" method="POST" class="mb-4">
        @csrf
        <div class="row">
            <div class="col-md-8">
                <label for="nombre">Nombre del Puesto</label>
                <input type="text" name="nombre" id="nombre" class="form-control" required>
            </div>
            <div class="col-md-8">
                <label for="tipo">Tipo</label>
                <input type="text" name="tipo" id="tipo" class="form-control" required>
            </div>
            <div class="col-md-4 d-flex align-items-end">
                <button type="submit" class="btn btn-primary">Insertar Puesto</button>
            </div>
        </div>
    </form>
    <hr>
    <!-- Tabla de puestos -->
    <table class="table table-bordered table-striped table-hover">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Nombre del Puesto</th>
                <th>Tipo</th>
                <th>Ver</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($puestos as $puesto)
                <tr>
                    <td>{{ $puesto->id }}</td>
                    <td>{{ $puesto->nombre }}</td>
                    <td>{{ $puesto->tipo }}</td>

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

    <!-- Paginación Bootstrap -->
    <div class="d-flex justify-content-center">
        {{ $puestos->onEachSide(1)->links('pagination::bootstrap-4') }}
    </div>
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