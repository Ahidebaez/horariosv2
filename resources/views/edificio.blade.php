

<!-- resources/views/edificio.blade.php -->
@extends("menu2")

@section("izquierda")
<!-- Menú lateral con opciones relevantes para el inventario de equipo de cómputo -->
<div class="list-group">
    <a href="#" class="list-group-item list-group-item-action list-group-item-primary">Agregar Equipo</a>
    <a href="#" class="list-group-item list-group-item-action list-group-item-success">Buscar Equipo</a>
    <a href="#" class="list-group-item list-group-item-action list-group-item-info">Listar Equipos</a>
    <a href="#" class="list-group-item list-group-item-action list-group-item-warning">Categorías de Equipos</a>
    <a href="#" class="list-group-item list-group-item-action list-group-item-danger">Historial de Mantenimiento</a>
</div>
@endsection

@section("derecha")
    <div class="container">
        <h3 class="my-4">Formulario de Inventario de Equipos Informáticos</h3>
        <p class="lead">
            En esta sección podrás gestionar el inventario de equipos de cómputo del edificio. Aquí podrás agregar nuevos equipos, realizar búsquedas detalladas, listar todos los equipos disponibles, categorizar los equipos por tipo y consultar el historial de mantenimiento para cada equipo.
        </p>
        <!-- Puedes insertar aquí los formularios y vistas que necesites -->
    </div>
@endsection

@section("piepagina")
<div class="row fixed-bottom bg-success text-white text-center p-2">
    <div class="col-12">
        <p class="mb-0">Sistema de Inventario de Equipos Informáticos &copy; 2024</p>
    </div>
</div>
@endsection