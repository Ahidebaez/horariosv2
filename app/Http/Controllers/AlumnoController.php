<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use App\Models\Depto;
use App\Models\Carrera;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    /**
     * Muestra una lista paginada de los alumnos, con búsqueda opcional.
     */
    public function index(Request $request)
    {
        $txtbuscar = $request->input('txtbuscar', ''); // Obtén el texto de búsqueda si existe
        $alumnos = Alumno::with('carrera.depto') // Relación con 'carrera' y 'depto'
                        ->where('nombre', 'like', "$txtbuscar%")
                        ->paginate(5); // Paginación de 5 elementos

        $deptos = Depto::all(); // Obtener todos los departamentos

        return view('alumnos.index', ['alumnos' => $alumnos, 'deptos' => $deptos]);
    }

    /**
     * Muestra el formulario para crear un nuevo alumno.
     */
    public function create()
    {
        $alumno = new Alumno;
        $carreras = Carrera::all(); // Obtener todas las carreras
    
        return view('alumnos.create', [
            'alumno' => $alumno,
            'carreras' => $carreras, // Pasa las carreras a la vista como parte del arreglo asociativo
            'accion' => 'C',
            'des' => '',
            'txtbtn' => 'INSERTAR'
        ]);
    }

    /**
     * Almacena un nuevo alumno en la base de datos.
     */
    public function store(Request $request)
    {
        // Validar y almacenar el nuevo alumno
        $validatedData = $request->validate([
            'nombre' => 'required|min:3|max:50|regex:/^[\p{L}\s]+$/u',
            'apellidop' => 'required|max:255',
            'apellidom' => 'required|max:255',
            'sexo' => 'required|in:M,F',
            'email' => 'required|email|unique:alumnos,email',
            'carrera_id' => 'required|exists:carreras,id', // Validar la carrera seleccionada
        ]);
    
        // Asigna un valor temporal a 'noctrl' si está vacío
        $validatedData['noctrl'] = $request->input('noctrl') ?? 'TEMP123';
    
        Alumno::create($validatedData);
        return redirect()->route('alumnos.index')->with('mensaje', 'Alumno creado correctamente.');
    }

    /**
     * Muestra los detalles de un alumno específico.
     */
    public function show(Alumno $alumno)
    {
        return view('alumnos.show', [
            'alumno' => $alumno,
            'accion' => 'S',
            'des' => 'disabled',
            'txtbtn' => 'ELIMINAR'
        ]);
    }

    /**
     * Muestra el formulario para editar un alumno existente.
     */
    public function edit(Alumno $alumno)
    {
        return view('alumnos.edit', [
            'alumno' => $alumno,
            'accion' => 'E',
            'des' => 'enabled',
            'txtbtn' => 'EDITAR'
        ]);
    }

    /**
     * Actualiza un alumno en la base de datos.
     */
    public function update(Request $request, Alumno $alumno)
    {
        // Validar y actualizar el alumno
        $validatedData = $request->validate([
            'nombre' => 'required|min:3|max:50|regex:/^[\p{L}\s]+$/u',
            'apellidop' => 'required|max:255',
            'apellidom' => 'required|max:255',
            'email' => 'required|email|unique:alumnos,email,' . $alumno->id,
            'carrera_id' => 'required|exists:carreras,id', // Validar la carrera seleccionada
        ]);

        // Asigna un valor a 'noctrl' si está vacío en la solicitud
        $validatedData['noctrl'] = $request->input('noctrl') ?? $alumno->noctrl;

        $alumno->update($validatedData);
        return redirect()->route('alumnos.index')->with('mensaje', 'Alumno actualizado correctamente.');
    }

    /**
     * Elimina un alumno de la base de datos.
     */
    public function destroy(Alumno $alumno)
    {
        $alumno->delete();
        return redirect()->route('alumnos.index')->with('mensaje', 'Alumno eliminado correctamente.');
    }
}