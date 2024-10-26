<?php

namespace App\Http\Controllers;

use App\Models\Plaza;
use Illuminate\Http\Request;

class PlazaController extends Controller
{
    public $plazas;
    public $val;

    /**
     * Constructor donde inicializamos las plazas paginadas y las reglas de validación.
     */
    public function __construct()
    {
        // Paginación de 5 plazas
        $this->plazas = Plaza::paginate(5);
        
        // Reglas de validación
        $this->val = [
            'nombre' => 'required|max:255',
            'tipo' => 'required|max:200',
        ];
    }

    /**
     * Muestra una lista de las plazas con paginación.
     */
    public function index()
    {
        // Pasamos las plazas paginadas a la vista
        return view('plazas.index', ['plazas' => $this->plazas]);
    }

    /**
     * Muestra el formulario para crear una nueva plaza.
     */
    public function create()
    {
        // Creamos una instancia de Plaza vacía para el formulario
        $plaza = new Plaza;

        // Pasamos las plazas y otros parámetros a la vista de creación
        return view('plazas.create', [
            'plazas' => $this->plazas,
            'plaza' => $plaza,
            'accion' => 'C',
            'des' => '',
            'txtbtn' => 'INSERTAR'
        ]);
    }

    /**
     * Almacena una nueva plaza en la base de datos.
     */
    public function store(Request $request)
    {
        // Validamos los datos usando las reglas definidas
        $validatedData = $request->validate($this->val);

        // Almacenamos la nueva plaza en la base de datos
        Plaza::create($validatedData);

        // Redirigimos a la lista de plazas con un mensaje de éxito
        return redirect()->route('plazas.index')->with('success', 'Plaza creada con éxito.');
    }

    /**
     * Muestra el formulario para editar una plaza específica.
     */
    public function edit(Plaza $plaza)
    {
        // Pasamos las plazas y el registro a editar a la vista de edición
        return view('plazas.edit', [
            'plazas' => $this->plazas,
            'plaza' => $plaza,
            'accion' => 'E',
            'des' => '',
            'txtbtn' => 'EDITAR'
        ]);
    }

    /**
     * Actualiza una plaza específica en la base de datos.
     */
    public function update(Request $request, Plaza $plaza)
    {
        // Validamos los datos actualizados
        $validatedData = $request->validate($this->val);

        // Actualizamos la plaza con los nuevos datos
        $plaza->update($validatedData);

        // Redirigimos a la lista de plazas con un mensaje de éxito
        return redirect()->route('plazas.index')->with('success', 'Plaza actualizada con éxito.');
    }

    /**
     * Muestra los detalles de una plaza específica.
     */
    public function show(Plaza $plaza)
    {
        // Pasamos las plazas y la plaza seleccionada a la vista de detalles
        return view('plazas.show', [
            'plazas' => $this->plazas,
            'plaza' => $plaza,
            'accion' => 'S',
            'des' => 'disabled',
            'txtbtn' => 'ELIMINAR'
        ]);
    }

    /**
     * Elimina una plaza específica de la base de datos.
     */
    public function destroy(Plaza $plaza)
    {
        // Eliminamos la plaza
        $plaza->delete();

        // Redirigimos a la lista de plazas con un mensaje de éxito
        return redirect()->route('plazas.index')->with('success', 'Plaza eliminada con éxito.');
    }
}