@extends("menu1")

@section("izquierda")
<!-- Menú lateral con opciones relevantes para la gestión de retículas -->
@endsection

@section('derecha')
<div class="container">
    <h2>Lista de Retículas</h2>


    <table class="table table-bordered table-striped table-hover">
        <thead class="thead-dark">
    <!-- Formulario para insertar una nueva retícula -->
    <form action="{{ route('reticulas.store') }}" method="POST" class="mb-4">
        @csrf
        <div class="row">
            <div class="col-md-4">
                <label for="idReticula">ID Retícula</label>
                <input type="text" name="idReticula" id="idReticula" class="form-control" required>
            </div>
            <div class="col-md-8">
                <label for="Descripcion">Descripción</label>
                <input type="text" name="Descripcion" id="Descripcion" class="form-control" required>
            </div>
            <div class="col-md-8">
                <label for="fechaVigor">Fecha en Vigor</label>
                <select name="fechaVigor" id="fechaVigor" class="form-control" required>
                    <option value="">Selecciona una fecha</option>
                    <option value="2024-01-01">01/01/2024</option>
                    <option value="2024-02-01">01/02/2024</option>
                    <option value="2024-03-01">01/03/2024</option>
                    <!-- Agrega más opciones según sea necesario -->
                </select>
            </div>
            <div class="col-md-8">
                <label for="idCarrera">ID Carrera</label>
                <select name="idCarrera" id="idCarrera" class="form-control" required>
                    <option value="">Selecciona una carrera</option>
                    <option value="1">Ingeniería en Sistemas</option>
                    <option value="2">Ingeniería Industrial</option>
                    <option value="3">Licenciatura en Diseño</option>
                    <!-- Agrega más opciones según sea necesario -->
                </select>
            </div>
            <div class="col-md-3 d-flex align-items-end">
                <button type="submit" class="btn btn-primary">Insertar Retícula</button>
            </div>
        </div>
    </form>
    <hr>
    <!-- Tabla de retículas -->
    <table class="table table-bordered table-striped table-hover table-sm">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>ID Retícula</th>
                <th>Descripción</th>
                <th>Fecha en vigor</th>
                <th>ID Carrera</th>
                <th>Ver</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reticulas as $reticula)
                <tr>
                    <td>{{ $reticula->id }}</td>
                    <td>{{ $reticula->idReticula }}</td>
                    <td>{{ $reticula->Descripcion }}</td>
                    <td>{{ $reticula->fechaenvigor }}</td>
                    <td>{{ $reticula->idcarrera }}</td>
    
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
                <li class="page-item{{ $reticulas->onFirstPage() ? ' disabled' : '' }}">
                    <a class="page-link" href="{{ $reticulas->previousPageUrl() }}" aria-label="Anterior">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>

                <!-- Links de páginas -->
                @for ($i = 1; $i <= $reticulas->lastPage(); $i++)
                    <li class="page-item{{ $reticulas->currentPage() == $i ? ' active' : '' }}">
                        <a class="page-link" href="{{ $reticulas->url($i) }}">{{ $i }}</a>
                    </li>
                @endfor

                <!-- Botón siguiente -->
                <li class="page-item{{ $reticulas->hasMorePages() ? '' : ' disabled' }}">
                    <a class="page-link" href="{{ $reticulas->nextPageUrl() }}" aria-label="Siguiente">
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