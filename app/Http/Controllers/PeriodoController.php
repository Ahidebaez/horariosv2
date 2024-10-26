<?php

namespace App\Http\Controllers;

use App\Models\Periodo;
use Illuminate\Http\Request;

class PeriodoController extends Controller
{
    public $periodos;
    public $val;

    public function __construct()
    {
        // Paginación de 5 periodos
        $this->periodos = Periodo::paginate(5);

        // Reglas de validación
        $this->val = [
            'idPeriodo' => 'required|max:5|unique:periodos,idPeriodo',
            'periodo' => 'required|max:100',
            'descCorto' => 'required|max:10',
            'fechaIni' => 'required|date',
            'fechaFin' => 'required|date|after:fechaIni',
        ];
    }

    public function index()
    {
        return view('periodos.index', ['periodos' => $this->periodos]);
    }

    public function create()
    {
        $periodo = new Periodo;

        return view('periodos.create', [
            'periodos' => $this->periodos,
            'periodo' => $periodo,
            'accion' => 'C',
            'txtbtn' => 'INSERTAR'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate($this->val);
        Periodo::create($validatedData);

        return redirect()->route('periodos.index')->with('success', 'Periodo creado con éxito.');
    }

    public function edit(Periodo $periodo)
    {
        return view('periodos.edit', [
            'periodos' => $this->periodos,
            'periodo' => $periodo,
            'accion' => 'E',
            'txtbtn' => 'EDITAR'
        ]);
    }

    public function update(Request $request, Periodo $periodo)
    {
        $validatedData = $request->validate($this->val);
        $periodo->update($validatedData);

        return redirect()->route('periodos.index')->with('success', 'Periodo actualizado con éxito.');
    }

    public function show(Periodo $periodo)
    {
        return view('periodos.show', [
            'periodos' => $this->periodos,
            'periodo' => $periodo,
            'accion' => 'S',
            'txtbtn' => 'ELIMINAR'
        ]);
    }

    public function destroy(Periodo $periodo)
    {
        $periodo->delete();

        return redirect()->route('periodos.index')->with('success', 'Periodo eliminado con éxito.');
    }
}