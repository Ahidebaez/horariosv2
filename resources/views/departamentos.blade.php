<!-- resources/views/departamento.blade.php -->
@extends("menu2")

@section("izquierda")
<!-- Menú lateral con opciones relevantes para la gestión de departamentos -->
<div class="list-group">
    <a href="#" class="list-group-item list-group-item-action list-group-item-primary">Agregar Departamento</a>
    <a href="#" class="list-group-item list-group-item-action list-group-item-success">Buscar Departamento</a>
    <a href="#" class="list-group-item list-group-item-action list-group-item-info">Listar Departamentos</a>
    <a href="#" class="list-group-item list-group-item-action list-group-item-warning">Categorías de Departamentos</a>
    <a href="#" class="list-group-item list-group-item-action list-group-item-danger">Historial de Actividades</a>
</div>
@endsection

@section("derecha")
    <div class="container">
        <h3 class="my-4">Formulario de Gestión de Departamentos</h3>
        <p class="lead">
            En esta sección podrás gestionar la información de los departamentos, tanto en una biblioteca como en un edificio informático. Aquí podrás agregar nuevos departamentos, realizar búsquedas detalladas, listar todos los departamentos, categorizarlos según su función o ubicación, y consultar el historial de actividades o cambios realizados en cada departamento.
        </p>
        <!-- Puedes insertar aquí los formularios y vistas que necesites -->
    </div>
@endsection

@section("piepagina")
<div class="row fixed-bottom bg-success text-white text-center p-2">
    <div class="col-12">
        <p class="mb-0">Sistema de Gestión de Departamentos &copy; 2024</p>
    </div>
</div>
@endsection