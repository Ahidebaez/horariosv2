@extends("menu2")

@section("izquierda")
<!-- Menú lateral con opciones relevantes para el inventario de la biblioteca -->

@section("derecha")
    <div class="container">
        <div class="container">
            <!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Menú con Buscador</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
  
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <!-- Icono y Nombre -->
      <a class="navbar-brand d-flex align-items-center" href="#">
        <i class="fas fa-book fa-lg me-2"></i>
        <span>MiAplicación</span>
      </a>
      
      <!-- Toggler button for mobile view -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      
      <!-- Search form -->
      <div class="collapse navbar-collapse" id="navbarNav">
        <form class="d-flex ms-auto">
          <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
          <button class="btn btn-danger" type="submit">Buscar</button>
        </form>

        <h2>Apertura De Materias</h2>
            <p></p>
      </div>
    </div>
  </nav>

  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
</body>
</html>
            




            
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

            {{-- <a>
                @auth
                    <p class="mb-0">
                        <h4 class="user-name">
                            {{ Auth::user()->name }}
                            <p>{{ Auth::user()->email }}</p> <!-- Aquí obtienes el correo dinámicamente -->
                        </h4>
                    </p>
                @endauth 
        </p>  --}}
     
    </div>
@endsection