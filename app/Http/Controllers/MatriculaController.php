<?php

namespace App\Http\Controllers;

use App\Models\Matricula;
use App\Models\Estudiante;
use App\Models\Curso;
use Illuminate\Http\Request;

class MatriculaController extends Controller
{
    public function index() {
        $matriculas = Matricula::with(['estudiante', 'curso'])->get();
        return view('matriculas.index', compact('matriculas'));
    }

    public function create() {
        $estudiantes = Estudiante::all();
        $cursos = Curso::all();
        return view('matriculas.create', compact('estudiantes', 'cursos'));
    }

    public function store(Request $request) {
        $request->validate(['estudiante_id' => 'required|exists:estudiantes,id', 'curso_id' => 'required|exists:cursos,id']);
        Matricula::create($request->all());
        return redirect()->route('matriculas.index')->with('success', 'Matrícula creada.');
    }

    public function show(Matricula $matricula) {
        return view('matriculas.show', compact('matricula'));
    }

    public function edit(Matricula $matricula) {
        $estudiantes = Estudiante::all();
        $cursos = Curso::all();
        return view('matriculas.edit', compact('matricula', 'estudiantes', 'cursos'));
    }

    public function update(Request $request, Matricula $matricula) {
        $request->validate(['estudiante_id' => 'required|exists:estudiantes,id', 'curso_id' => 'required|exists:cursos,id']);
        $matricula->update($request->all());
        return redirect()->route('matriculas.index')->with('success', 'Matrícula actualizada.');
    }

    public function destroy(Matricula $matricula) {
        $matricula->delete();
        return redirect()->route('matriculas.index')->with('success', 'Matrícula eliminada.');
    }
}