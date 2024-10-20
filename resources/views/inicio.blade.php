<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Presentacion Wep App</title>
    <!-- Agrega el enlace a Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
   

  <body>
    
 

   <!-- Contenido principal -->
   <div class="container mt-10">
    <div class="row">
        @include('menu1')
        <div class="col-md-2">
            <!-- Aquí estará el menú lateral -->
            @yield('izquierda')
        </div>
        <div class="col-md-4">
            <!-- Aquí estará el contenido principal -->
            <div class="text-center mt-4">

                {{-- <h1>Bienvenido a la Web App</h1> --}}
                <p><i class="fas fa-smile"></i> ¡Bienvenido a nuestra Web App de Gestión de Proyectos! En esta plataforma
                    podrás explorar diversas herramientas para administrar catálogos, gestionar horarios y seguir el
                    progreso de proyectos individuales. Esta aplicación ha sido diseñada con tecnologías modernas como
                    Laravel, PHP y JavaScript, brindándote una experiencia fluida y eficaz en la organización de la
                    información. Siéntete libre de navegar y descubrir cómo estas herramientas pueden mejorar tus flujos de
                    trabajo. ¡Esperamos que disfrutes la experiencia!</p>
            @yield('derecha')
        </div>
    </div>
</div>



   
   
 
</body>
</html>