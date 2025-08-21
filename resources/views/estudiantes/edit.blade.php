@extends('layouts.app')
@section('content')
    <div class="row mb-4">
        <h2>Editar Estudiante</h2>
    </div>
    <form action="{{ route('estudiantes.update', $estudiante->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <strong>Nombre:</strong>
            <input type="text" name="nombre" value="{{ $estudiante->nombre }}" class="form-control" placeholder="Nombre">
        </div>
        <div class="mb-3">
            <strong>Fecha de Nacimiento:</strong>
            <input type="date" name="fecha_nacimiento" value="{{ $estudiante->fecha_nacimiento }}" class="form-control">
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary">Actualizar</button>
            <a class="btn btn-secondary" href="{{ route('estudiantes.index') }}">Cancelar</a>
        </div>
    </form>
@endsection