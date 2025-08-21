@extends('layouts.app')
@section('content')
    <div class="row mb-4">
        <h2>Crear Nuevo Estudiante</h2>
    </div>
    <form action="{{ route('estudiantes.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <strong>Nombre:</strong>
            <input type="text" name="nombre" class="form-control" placeholder="Nombre">
        </div>
        <div class="mb-3">
            <strong>Fecha de Nacimiento:</strong>
            <input type="date" name="fecha_nacimiento" class="form-control">
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary">Guardar</button>
            <a class="btn btn-secondary" href="{{ route('estudiantes.index') }}">Cancelar</a>
        </div>
    </form>
@endsection