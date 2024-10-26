{{-- @extends('menu1')

@section('izquierda')
    <!-- Menú lateral con opciones relevantes para el inventario de la biblioteca -->
@endsection

@section('derecha')
    <h1>Insertando los datos del Alumno</h1>
    <div class="container">
        <!-- Mostrar errores de validación -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Formulario de Creación de Alumno -->
        <form action="{{ route('alumnos.store') }}" method="POST">
            @csrf
            <!-- Nombre -->
            <div class="mb-3 row">
                <label for="nombre" class="col-4 col-form-label">Nombre</label>
                <div class="col-8">
                    <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre del alumno"
                        value="{{ old('nombre') }}">
                    @error('nombre')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <!-- Apellido Paterno -->
            <div class="mb-3 row">
                <label for="apellidop" class="col-4 col-form-label">Apellido Paterno</label>
                <div class="col-8">
                    <input type="text" class="form-control" name="apellidop" id="apellidop"
                        placeholder="Apellido paterno" value="{{ old('apellidop') }}">
                    @error('apellidop')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <!-- Apellido Materno -->
            <div class="mb-3 row">
                <label for="apellidom" class="col-4 col-form-label">Apellido Materno</label>
                <div class="col-8">
                    <input type="text" class="form-control" name="apellidom" id="apellidom"
                        placeholder="Apellido materno" value="{{ old('apellidom') }}">
                    @error('apellidom')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <!-- Número de Control -->
            <div class="mb-3 row">
                <label for="noctrl" class="col-4 col-form-label">Número de Control (opcional)</label>
                <div class="col-8">
                    <input type="text" class="form-control" name="noctrl" id="noctrl" placeholder="Número de Control"
                        value="{{ old('noctrl') }}">
                    @error('noctrl')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <!-- Sexo -->
            <div class="mb-3 row">
                <label for="sexo" class="col-4 col-form-label">Sexo</label>
                <div class="col-8">
                    <select name="sexo" id="sexo" class="form-select">
                        <option value="" disabled selected>Seleccione una opción</option>
                        <option value="M" {{ old('sexo') == 'M' ? 'selected' : '' }}>Masculino</option>
                        <option value="F" {{ old('sexo') == 'F' ? 'selected' : '' }}>Femenino</option>
                    </select>
                    @error('sexo')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <!-- Email -->
            <div class="mb-3 row">
                <label for="email" class="col-4 col-form-label">Email</label>
                <div class="col-8">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email del alumno"
                        value="{{ old('email') }}">
                    @error('email')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <!-- Carrera -->
            <div class="mb-3 row">
                <label for="carrera_id" class="col-4 col-form-label">Carrera</label>
                <div class="col-8">
                    <select name="carrera_id" id="carrera_id" class="form-select">
                        <option value="" disabled selected>Seleccione una carrera</option>
                        @foreach ($carreras as $carrera)
                            <option value="{{ $carrera->id }}" {{ old('carrera_id') == $carrera->id ? 'selected' : '' }}>
                                {{ $carrera->nombre }}
                            </option>
                        @endforeach
                    </select>
                    @error('carrera_id')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <!-- Botón de envío -->
            <button type="submit" class="btn btn-primary">Guardar</button>
            <a href="{{ route('alumnos.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
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
@endsection --}}