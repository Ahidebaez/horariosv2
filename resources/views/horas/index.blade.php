@extends("menu1")

@section("izquierda")
<!-- Espacio para el menú lateral -->
 <!-- Tarjeta para mostrar detalles del horario -->
 @if(isset($horaSeleccionada))
 <div class="card mt-4">
     <div class="card-header bg-primary text-white text-center">
         <h5>Detalles del Horario</h5>
     </div>
     <div class="card-body">
         <p><strong>ID:</strong> {{ $horaSeleccionada->id }}</p>
         <p><strong>Hora Inicio:</strong> {{ $horaSeleccionada->hora_ini }}</p>
         <p><strong>Hora Fin:</strong> {{ $horaSeleccionada->hora_fin }}</p>
     </div>
     <div class="card-footer text-center">
         <a href="{{ route('horas.index') }}" class="btn btn-secondary">Regresar</a>
     </div>
 </div>
 @endif
</div>
@endsection

@section('derecha')
<div class="container-fluid">
    <h2 class="text-center mb-4">Gestión de Horarios</h2>

    <!-- Mostrar mensaje de éxito -->
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Éxito!</strong> {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <!-- Formulario para agregar horario -->
    <form action="{{ route('horas.store') }}" method="POST" class="mb-4">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <label for="hora_ini">Hora Inicio</label>
                <input type="time" name="hora_ini" id="hora_ini" class="form-control" required>
            </div>
            <div class="col-md-6">
                <label for="hora_fin">Hora Fin</label>
                <input type="time" name="hora_fin" id="hora_fin" class="form-control" required>
            </div>
            <div class="col-md-12 mt-3">
                <button type="submit" class="btn btn-primary w-100">Agregar Horario</button>
            </div>
        </div>
    </form>

    <hr>

    <!-- Tabla de horarios -->
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover text-center" style="width: 100%;">
            <thead class="thead-dark">
                <tr>
                    <th style="width: 10%;">ID</th>
                    <th style="width: 35%;">Hora Inicio</th>
                    <th style="width: 35%;">Hora Fin</th>
                    <th style="width: 20%;">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($horas as $hora)
                    <tr>
                        <td>{{ $hora->id }}</td>
                        <td>{{ $hora->hora_ini }}</td>
                        <td>{{ $hora->hora_fin }}</td>
                        <td>
                            <!-- Botón para ver horario -->
                            <a href="{{ route('horas.show', $hora->id) }}" class="btn btn-info btn-sm">Ver</a>

                            <!-- Botón para editar horario -->
                            <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editModal{{ $hora->id }}">Editar</button>

                            <!-- Modal de edición -->
                            <div class="modal fade" id="editModal{{ $hora->id }}" tabindex="-1" aria-labelledby="editModalLabel{{ $hora->id }}" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="editModalLabel{{ $hora->id }}">Editar Horario</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ route('horas.update', $hora->id) }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <div class="mb-3">
                                                    <label for="hora_ini" class="form-label">Hora Inicio</label>
                                                    <input type="time" name="hora_ini" value="{{ $hora->hora_ini }}" class="form-control" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="hora_fin" class="form-label">Hora Fin</label>
                                                    <input type="time" name="hora_fin" value="{{ $hora->hora_fin }}" class="form-control" required>
                                                </div>
                                                <button type="submit" class="btn btn-warning w-100">Actualizar</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Formulario para eliminar horario -->
                            <form action="{{ route('horas.destroy', $hora->id) }}" method="POST" class="d-inline" onsubmit="return confirm('¿Seguro que deseas eliminar este horario?')">
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
        {{ $horas->links('pagination::bootstrap-5') }}
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