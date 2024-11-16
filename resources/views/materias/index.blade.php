@extends("menu1")

@section("izquierda")
<!-- Menú lateral con opciones relevantes para la gestión de materias -->
@endsection

@section('derecha')
<div class="container">
    <h2>Lista de Materias</h2>

    <!-- Formulario para insertar una nueva materia -->
    <form action="{{ route('materias.store') }}" method="POST" class="mb-4">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <label for="idMateria">ID Materia</label>
                <input type="text" name="idMateria" id="idMateria" class="form-control" required>
            </div>
            <div class="col-md-6">
                <label for="nombreMateria">Nombre Materia</label>
                <input type="text" name="nombreMateria" id="nombreMateria" class="form-control" required>
            </div>
            <div class="col-md-6">
                <label for="nivel">Nivel</label>
                <input type="text" name="nivel" id="nivel" class="form-control" required maxlength="1">
            </div>
            <div class="col-md-6">
                <label for="nombreMediano">Nombre Mediano</label>
                <input type="text" name="nombreMediano" id="nombreMediano" class="form-control" required>
            </div>
            <div class="col-md-6">
                <label for="nombreCorto">Nombre Corto</label>
                <input type="text" name="nombreCorto" id="nombreCorto" class="form-control" required>
            </div>
            <div class="col-md-6">
                <label for="modalidad">Modalidad</label>
                <input type="text" name="modalidad" id="modalidad" class="form-control" required maxlength="1">
            </div>
            <div class="col-md-6">
                <label for="reticula_id">Retícula</label>
                <div class="form-control-plaintext">
                    <!-- Texto que indica que las retículas están disponibles -->
                    <input type="text" name="reticula" id="reticula_id" class="form-control" required>
                    {{-- <span class="badge bg-secondary">Retículas disponibles</span> --}}
                </div>
                <input type="hidden" name="reticula_id" value="#"> <!-- Opcional, si necesitas un valor predeterminado -->
            </div>
            <div class="col-md-6 d-flex align-items-end">
                <button type="submit" class="btn btn-primary">Insertar Materia</button>
            </div>
        </div>
    </form>

    <hr>
    <!-- Tabla de materias -->
    <table class="table table-bordered table-striped table-hover table-sm">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>ID Materia</th>
                <th>Nombre Materia</th>
                <th>Nivel</th>
                <th>Nombre Mediano</th>
                <th>Nombre Corto</th>
                <th>Modalidad</th>
                <th>Retícula</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($materias as $materia)
              
                <tr>
                    <td>{{ $materia->id }}</td>
                    <td>{{ $materia->idMateria }}</td>
                    <td>{{ $materia->nombreMateria }}</td>
                    <td>{{ $materia->nivel }}</td>
                    <td>{{ $materia->nombre_mediano }}</td> <!-- Asegúrate de que este campo está correcto -->
                    <td>{{ $materia->nombre_corto }}</td>  <!-- Asegúrate de que este campo está correcto -->
                    <td>{{ $materia->modalidad }}</td>
                    <td>{{ $materia->reticula_id }}</td> <!-- Muestra el ID de la retícula -->
                    {{-- <td>{{ $materia->reticula->nombre ?? 'No disponible' }}</td> <!-- Suponiendo que tienes la relación definida --> --}}
                    <!-- Botones desactivados -->
                    <td>
                        <button class="btn btn-info btn-sm" disabled>Ver</button>
                    </td>
                    <td>
                        <button class="btn btn-warning btn-sm" disabled>Editar</button>
                    </td>
                    <td>
                        <button class="btn btn-danger btn-sm" disabled>Eliminar</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <style>
        /* Estilos personalizados para limitar el ancho de las columnas */
        th, td {
            max-width: 150px; /* Ajusta el ancho máximo según sea necesario */
            overflow: hidden;
            white-space: nowrap; /* Evita que el texto se divida en varias líneas */
            text-overflow: ellipsis; /* Agrega puntos suspensivos si el texto es demasiado largo */
        }
    </style>

    <!-- Paginación Bootstrap -->
    <div class="d-flex justify-content-center">
        <nav>
            <ul class="pagination">
                <!-- Botón anterior -->
                <li class="page-item{{ $materias->onFirstPage() ? ' disabled' : '' }}">
                    <a class="page-link" href="{{ $materias->previousPageUrl() }}" aria-label="Anterior">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>

                <!-- Links de páginas -->
                @for ($i = 1; $i <= $materias->lastPage(); $i++)
                    <li class="page-item{{ $materias->currentPage() == $i ? ' active' : '' }}">
                        <a class="page-link" href="{{ $materias->url($i) }}">{{ $i }}</a>
                    </li>
                @endfor

                <!-- Botón siguiente -->
                <li class="page-item{{ $materias->hasMorePages() ? '' : ' disabled' }}">
                    <a class="page-link" href="{{ $materias->nextPageUrl() }}" aria-label="Siguiente">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>
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