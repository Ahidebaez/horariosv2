<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Presentacion Wep App</title>
    <!-- Agrega el enlace a Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Ajusta la altura y el espaciado del navbar */
        .navbar {
            padding: 0.3rem 0.5rem;
            /* Reduce el padding para hacerlo más corto */
        }

        .user-info {
            margin: 0.5rem;
            /* Reduce el margen para hacerlo más compacto */
        }

        .user-name {
            font-size: 1rem;
            /* Tamaño de fuente más pequeño */
            font-weight: 300;
            /* Fuente más delgada */
            display: inline-block;
            /* Recuadro más pequeño */
            border: 1px solid #afd4a0;
            /* Borde verde */
            padding: 3px 7px;
            /* Ajusta el relleno del recuadro */
            background-color: #e7fddf;
            /* Color de fondo verde */
            color: #12163bfb;
            /* Color de texto blanco claro */
        }
    </style>
</head>

<body>



    <!-- resources/views/layouts/menu2.blade.php -->
    @auth
        <nav class="navbar navbar-expand-lg navbar-dark bg-black">
            <div class="container">
                <a class="navbar-brand" href="#">WepApp</a>
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
                                <a class="nav-link dropdown-toggle"  id="catalogosDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Catálogos
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="catalogosDropdown">
                                    <li><a class="dropdown-item" href="{{ route('periodo') }}">Periodos</a></li>
                                    <li><a class="dropdown-item" href="{{ route('plazas') }}">Plazas</a></li>
                                    <li><a class="dropdown-item" href="{{ route('puestos') }}">Puestos</a></li>
                                    <li><a class="dropdown-item" href="{{ route('personal') }}">Personal</a></li>
                                    <li><a class="dropdown-item" href="{{ route('deptos') }}">Deptos.</a></li>
                                    <li><a class="dropdown-item" href="{{ route('carreras') }}">Carreras</a></li>
                                    <li><a class="dropdown-item" href="{{ route('reticulas') }}">Retículas</a></li>
                                    <li><a class="dropdown-item" href="{{ route('materias') }}">Materias</a></li>
                                    <li><a class="dropdown-item" href="#">Alumnos</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="horariosDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Horarios
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="horariosDropdown">
                                    <li><a class="dropdown-item" href="{{ route('docentes') }}">Docentes</a></li>
                                    <li><a class="dropdown-item" href="#">Alumnos</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="proyectosDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Proyectos Individuales
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="proyectosDropdown">
                                    <li><a class="dropdown-item" href="{{ route('capacitacion') }}">Capacitación</a></li>
                                    <li><a class="dropdown-item" href="{{ route('asesoria') }}"">Asesorías Doc.</a></li>
                                    <li><a class="dropdown-item" href="{{ route('proyectos') }}"">Proyectos</a></li>
                                    <li><a class="dropdown-item" href="{{ route('material') }}"">Material Didáctico</a></li>
                                    <li><a class="dropdown-item" href="{{ route('docencia') }}"">Docencia e Inv.</a></li>
                                    <li><a class="dropdown-item" href="{{ route('asesoriapro') }}"">Asesoría Proyectos Ext.</a></li>
                                    <li><a class="dropdown-item" href="{{ route('asesorias') }}"">Asesoría a S.S.</a></li>
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
                            <a class="nav-link dropdown-toggle" href="{{ route('periodo') }}" id="periodoDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
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

            {{-- <h1>Panel de Control</h1>
    <p>Aquí puedes acceder a las opciones de tu proyecto.</p>
</div> --}}
        @endauth

        <div class="container mt-4">

            @yield('contenido1')
        </div>


        <!-- Contenido principal -->
        <div class="container mt-10">
            <div class="row">

                <div class="col-md-2">
                    <!-- Aquí estará el menú lateral -->
                    @yield('izquierda')
                </div>
                <div class="col-md-4">
                    <!-- Aquí estará el contenido principal -->
                    @yield('derecha')
                </div>
            </div>
        </div>

        <!-- Pie de página -->
        @yield('piepagina')

        <!-- Agrega el script de Bootstrap JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
            integrity="sha384-oBqDVmMz4fnFO9gybYczD8UR9m5f+PTEy1NfT7LrZIMf10X4HRNFH0F/0mcqa1n" crossorigin="anonymous"></script>
</body>

</html>
