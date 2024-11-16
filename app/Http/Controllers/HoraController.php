<?php

namespace App\Http\Controllers;

use App\Models\Hora;
use Illuminate\Http\Request;

class HoraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $horas = Hora::all(); // Obtiene todos los registros
        $horas = Hora::paginate(5); // Cambia el número según las filas por página que desees
        return view('horas.index', compact('horas')); // Pasa los registros a la vista
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $hora = new Hora;
        $hora->hora_ini = $request->hora_ini;
        $hora->hora_fin = $request->hora_fin;
        $hora->save();
    
        // Mensaje de éxito
        session()->flash('success', 'Horario agregado exitosamente.');
    
        return redirect()->route('horas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $horas = Hora::paginate(10);
        $horaSeleccionada = Hora::findOrFail($id);
    
        return view('horas.index', compact('horas', 'horaSeleccionada'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Hora $hora)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $hora = Hora::findOrFail($id);
        $hora->hora_ini = $request->hora_ini;
        $hora->hora_fin = $request->hora_fin;
        $hora->save();
    
        // Mensaje de éxito
        session()->flash('success', 'Horario modificado exitosamente.');
    
        return redirect()->route('horas.index');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $hora = Hora::findOrFail($id);
        $hora->delete();
    
        // Mensaje de éxito
        session()->flash('success', 'Horario eliminado exitosamente.');
    
        return redirect()->route('horas.index');
    }
}
