<?php

namespace App\Http\Controllers;

use App\Models\Lugar;
use App\Models\Edificio;
use Illuminate\Http\Request;

class LugarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $lugares = Lugar::with('edificio')->paginate(3); // Paginación de 3 registros por página
    $edificios = Edificio::all(); // Obtener todos los edificios
    return view('lugares.index', compact('lugares', 'edificios'));
}


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre_lugar' => 'required|string|max:25|unique:lugars,nombre_lugar',
            'nombre_corto' => 'required|string|max:5',
            'edificio_id' => 'required|exists:edificios,id',
        ]);
    
        Lugar::create([
            'nombre_lugar' => $request->nombre_lugar,
            'nombre_corto' => $request->nombre_corto,
            'edificio_id' => $request->edificio_id,
        ]);
    
        return redirect()->route('lugares.index')->with('success', 'Lugar creado exitosamente.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Lugar $lugar)
    {
        return response()->json($lugar);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Lugar $lugar)
    {
        $request->validate([
            'nombre_lugar' => 'required|string|max:25|unique:lugars,nombre_lugar,' . $lugar->id,
            'nombre_corto' => 'required|string|max:5',
            'edificio_id' => 'required|exists:edificios,id',
        ]);
    
        $lugar->update([
            'nombre_lugar' => $request->nombre_lugar,
            'nombre_corto' => $request->nombre_corto,
            'edificio_id' => $request->edificio_id,
        ]);
    
        return redirect()->route('lugares.index')->with('success', 'Lugar actualizado exitosamente.');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lugar $lugar)
    {
        $lugar->delete();
        return redirect()->route('lugares.index')->with('success', 'Lugar eliminado con éxito.');
    }
}