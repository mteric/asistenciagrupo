@extends('layouts.app')
@section('content')
    <div class="row mb-4">
        <h2>Editar Matrícula</h2>
    </div>
    <form action="{{ route('matriculas.update', $matricula->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <strong>Estudiante:</strong>
            <select name="estudiante_id" class="form-control">
                @foreach($estudiantes as $estudiante)
                    <option value="{{ $estudiante->id }}" @if($estudiante->id == $matricula->estudiante_id) selected @endif>{{ $estudiante->nombre }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <strong>Curso:</strong>
            <select name="curso_id" class="form-control">
                @foreach($cursos as $curso)
                    <option value="{{ $curso->id }}" @if($curso->id == $matricula->curso_id) selected @endif>{{ $curso->titulo }}</option>
                @endforeach
            </select>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary">Actualizar</button>
            <a class="btn btn-secondary" href="{{ route('matriculas.index') }}">Cancelar</a>
        </div>
    </form>
@endsection