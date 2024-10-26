<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Presentacion Web App</title>

    <!-- Usando Vite para manejar los assets -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        /* Ajusta la altura y el espaciado del navbar */
        .navbar {
            padding: 0.3rem 0.5rem;
        }

        .user-info {
            margin: 0.5rem;
        }

        .user-name {
            font-size: 1rem;
            font-weight: 300;
            display: inline-block;
            border: 1px solid #afd4a0;
            padding: 3px 7px;
            background-color: #e7fddf;
            color: #12163bfb;
        }
    </style>
</head>

<body>
    @auth
        <nav class="navbar navbar-expand-lg navbar-dark bg-black">
            <div class="container">
                <a class="navbar-brand" href="#">WebApp</a>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        {{-- <a class="nav-link" href="#">Opciones de la Web App</a> --}}
                    </li>
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Home</a>
                        </li>

                        <ul class="nav flex-row">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="catalogosDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Catálogos
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="catalogosDropdown">
                                    <li><a class="dropdown-item" href="#">Periodos</a></li>
                                    <li><a class="dropdown-item" href="#">Plazas</a></li>
                                    <li><a class="dropdown-item" href="#">Puestos</a></li>
                                    <li><a class="dropdown-item" href="#">Personal</a></li>
                                    <li><a class="dropdown-item" href="#">Deptos.</a></li>
                                    <li><a class="dropdown-item" href="#">Carreras</a></li>
                                    <li><a class="dropdown-item" href="#">Retículas</a></li>
                                    <li><a class="dropdown-item" href="#">Materias</a></li>
                                    <li><a class="dropdown-item" href="#">Alumnos</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="horariosDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Horarios
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="horariosDropdown">
                                    <li><a class="dropdown-item" href="{{ route('docentes') }}">Docentes</a></li>
                                    <li><a class="dropdown-item" href="#">Alumnos</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="proyectosDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Proyectos Individuales
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="proyectosDropdown">
                                    <li><a class="dropdown-item" href="{{ route('capacitacion') }}">Capacitación</a></li>
                                    <li><a class="dropdown-item" href="{{ route('asesoria') }}">Asesorías Doc.</a></li>
                                    <li><a class="dropdown-item" href="{{ route('proyectos') }}">Proyectos</a></li>
                                    <li><a class="dropdown-item" href="{{ route('material') }}">Material Didáctico</a></li>
                                    <li><a class="dropdown-item" href="{{ route('docencia') }}">Docencia e Inv.</a></li>
                                    <li><a class="dropdown-item" href="{{ route('asesoriapro') }}">Asesoría Proyectos Ext.</a></li>
                                    <li><a class="dropdown-item" href="{{ route('asesorias') }}">Asesoría a S.S.</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('instrumentacion') }}">Instrumentación</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('tutorias') }}">Tutorías</a>
                            </li>
                        </ul>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="periodoDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Periodo
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="periodoDropdown">
                                <li class="dropdown-item">
                                    <select class="form-select" aria-label="Seleccionar periodo">
                                        <option value="ene-jun-24">Ene-Jun 24</option>
                                        <option value="ago-dic-24">Ago-Dic 24</option>
                                        <option value="ene-jun-25">Ene-Jun 25</option>
                                    </select>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button class="btn btn-danger">Logout</button>
                            </form>
                        </li>
                    </ul>
            </div>
        </nav>
        <div class="container mt-5">
        @endauth

        <div class="container mt-4">
            @yield('contenido1')
        </div>

        <div class="container mt-10">
            <div class="row">
                <div class="col-md-2">
                    @yield('izquierda')
                </div>
                <div class="col-md-4">
                    @yield('derecha')
                </div>
            </div>
        </div>

        @yield('piepagina')

        <!-- Scripts de Bootstrap gestionados con Vite -->
        @vite(['resources/js/app.js'])
</body>

</html>
