@extends("menu1")

@section("izquierda")
<!-- Menú lateral con opciones relevantes para el inventario de la biblioteca -->
@endsection

@section('derecha')
<div class="container">
    <h2>Lista de Alumnos</h2>

    <!-- Formulario para insertar un nuevo alumno -->
    <form action="{{ route('alumnos.store') }}" method="POST" class="mb-8">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <label for="noctrl">Número de Control</label>
                <input type="text" name="noctrl" id="noctrl" class="form-control" required>
            </div>
            <div class="col-md-6">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" id="nombre" class="form-control" required>
            </div>
            <div class="col-md-6">
                <label for="apellidop">Apellido Paterno</label>
                <input type="text" name="apellidop" id="apellidop" class="form-control" required>
            </div>
            <div class="col-md-6">
                <label for="apellidom">Apellido Materno</label>
                <input type="text" name="apellidom" id="apellidom" class="form-control" required>
            </div>
            <div class="col-md-6">
                <label for="sexo">Sexo</label>
                <select name="sexo" id="sexo" class="form-control" required>
                    <option value="">Selecciona</option>
                    <option value="M">Masculino</option>
                    <option value="F">Femenino</option>
                </select>
            </div>
            <div class="col-md-6">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>
            <div class="col-md-6">
                <label for="carrera_id">Carrera ID</label>
                <input type="text" name="carrera_id" id="carrera_id" class="form-control" required>
            </div>
            <div class="col-md-6 d-flex align-items-end">
                <button type="submit" class="btn btn-primary">Insertar Alumno</button>
            </div>
        </div>
    </form>
    <hr>
    <!-- Tabla de alumnos -->
    <table class="table table-bordered table-striped table-hover">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Número de Control</th>
                <th>Nombre</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Sexo</th>
                <th>Email</th>
                <th>Carrera ID</th>
                <th>Ver</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($alumnos as $alumno)
                <tr>
                    <td>{{ $alumno->id }}</td>
                    <td>{{ $alumno->noctrl }}</td>
                    <td>{{ $alumno->nombre }}</td>
                    <td>{{ $alumno->apellidop }}</td>
                    <td>{{ $alumno->apellidom }}</td>
                    <td>{{ $alumno->sexo }}</td>
                    <td>{{ $alumno->email }}</td>
                    <td>{{ $alumno->carrera_id }}</td>
                    <td><button class="btn btn-info btn-sm" disabled>Ver</button></td>
                    <td><button class="btn btn-warning btn-sm" disabled>Editar</button></td>
                    <td><button class="btn btn-danger btn-sm" disabled>Eliminar</button></td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Paginación Bootstrap -->
    <div class="d-flex justify-content-center">
        <nav>
            <ul class="pagination">
                <li class="page-item{{ $alumnos->onFirstPage() ? ' disabled' : '' }}">
                    <a class="page-link" href="{{ $alumnos->previousPageUrl() }}" aria-label="Anterior">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                @for ($i = 1; $i <= $alumnos->lastPage(); $i++)
                    <li class="page-item{{ $alumnos->currentPage() == $i ? ' active' : '' }}">
                        <a class="page-link" href="{{ $alumnos->url($i) }}">{{ $i }}</a>
                    </li>
                @endfor
                <li class="page-item{{ $alumnos->hasMorePages() ? '' : ' disabled' }}">
                    <a class="page-link" href="{{ $alumnos->nextPageUrl() }}" aria-label="Siguiente">
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