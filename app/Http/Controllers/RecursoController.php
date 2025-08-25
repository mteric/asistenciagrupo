<?php

namespace App\Http\Controllers;

use App\Models\Recurso;
use Illuminate\Http\Request;

class RecursoController extends Controller
{
    public function index()
    {
        $recursos = Recurso::all();
        return view('recursos.index', compact('recursos'));
    }

    public function create()
    {
        return view('recursos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'materia' => 'required|string|max:255',
            'cuatrimestre' => 'required|integer',
            'docente' => 'required|string|max:255',
        ]);

        Recurso::create($request->all());
        return redirect()->route('recursos.index')->with('success','Recurso creado correctamente.');
    }

    public function show(Recurso $recurso)
    {
        return view('recursos.show', compact('recurso'));
    }

    public function edit(Recurso $recurso)
    {
        return view('recursos.edit', compact('recurso'));
    }

    public function update(Request $request, Recurso $recurso)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'materia' => 'required|string|max:255',
            'cuatrimestre' => 'required|integer',
            'docente' => 'required|string|max:255',
        ]);

        $recurso->update($request->all());
        return redirect()->route('recursos.index')->with('success','Recurso actualizado correctamente.');
    }

    public function destroy(Recurso $recurso)
    {
        $recurso->delete();
        return redirect()->route('recursos.index')->with('success','Recurso eliminado correctamente.');
    }
}
