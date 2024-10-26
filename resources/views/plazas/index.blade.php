@extends("menu1")

@section("izquierda")
<!-- Menú lateral con opciones relevantes para el inventario de plazas -->
@endsection

@section('derecha')
<div class="container">
    <h2>Lista de Plazas</h2>

    <!-- Formulario para insertar una nueva plaza -->
    <form action="{{ route('plazas.store') }}" method="POST" class="mb-4">
        @csrf
        <div class="row">
            <div class="col-md-8">
                <label for="idPlaza">ID Plaza</label>
                <input type="text" name="idPlaza" id="idPlaza" class="form-control" required>
            </div>
            <div class="col-md-8">
                <label for="nombrePlaza">Nombre de la Plaza</label>
                <input type="text" name="nombrePlaza" id="nombrePlaza" class="form-control" required>
            </div>
            <div class="col-md-4 d-flex align-items-end">
                <button type="submit" class="btn btn-primary">Insertar Plaza</button>
            </div>
        </div>
    </form>
    <hr>
    <!-- Tabla de plazas -->
    <table class="table table-bordered table-striped table-hover">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>ID Plaza</th>
                <th>Nombre de la Plaza</th>
                <th>Ver</th> <!-- Columna para el botón "Ver" -->
                <th>Editar</th> <!-- Columna para el botón "Editar" -->
                <th>Eliminar</th> <!-- Columna para el botón "Eliminar" -->
            </tr>
        </thead>
        <tbody>
            @foreach ($plazas as $plaza)
                <tr>
                    <td>{{ $plaza->id }}</td>
                    <td>{{ $plaza->idPlaza }}</td>
                    <td>{{ $plaza->nombrePlaza }}</td>

                    <!-- Botones para las acciones, actualmente sin funcionalidad -->
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
        <nav>
            <ul class="pagination">
                <!-- Botón anterior -->
                <li class="page-item{{ $plazas->onFirstPage() ? ' disabled' : '' }}">
                    <a class="page-link" href="{{ $plazas->previousPageUrl() }}" aria-label="Anterior">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>

                <!-- Links de páginas -->
                @for ($i = 1; $i <= $plazas->lastPage(); $i++)
                    <li class="page-item{{ $plazas->currentPage() == $i ? ' active' : '' }}">
                        <a class="page-link" href="{{ $plazas->url($i) }}">{{ $i }}</a>
                    </li>
                @endfor

                <!-- Botón siguiente -->
                <li class="page-item{{ $plazas->hasMorePages() ? '' : ' disabled' }}">
                    <a class="page-link" href="{{ $plazas->nextPageUrl() }}" aria-label="Siguiente">
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