<?php

namespace App\Http\Controllers;

use App\Models\Reticula;
use Illuminate\Http\Request;

class ReticulaController extends Controller
{
    // Definición de las reglas de validación
    protected $val = [
        'idReticula' => 'required|string|max:15|unique:reticulas,idReticula',
        'Descripcion' => 'required|string|max:200',
        'fechaenvigor' => 'required|date',
        'idcarrera' => 'required|string|max:10',
    ];

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Obtener todas las retículas con paginación
        $reticulas = Reticula::paginate(10); // Cambia el número según tus necesidades

        return view('reticulas.index', compact('reticulas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('reticulas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate($this->val);

        Reticula::create($validatedData);

        return redirect()->route('reticulas.index')->with('success', 'Retícula creada con éxito.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Reticula $reticula)
    {
        return view('reticulas.show', compact('reticula'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reticula $reticula)
    {
        return view('reticulas.edit', compact('reticula'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reticula $reticula)
    {
        // Actualiza la regla de validación para la idReticula
        $this->val['idReticula'] = 'required|string|max:15|unique:reticulas,idReticula,' . $reticula->id;

        $validatedData = $request->validate($this->val);
        $reticula->update($validatedData);

        return redirect()->route('reticulas.index')->with('success', 'Retícula actualizada con éxito.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reticula $reticula)
    {
        $reticula->delete();

        return redirect()->route('reticulas.index')->with('success', 'Retícula eliminada con éxito.');
    }
}