<?php

namespace App\Http\Controllers;

use App\Models\Materia;
use Illuminate\Http\Request;

class MateriaController extends Controller
{
    public $materias;
    public $val;

    public function __construct()
    {
        // Paginación de 5 materias
        $this->materias = Materia::paginate(5);

        // Reglas de validación
        $this->val = [
            // Agregar las reglas de validación necesarias
        ];
    }

    public function index()
    {
        return view('materias.index', ['materias' => $this->materias]);
    }

    public function create()
    {
        $materia = new Materia;

        return view('materias.create', [
            'materias' => $this->materias,
            'materia' => $materia,
            'accion' => 'C',
            'txtbtn' => 'INSERTAR'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate($this->val);
        Materia::create($validatedData);

        return redirect()->route('materias.index')->with('success', 'Materia creada con éxito.');
    }

    public function edit(Materia $materia)
    {
        return view('materias.edit', [
            'materias' => $this->materias,
            'materia' => $materia,
            'accion' => 'E',
            'txtbtn' => 'EDITAR'
        ]);
    }

    public function update(Request $request, Materia $materia)
    {
        $validatedData = $request->validate($this->val);
        $materia->update($validatedData);

        return redirect()->route('materias.index')->with('success', 'Materia actualizada con éxito.');
    }

    public function show(Materia $materia)
    {
        return view('materias.show', [
            'materias' => $this->materias,
            'materia' => $materia,
            'accion' => 'S',
            'txtbtn' => 'ELIMINAR'
        ]);
    }

    public function destroy(Materia $materia)
    {
        $materia->delete();

        return redirect()->route('materias.index')->with('success', 'Materia eliminada con éxito.');
    }
}