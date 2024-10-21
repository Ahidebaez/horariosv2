<?php

namespace App\Http\Controllers;

use App\Models\Puesto;
use Illuminate\Http\Request;

class PuestoController extends Controller
{
    /**
     * Muestra una lista de los recursos (Vista de lista de puestos).
     */
    public function index()
    {
        // Traemos todos los puestos
        $puestos = Puesto::all();
        
        // Pasamos los puestos a la vista
        return view('puestos.index', ['puestos' => $puestos]);
    }

    /**
     * Muestra el formulario para crear un nuevo recurso (Vista para crear un puesto).
     */
    public function create()
    {
        // Mostramos el formulario para crear un nuevo puesto
        return view('puestos.create');
    }

    /**
     * Almacena un nuevo recurso en la base de datos.
     */
    public function store(Request $request)
    {
        // Validar los datos del nuevo puesto
        $validatedData = $request->validate([
            'nombre' => 'required|max:255',
            'descripcion' => 'required|max:500',
        ]);

        // Almacenar el nuevo puesto
        Puesto::create($validatedData);

        // Redirigir a la lista de puestos con un mensaje de éxito
        return redirect()->route('puestos.index')->with('success', 'Puesto creado con éxito.');
    }

    /**
     * Muestra el formulario para editar un recurso específico (Vista para editar un puesto).
     */
    public function edit(Puesto $puesto)
    {
        // Mostramos el formulario para editar un puesto
        return view('puestos.edit', ['puesto' => $puesto]);
    }

    /**
     * Actualiza un recurso específico en la base de datos.
     */
    public function update(Request $request, Puesto $puesto)
    {
        // Validar los datos actualizados del puesto
        $validatedData = $request->validate([
            'nombre' => 'required|max:255',
            'descripcion' => 'required|max:500',
        ]);

        // Actualizamos el puesto con los datos validados
        $puesto->update($validatedData);

        // Redirigir a la lista de puestos con un mensaje de éxito
        return redirect()->route('puestos.index')->with('success', 'Puesto actualizado con éxito.');
    }

    /**
     * Elimina un recurso específico de la base de datos.
     */
    public function destroy(Puesto $puesto)
    {
        // Elimina el puesto de la base de datos
        $puesto->delete();

        // Redirige de vuelta a la lista de puestos con un mensaje de éxito
        return redirect()->route('puestos.index')->with('success', 'Puesto eliminado con éxito.');
    }

    /**
     * Muestra un recurso específico (Vista para mostrar los detalles de un puesto).
     */
    public function show(Puesto $puesto)
    {
        // Pasamos los datos a la vista
        return view('puestos.show', ['puesto' => $puesto]);
    }
}