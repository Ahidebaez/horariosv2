@extends("menu2")

@section("izquierda")
<!-- Menú lateral con opciones relevantes para el inventario de la biblioteca -->

@section("derecha")
    <div class="container">
        <div class="container">
            <h2>Proyectos</h2>
            <p>Esta es la página de información acerca de nuestra aplicación.</p>
        </div>
        <!-- Puedes insertar aquí los formularios y vistas que necesites -->
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

            <a>
                @auth
                    <p class="mb-0">
                        <h4 class="user-name">
                            {{ Auth::user()->name }}
                            <p>{{ Auth::user()->email }}</p> <!-- Aquí obtienes el correo dinámicamente -->
                        </h4>
                    </p>
                @endauth 
        </p> 
     
    </div>
@endsection