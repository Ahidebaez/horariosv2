<?php

namespace App\Http\Controllers;

use App\Models\Carrera;
use App\Models\Depto;
use Illuminate\Http\Request;

class DeptoController extends Controller
{
    public $deptos;
    public $val;

    public function __construct()
    {
        // Paginación de 5 deptos
        $this->deptos = Depto::paginate(5);

        // Reglas de validación
        $this->val = [
            // Agregar las reglas de validación necesarias
        ];
    }

    public function index()
    {
        return view('deptos.index', ['deptos' => $this->deptos]);
    }

    public function create()
    {
        $depto = new Depto;

        return view('deptos.create', [
            'deptos' => $this->deptos,
            'depto' => $depto,
            'accion' => 'C',
            'txtbtn' => 'INSERTAR'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate($this->val);
        Depto::create($validatedData);

        return redirect()->route('deptos.index')->with('success', 'Departamento creado con éxito.');
    }

    public function edit(Depto $depto)
    {
        return view('deptos.edit', [
            'deptos' => $this->deptos,
            'depto' => $depto,
            'accion' => 'E',
            'txtbtn' => 'EDITAR'
        ]);
    }

    public function update(Request $request, Depto $depto)
    {
        $validatedData = $request->validate($this->val);
        $depto->update($validatedData);

        return redirect()->route('deptos.index')->with('success', 'Departamento actualizado con éxito.');
    }

    public function show(Depto $depto)
    {
        return view('deptos.show', [
            'deptos' => $this->deptos,
            'depto' => $depto,
            'accion' => 'S',
            'txtbtn' => 'ELIMINAR'
        ]);
    }

    public function destroy(Depto $depto)
    {
        $depto->delete();

        return redirect()->route('deptos.index')->with('success', 'Departamento eliminado con éxito.');
    }
}