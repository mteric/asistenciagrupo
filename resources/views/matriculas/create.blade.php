@extends('layouts.app')
@section('content')
    <div class="row mb-4">
        <h2>Crear Nueva Matrícula</h2>
    </div>
    <form action="{{ route('matriculas.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <strong>Estudiante:</strong>
            <select name="estudiante_id" class="form-control">
                @foreach($estudiantes as $estudiante)
                    <option value="{{ $estudiante->id }}">{{ $estudiante->nombre }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <strong>Curso:</strong>
            <select name="curso_id" class="form-control">
                @foreach($cursos as $curso)
                    <option value="{{ $curso->id }}">{{ $curso->titulo }}</option>
                @endforeach
            </select>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary">Guardar</button>
            <a class="btn btn-secondary" href="{{ route('matriculas.index') }}">Cancelar</a>
        </div>
    </form>
@endsection