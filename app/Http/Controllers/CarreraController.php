<?php

namespace App\Http\Controllers;

use App\Models\Carrera;
use Illuminate\Http\Request;

class CarreraController extends Controller
{
    public $carreras;
    public $val;

    public function __construct()
    {
        // Paginación de 5 carreras
        $this->carreras = Carrera::paginate(5);

        // Reglas de validación
        $this->val = [
            'idcarrera' => 'required|max:15|unique:carreras,idcarrera',
            'nombrecarrera' => 'required|max:200|unique:carreras,nombrecarrera',
            'nombremediano' => 'required|max:50|unique:carreras,nombremediano',
            'nombrecorto' => 'required|max:10',
            'depto_id' => 'required|exists:deptos,id',
        ];
    }

    public function index()
    {
        return view('carreras.index', ['carreras' => $this->carreras]);
    }

    public function create()
    {
        $carrera = new Carrera;

        return view('carreras.create', [
            'carreras' => $this->carreras,
            'carrera' => $carrera,
            'accion' => 'C',
            'txtbtn' => 'INSERTAR'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate($this->val);
        Carrera::create($validatedData);

        return redirect()->route('carreras.index')->with('success', 'Carrera creada con éxito.');
    }

    public function edit(Carrera $carrera)
    {
        return view('carreras.edit', [
            'carreras' => $this->carreras,
            'carrera' => $carrera,
            'accion' => 'E',
            'txtbtn' => 'EDITAR'
        ]);
    }

    public function update(Request $request, Carrera $carrera)
    {
        $validatedData = $request->validate($this->val);
        $carrera->update($validatedData);

        return redirect()->route('carreras.index')->with('success', 'Carrera actualizada con éxito.');
    }

    public function show(Carrera $carrera)
    {
        return view('carreras.show', [
            'carreras' => $this->carreras,
            'carrera' => $carrera,
            'accion' => 'S',
            'txtbtn' => 'ELIMINAR'
        ]);
    }

    public function destroy(Carrera $carrera)
    {
        $carrera->delete();

        return redirect()->route('carreras.index')->with('success', 'Carrera eliminada con éxito.');
    }
}