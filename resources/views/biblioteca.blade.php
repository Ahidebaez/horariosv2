@extends("menu2")

@section("izquierda")
<!-- Menú lateral con opciones relevantes para el inventario de la biblioteca -->
<div class="list-group">
    <a href="#" class="list-group-item list-group-item-action list-group-item-primary">Agregar Libro</a>
    <a href="#" class="list-group-item list-group-item-action list-group-item-success">Buscar Libro</a>
    <a href="#" class="list-group-item list-group-item-action list-group-item-info">Listar Libros</a>
    <a href="#" class="list-group-item list-group-item-action list-group-item-warning">Categorías de Libros</a>
    <a href="#" class="list-group-item list-group-item-action list-group-item-danger">Historial de Préstamos</a>
</div>
@endsection

@section("derecha")
    <div class="container">
        <h3>Formulario de Inventario de la Biblioteca</h3>
        <p>Aquí podrás gestionar los libros, su búsqueda, y su historial de préstamos.</p>
        <!-- Puedes insertar aquí los formularios y vistas que necesites -->
    </div>
@endsection

@section("piepagina")
<div class="row fixed-bottom bg-success text-white text-center p-2">
    <p class="mb-0">Sistema de Inventario de la Biblioteca &copy; 2024</p>
</div>
@endsection
