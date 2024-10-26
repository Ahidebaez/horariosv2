<?php

namespace App\Http\Controllers;

use App\Models\Puesto;
use Illuminate\Http\Request;

class PuestoController extends Controller
{
    /**
     * Reglas de validación
     */
    public $val = [
        'nombre' => 'required|max:255|regex:/^[\p{L}\s]+$/u', // Solo letras y espacios
        'descripcion' => 'required|max:500'
    ];

    /**
     * Mostrar una lista de los recursos (Vista de lista de puestos con paginación).
     */
    public function index()
    {
        // Paginamos los puestos (5 por página)
        $puestos = Puesto::paginate(5);

        // Pasamos los puestos paginados a la vista
        return view('puestos.index', ['puestos' => $puestos]);
    }

    /**
     * Mostrar el formulario para crear un nuevo recurso (Vista para crear un puesto).
     */
    public function create()
    {
        // Creamos una nueva instancia de Puesto vacía para el formulario
        $puesto = new Puesto();

        // Enviamos los datos necesarios a la vista de creación
        return view('puestos.create', [
            'puesto' => $puesto,
            'accion' => 'C', // Acción de crear
            'txtbtn' => 'INSERTAR'
        ]);
    }

    /**
     * Almacenar un nuevo recurso en la base de datos.
     */
    public function store(Request $request)
    {
        // Validamos los datos del formulario
        $validatedData = $request->validate($this->val);

        // Creamos un nuevo puesto con los datos validados
        Puesto::create($validatedData);

        // Redirigimos a la lista de puestos con un mensaje de éxito
        return redirect()->route('puestos.index')->with('success', 'Puesto creado con éxito.');
    }

    /**
     * Mostrar los detalles de un recurso específico.
     */
    public function show(Puesto $puesto)
    {
        // Mostramos los detalles del puesto
        return view('puestos.show', [
            'puesto' => $puesto,
            'accion' => 'S', // Acción de mostrar
            'txtbtn' => 'ELIMINAR'
        ]);
    }

    /**
     * Mostrar el formulario para editar un recurso específico.
     */
    public function edit(Puesto $puesto)
    {
        // Mostramos el formulario de edición
        return view('puestos.edit', [
            'puesto' => $puesto,
            'accion' => 'E', // Acción de editar
            'txtbtn' => 'Editar'
        ]);
    }

    /**
     * Actualizar un recurso específico en la base de datos.
     */
    public function update(Request $request, Puesto $puesto)
    {
        // Validamos los datos actualizados
        $validatedData = $request->validate($this->val);

        // Actualizamos el puesto con los datos validados
        $puesto->update($validatedData);

        // Redirigimos a la lista de puestos con un mensaje de éxito
        return redirect()->route('puestos.index')->with('success', 'Puesto actualizado con éxito.');
    }

    /**
     * Eliminar un recurso específico de la base de datos.
     */
    public function destroy(Puesto $puesto)
    {
        // Eliminamos el puesto
        $puesto->delete();

        // Redirigimos a la lista de puestos con un mensaje de éxito
        return redirect()->route('puestos.index')->with('success', 'Puesto eliminado con éxito.');
    }
}