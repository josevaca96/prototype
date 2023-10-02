<?php

namespace App\Http\Controllers;

use App\Models\Activo;
use Illuminate\Http\Request;

class ActivoController extends Controller
{
    public function index()
    {
        return view('activos.index');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        Activo::create([
            'nombre' => $request->get('nombre'),
            'nota' => $request->get('nota'),
            'user_id' => auth()->id()
        ]);
        // session()->flash('status', 'Creado correctamente!'); //flash borra el mensaje en la siguiente peticion
        return to_route('activos.index')->with('status', 'Creado correctamente!');
    }


    public function show(Activo $activo)
    {
        //
    }

    public function edit(Activo $activo)
    {
        //
    }

    public function update(Request $request, Activo $activo)
    {
        //
    }

    public function destroy(Activo $activo)
    {
        //
    }
}
