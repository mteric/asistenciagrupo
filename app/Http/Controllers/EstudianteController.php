<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    public function index() {
        $estudiantes = Estudiante::all();
        return view('estudiantes.index', compact('estudiantes'));
    }

    public function create() {
        return view('estudiantes.create');
    }

    public function store(Request $request) {
        $request->validate(['nombre' => 'required', 'fecha_nacimiento' => 'required|date']);
        Estudiante::create($request->all());
        return redirect()->route('estudiantes.index')->with('success', 'Estudiante creado.');
    }

    public function show(Estudiante $estudiante) {
        return view('estudiantes.show', compact('estudiante'));
    }

    public function edit(Estudiante $estudiante) {
        return view('estudiantes.edit', compact('estudiante'));
    }

    public function update(Request $request, Estudiante $estudiante) {
        $request->validate(['nombre' => 'required', 'fecha_nacimiento' => 'required|date']);
        $estudiante->update($request->all());
        return redirect()->route('estudiantes.index')->with('success', 'Estudiante actualizado.');
    }

    public function destroy(Estudiante $estudiante) {
        $estudiante->delete();
        return redirect()->route('estudiantes.index')->with('success', 'Estudiante eliminado.');
    }
}