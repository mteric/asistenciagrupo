@extends('layouts.app')
@section('content')
    <div class="row mb-4">
        <h2>Editar Curso</h2>
    </div>
    <form action="{{ route('cursos.update', $curso->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <strong>Título:</strong>
            <input type="text" name="titulo" value="{{ $curso->titulo }}" class="form-control" placeholder="Título">
        </div>
        <div class="mb-3">
            <strong>Créditos:</strong>
            <input type="number" name="creditos" value="{{ $curso->creditos }}" class="form-control" placeholder="Créditos">
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary">Actualizar</button>
            <a class="btn btn-secondary" href="{{ route('cursos.index') }}">Cancelar</a>
        </div>
    </form>
@endsection