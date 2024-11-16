<?php

namespace App\Http\Controllers;

use App\Models\PersonalPlaza;
use Illuminate\Http\Request;

class PersonalPlazaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Obtener todos los registros de personalplazas
        $personalPlazas = PersonalPlaza::all();

        // Pasar los registros a la vista
        return view('personalplazas.index', compact('personalPlazas'));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(PersonalPlaza $personalPlaza)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PersonalPlaza $personalPlaza)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PersonalPlaza $personalPlaza)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PersonalPlaza $personalPlaza)
    {
        //
    }
}
