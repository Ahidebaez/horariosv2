<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Presentacion Web App</title>
    
    <!-- Agrega el enlace a los archivos CSS y JS usando Vite -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

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
    <!-- Navbar con clases adaptadas y más corto -->
    <nav class="navbar navbar-expand-sm navbar-dark bg-primary p-1">
        <div class="container">
            <a class="navbar-brand" href="#">Web App</a>
            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('acerca') }}">Acerca de</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contacto') }}">Contáctanos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('ayuda') }}">Ayuda</a>
                </li>

                @guest
                    <li class="nav-item">
                        <a href="{{ route('login') }}" class="nav-link">Login</a>
                    </li>
                @endguest

                @auth
                    <li class="nav-item">
                        <form action="{{ route('logout') }}" method="POST" class="d-inline">
                            @csrf
                            <button class="btn btn-success btn-sm">Logout</button>
                        </form>
                    </li>
                @endauth
            </ul>
        </div>
    </nav>

    <div class="container mt-4">
        <h1>¡Bienvenido a nuestra Web App de Gestión de Proyectos!</h1>
        
        @yield('contenido1')

        @section('piepagina')
            <div class="row fixed-bottom bg-warning text-white text-center p-2">
                <div class="col-12">
                    <p class="mb-2">
                        <a href="https://laravel.com" target="_blank" class="text-white">Laravel</a> |
                        <a href="https://www.php.net" target="_blank" class="text-white">PHP</a> |
                        <a href="https://www.w3.org/standards/webdesign/htmlcss" target="_blank"
                            class="text-white">HTML/CSS</a> |
                        <a href="https://www.javascript.com" target="_blank" class="text-white">JavaScript</a> |
                        <a href="https://getbootstrap.com" target="_blank" class="text-white">Bootstrap</a>
                    </p>
                </div>
            </div>
        @endsection
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
</body>

</html>