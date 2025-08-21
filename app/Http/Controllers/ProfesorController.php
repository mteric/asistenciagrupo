<?php

namespace App\Http\Controllers;

use App\Models\Profesor;
use Illuminate\Http\Request;

class ProfesorController extends Controller
{
    public function index() {
        $profesores = Profesor::all();
        return view('profesores.index', compact('profesores'));
    }

    public function create() {
        return view('profesores.create');
    }

    public function store(Request $request) {
        $request->validate(['nombre' => 'required', 'email' => 'required|email|unique:profesores']);
        Profesor::create($request->all());
        return redirect()->route('profesores.index')->with('success', 'Profesor creado.');
    }

    public function show(Profesor $profesor) {
        return view('profesores.show', compact('profesor'));
    }

    public function edit(Profesor $profesor) {
        return view('profesores.edit', compact('profesor'));
    }

    public function update(Request $request, Profesor $profesor) {
        $request->validate(['nombre' => 'required', 'email' => 'required|email|unique:profesores,email,' . $profesor->id]);
        $profesor->update($request->all());
        return redirect()->route('profesores.index')->with('success', 'Profesor actualizado.');
    }

    public function destroy(Profesor $profesor) {
        $profesor->delete();
        return redirect()->route('profesores.index')->with('success', 'Profesor eliminado.');
    }
}