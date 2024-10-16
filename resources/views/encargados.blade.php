<!-- resources/views/encargados.blade.php -->
@extends("menu2")

@section("izquierda")
<!-- Menú lateral con opciones relevantes para la gestión de encargados -->
<div class="list-group">
    <a href="#" class="list-group-item list-group-item-action list-group-item-primary">Agregar Encargado</a>
    <a href="#" class="list-group-item list-group-item-action list-group-item-success">Buscar Encargado</a>
    <a href="#" class="list-group-item list-group-item-action list-group-item-info">Listar Encargados</a>
    <a href="#" class="list-group-item list-group-item-action list-group-item-warning">Categorías de Encargados</a>
    <a href="#" class="list-group-item list-group-item-action list-group-item-danger">Historial de Asignaciones</a>
</div>
@endsection

@section("derecha")
    <div class="container">
        <h3 class="my-4">Formulario de Gestión de Encargados</h3>
        <p class="lead">
            En esta sección podrás gestionar la información de los encargados responsables de los equipos de cómputo, inmuebles y muebles. Aquí podrás agregar nuevos encargados, realizar búsquedas detalladas, listar todos los encargados, categorizarlos según el tipo de recurso que supervisan, y consultar el historial de asignaciones y actividades realizadas por cada encargado.
        </p>
        <!-- Puedes insertar aquí los formularios y vistas que necesites -->
    </div>
@endsection

@section("piepagina")
<div class="row fixed-bottom bg-success text-white text-center p-2">
    <div class="col-12">
        <p class="mb-0">Sistema de Gestión de Encargados &copy; 2024</p>
    </div>
</div>
@endsection