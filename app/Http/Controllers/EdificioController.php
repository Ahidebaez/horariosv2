<?php

namespace App\Http\Controllers;

use App\Models\Edificio;
use Illuminate\Http\Request;

class EdificioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Obtener todos los edificios con paginación
        $edificios = Edificio::paginate(3); // Ajusta el número de registros por página
        return view('edificios.index', compact('edificios'));
    }

    /**
     * Store a newly created resource in storage.
     */
   // Método para almacenar un nuevo edificio
public function store(Request $request)
{
    // Validación
    $validated = $request->validate([
        'nombre_edificio' => 'required|string|max:255',
        'nombre_corto' => 'required|string|max:5',
    ]);

    // Crear un nuevo edificio
    Edificio::create($validated);

    return redirect()->route('edificios.index')->with('success', 'Nuevo edificio agregado exitosamente');
}



    /**
     * Display the specified resource.
     */
    public function show(Edificio $edificio)
    {
        return view('edificios.show', compact('edificio'));
    }

    /**
     * Update the specified resource in storage.
     */
// Método para actualizar un edificio
public function update(Request $request, $id)
{
    $edificio = Edificio::findOrFail($id);

    // Validación
    $validated = $request->validate([
        'nombre_edificio' => 'required|string|max:255',
        'nombre_corto' => 'required|string|max:5',
    ]);

    // Actualizar los datos del edificio
    $edificio->update($validated);

    return redirect()->route('edificios.index')->with('success', 'Edificio actualizado exitosamente');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Edificio $edificio)
    {
        // Eliminar el edificio
        $edificio->delete();

        // Redirigir con mensaje de éxito
        return redirect()->route('edificios.index')->with('success', 'Edificio eliminado exitosamente.');
    }
}