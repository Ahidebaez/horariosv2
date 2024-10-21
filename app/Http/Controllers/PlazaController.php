<?php

namespace App\Http\Controllers;

use App\Models\Plaza;
use Illuminate\Http\Request;

class PlazaController extends Controller
{
    /**
     * Muestra una lista de los recursos (Vista de lista de plazas).
     */
    public function index()
    {
        // Traemos todas las plazas
        $plazas = Plaza::all();
        
        // Pasamos las plazas a la vista
        return view('plazas.index', ['plazas' => $plazas]);
    }

    /**
     * Muestra el formulario para crear un nuevo recurso (Vista para crear una plaza).
     */
    public function create()
    {
        // Mostramos el formulario para crear una nueva plaza
        return view('plazas.create');
    }

    /**
     * Almacena un nuevo recurso en la base de datos.
     */
    public function store(Request $request)
    {
        // Validar los datos de la nueva plaza
        $validatedData = $request->validate([
            'nombre' => 'required|max:255',
            'tipo' => 'required|max:200',
        ]);

        // Almacenar la nueva plaza
        Plaza::create($validatedData);

        // Redirigir a la lista de plazas con un mensaje de éxito
        return redirect()->route('plazas.index')->with('success', 'Plaza creada con éxito.');
    }

    /**
     * Muestra el formulario para editar un recurso específico (Vista para editar una plaza).
     */
    public function edit(Plaza $plaza)
    {
        // Mostramos el formulario para editar una plaza
        return view('plazas.edit', ['plaza' => $plaza]);
    }

    /**
     * Actualiza un recurso específico en la base de datos.
     */
    public function update(Request $request, Plaza $plaza)
    {
        // Validar los datos actualizados de la plaza
        $validatedData = $request->validate([
            'nombre' => 'required|max:255',
            'tipo' => 'required|max:200',
        ]);

        // Actualizamos la plaza con los datos validados
        $plaza->update($validatedData);

        // Redirigir a la lista de plazas con un mensaje de éxito
        return redirect()->route('plazas.index')->with('success', 'Plaza actualizada con éxito.');
    }

    /**
     * Elimina un recurso específico de la base de datos.
     */
    public function destroy(Plaza $plaza)
    {
        // Elimina la plaza de la base de datos
        $plaza->delete();

        // Redirige de vuelta a la lista de plazas con un mensaje de éxito
        return redirect()->route('plazas.index')->with('success', 'Plaza eliminada con éxito.');
    }

    /**
     * Muestra un recurso específico (Vista para mostrar los detalles de una plaza).
     */
    public function show(Plaza $plaza)
    {
        // Pasamos los datos a la vista
        return view('plazas.show', ['plaza' => $plaza]);
    }

}