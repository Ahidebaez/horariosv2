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
            @yield('derecha')
        </div>
    </div>
</div>



   
   
 
</body>
</html>