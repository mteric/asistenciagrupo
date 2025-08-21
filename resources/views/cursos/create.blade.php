@extends('layouts.app')
@section('content')
    <div class="row mb-4">
        <h2>Crear Nuevo Curso</h2>
    </div>
    <form action="{{ route('cursos.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <strong>Título:</strong>
            <input type="text" name="titulo" class="form-control" placeholder="Título">
        </div>
        <div class="mb-3">
            <strong>Créditos:</strong>
            <input type="number" name="creditos" class="form-control" placeholder="Créditos">
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary">Guardar</button>
            <a class="btn btn-secondary" href="{{ route('cursos.index') }}">Cancelar</a>
        </div>
    </form>
@endsection