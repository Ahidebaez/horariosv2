@extends('menu1')


@section('derecha')
    <div class="container d-flex flex-column justify-content-center align-items-center vh-50">
        <div class="text-center">

            <!-- Contenido principal -->
            <div class="text-center mt-4">

                {{-- <h1>Bienvenido a la Web App</h1> --}}
                <p><i class="fas fa-smile"></i> ¡Bienvenido a nuestra Web App de Gestión de Proyectos! En esta plataforma
                    podrás explorar diversas herramientas para administrar catálogos, gestionar horarios y seguir el
                    progreso de proyectos individuales. Esta aplicación ha sido diseñada con tecnologías modernas como
                    Laravel, PHP y JavaScript, brindándote una experiencia fluida y eficaz en la organización de la
                    información. Siéntete libre de navegar y descubrir cómo estas herramientas pueden mejorar tus flujos de
                    trabajo. ¡Esperamos que disfrutes la experiencia!</p>
           

</div>
</div>
@endsection



@section('piepagina')
<div class="row fixed-bottom bg-warning text-white text-center p-2">
    <div class="col-12">
        <p class="mb-0">
            <a href="https://laravel.com" target="_blank" class="text-white">Laravel</a> |
            <a href="https://www.php.net" target="_blank" class="text-white">PHP</a> |
            <a href="https://www.w3.org/standards/webdesign/htmlcss" target="_blank" class="text-white">HTML/CSS</a> |
            <a href="https://www.javascript.com" target="_blank" class="text-white">JavaScript</a> |
            <a href="https://getbootstrap.com" target="_blank" class="text-white">Bootstrap</a>



            <a>
                @auth
                    <p class="mb-0">
                        <h4 class="user-name">
                            {{ Auth::user()->name }}
                            <p>{{ Auth::user()->email }}</p> <!-- Aquí obtienes el correo dinámicamente -->
                        </h4>
                    </p>
                @endauth
            </a>
            </a>
        </p>
    </div>
</div>
@endsection
