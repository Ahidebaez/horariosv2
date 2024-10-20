<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    public $alumnos;

    /**
     * Muestra una lista de los recursos (Vista de lista de alumnos).
     */
    public function index()
    {
        // Traemos todos los alumnos
        $alumnos = Alumno::all();
        
        // Pasamos los alumnos a la vista
        // return view('alumnos.index', ['alumnos' => $alumnos]);
          // Pasar los alumnos a la vista 'home'
          return view('home', ['alumnos' => $alumnos]);
    }

    /**
     * Muestra el formulario para crear un nuevo recurso (Vista para crear un alumno).
     */
    public function create()
    {
        // Pasamos una variable vacía para el formulario de creación
        return view('alumnos.create');
    }

    /**
     * Almacena un nuevo recurso en la base de datos.
     */
    public function store(Request $request)
    {
        // Validar y almacenar el nuevo alumno
        $validatedData = $request->validate([
            'nombre' => 'required|max:255',
            'apellidop' => 'required|max:255',
            'email' => 'required|email|unique:alumnos,email',
        ]);

        Alumno::create($validatedData);
        return redirect()->route("alumnos.index")->with('success', 'Alumno creado con éxito.');
    }

    /**
     * Muestra el formulario para editar un recurso específico (Vista para editar un alumno).
     */
    public function edit(Alumno $alumno)
    {
        // Mostramos el formulario para editar un alumno
        return view("alumnos.edit", ["alumno" => $alumno]);
    }

    /**
     * Actualiza un recurso específico en la base de datos.
     */
    public function update(Request $request, Alumno $alumno)
    {
        // Validar y actualizar el alumno
        $validatedData = $request->validate([
            'nombre' => 'required|max:255',
            'apellidop' => 'required|max:255',
            'email' => 'required|email|unique:alumnos,email,' . $alumno->id,
        ]);

        $alumno->update($validatedData);

        // Redirigir a la lista de alumnos con un mensaje de éxito
        return redirect()->route('alumnos.index')->with('success', 'Alumno actualizado con éxito.');
    }

    /**
     * Elimina un recurso específico de la base de datos.
     */
    public function destroy(Alumno $alumno)
    {
        // Elimina el alumno de la base de datos
        $alumno->delete();

        // Redirige de vuelta a la lista de alumnos con un mensaje de éxito
        return redirect()->route('alumnos.index')->with('success', 'Alumno eliminado con éxito.');
    }
    
    /**
     * Muestra un recurso específico (Vista para mostrar los detalles de un alumno).
     */
    public function show(Alumno $alumno)
    {
        // Pasamos los datos del alumno a la vista
        return view('alumnos.show', ['alumno' => $alumno]);
    }
}