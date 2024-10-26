@extends("menu1")

@section("izquierda")
<!-- Menú lateral con opciones relevantes para la gestión de departamentos -->
@endsection

@section('derecha')
<div class="container">
    <h2>Lista de Departamentos</h2>

    <!-- Formulario para insertar un nuevo departamento -->
    <form action="{{ route('deptos.store') }}" method="POST" class="mb-4">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <label for="iddepto">ID Departamento</label>
                <input type="text" name="iddepto" id="iddepto" class="form-control" required>
            </div>
            <div class="col-md-6">
                <label for="nombredepto">Nombre Departamento</label>
                <input type="text" name="nombredepto" id="nombredepto" class="form-control" required>
            </div>
            <div class="col-md-6">
                <label for="nombremediano">Nombre Mediano</label>
                <input type="text" name="nombremediano" id="nombremediano" class="form-control" required>
            </div>
            <div class="col-md-6">
                <label for="nombrecorto">Nombre Corto</label>
                <input type="text" name="nombrecorto" id="nombrecorto" class="form-control" required>
            </div>
            <div class="col-md-6 d-flex align-items-end">
                <button type="submit" class="btn btn-primary">Insertar Departamento</button>
            </div>
        </div>
    </form>

    <hr>
    <!-- Tabla de departamentos -->
    <table class="table table-bordered table-striped table-hover table-sm">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>ID Departamento</th>
                <th>Nombre Departamento</th>
                <th>Nombre Mediano</th>
                <th>Nombre Corto</th>
            
            </tr>
        </thead>
        <tbody>
            @foreach ($deptos as $depto)
                <tr>
                    <td>{{ $depto->id }}</td>
                    <td>{{ $depto->iddepto }}</td>
                    <td>{{ $depto->nombredepto }}</td>
                    <td>{{ $depto->nombremediano }}</td>
                    <td>{{ $depto->nombrecorto }}</td>
                    <td>
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
                <li class="page-item{{ $deptos->onFirstPage() ? ' disabled' : '' }}">
                    <a class="page-link" href="{{ $deptos->previousPageUrl() }}" aria-label="Anterior">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>

                <!-- Links de páginas -->
                @for ($i = 1; $i <= $deptos->lastPage(); $i++)
                    <li class="page-item{{ $deptos->currentPage() == $i ? ' active' : '' }}">
                        <a class="page-link" href="{{ $deptos->url($i) }}">{{ $i }}</a>
                    </li>
                @endfor

                <!-- Botón siguiente -->
                <li class="page-item{{ $deptos->hasMorePages() ? '' : ' disabled' }}">
                    <a class="page-link" href="{{ $deptos->nextPageUrl() }}" aria-label="Siguiente">
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