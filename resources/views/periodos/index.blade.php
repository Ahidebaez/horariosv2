@extends("menu1")

@section("izquierda")
<!-- Menú lateral con opciones relevantes para la gestión de periodos -->
@endsection

@section('derecha')
<div class="container">
    <h2>Lista de Períodos</h2>

    <!-- Formulario para insertar un nuevo período -->
    <form action="{{ route('periodos.store') }}" method="POST" class="mb-4">
        @csrf
        <div class="row">
            <div class="col-md-6 ">
                <label for="idPeriodo">ID Período</label>
                <input type="text" name="idPeriodo" id="idPeriodo" class="form-control" required>
            </div>
            <div class="col-md-6 ">
                <label for="periodo">Período</label>
                <input type="text" name="periodo" id="periodo" class="form-control" required>
            </div>
            <div class="col-md-6 ">
                <label for="descCorto">Descripción Corta</label>
                <input type="text" name="descCorto" id="descCorto" class="form-control" required>
            </div>
            <div class="col-md-6 ">
                <label for="fechaIni">Fecha Inicio</label>
                <input type="date" name="fechaIni" id="fechaIni" class="form-control" required>
            </div>
            <div class="col-md-6 ">
                <label for="fechaFin">Fecha Fin</label>
                <input type="date" name="fechaFin" id="fechaFin" class="form-control" required>
            </div>
            <div class="col-md-6 d-flex align-items-end">
                <button type="submit" class="btn btn-primary">Insertar Período</button>
            </div>
        </div>
    </form>

    <hr>
    <!-- Tabla de períodos -->
    <table class="table table-bordered table-striped table-hover table-sm">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>ID Período</th>
                <th>Período</th>
                <th>Descripción Corta</th>
                <th>Fecha Inicio</th>
                <th>Fecha Fin</th>
                <th>Ver</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($periodos as $periodo)
                <tr>
                    <td>{{ $periodo->id }}</td>
                    <td>{{ $periodo->idPeriodo }}</td>
                    <td>{{ $periodo->periodo }}</td>
                    <td>{{ $periodo->descCorto }}</td>
                    <td>{{ $periodo->fechaIni }}</td>
                    <td>{{ $periodo->fechaFin }}</td>

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
                <li class="page-item{{ $periodos->onFirstPage() ? ' disabled' : '' }}">
                    <a class="page-link" href="{{ $periodos->previousPageUrl() }}" aria-label="Anterior">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>

                <!-- Links de páginas -->
                @for ($i = 1; $i <= $periodos->lastPage(); $i++)
                    <li class="page-item{{ $periodos->currentPage() == $i ? ' active' : '' }}">
                        <a class="page-link" href="{{ $periodos->url($i) }}">{{ $i }}</a>
                    </li>
                @endfor

                <!-- Botón siguiente -->
                <li class="page-item{{ $periodos->hasMorePages() ? '' : ' disabled' }}">
                    <a class="page-link" href="{{ $periodos->nextPageUrl() }}" aria-label="Siguiente">
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