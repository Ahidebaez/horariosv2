@extends("menu1")

@section("izquierda")
@endsection

@section('derecha')
<div class="container-fluid">
    <h2 class="text-center mb-4">Gestión de Edificios</h2>

    <!-- Mostrar mensaje de éxito -->
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Éxito!</strong> {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <!-- Botón para abrir el modal de creación de nuevo edificio -->
    <div class="mb-4 text-right">
        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#createModal">Agregar Nuevo Edificio</button>
    </div>

    <!-- Modal de creación de nuevo edificio -->
    <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="createModalLabel">Crear Nuevo Edificio</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('edificios.store') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <!-- Nombre del edificio -->
                        <div class="mb-3">
                            <label for="nombre_edificio" class="form-label">Nombre del Edificio</label>
                            <input type="text" class="form-control" id="nombre_edificio" name="nombre_edificio" required>
                        </div>
                        <!-- Nombre corto -->
                        <div class="mb-3">
                            <label for="nombre_corto" class="form-label">Nombre Corto</label>
                            <input type="text" class="form-control" id="nombre_corto" name="nombre_corto" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Tabla de edificios -->
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover text-center" style="width: 100%;">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Nombre Corto</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($edificios as $edificio)
                    <tr>
                        <td>{{ $edificio->id }}</td>
                        <td>{{ $edificio->nombre_edificio }}</td>
                        <td>{{ $edificio->nombre_corto }}</td>
                        <td>
                            <!-- Botón para abrir el modal de edición -->
                            <button class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#viewModal{{ $edificio->id }}">Ver</button>

                            <!-- Modal de edición -->
                            <div class="modal fade" id="viewModal{{ $edificio->id }}" tabindex="-1" aria-labelledby="viewModalLabel{{ $edificio->id }}" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="viewModalLabel{{ $edificio->id }}">Detalles del Edificio</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <form action="{{ route('edificios.update', $edificio->id) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <div class="modal-body">
                                                <!-- Nombre del edificio -->
                                                <div class="mb-3">
                                                    <label for="nombre_edificio" class="form-label">Nombre del Edificio</label>
                                                    <input type="text" class="form-control" id="nombre_edificio" name="nombre_edificio" value="{{ $edificio->nombre_edificio }}" required>
                                                </div>
                                                <!-- Nombre corto -->
                                                <div class="mb-3">
                                                    <label for="nombre_corto" class="form-label">Nombre Corto</label>
                                                    <input type="text" class="form-control" id="nombre_corto" name="nombre_corto" value="{{ $edificio->nombre_corto }}" required>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                                <button type="submit" class="btn btn-primary">Guardar cambios</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <!-- Formulario para eliminar edificio -->
                            <form action="{{ route('edificios.destroy', $edificio->id) }}" method="POST" class="d-inline" onsubmit="return confirm('¿Seguro que deseas eliminar este edificio?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Paginación -->
    <div class="d-flex justify-content-center mt-4">
        {{ $edificios->links('pagination::bootstrap-5') }}
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