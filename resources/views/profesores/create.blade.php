@extends('layouts.app')
@section('content')
    <div class="row mb-4">
        <h2>Crear Nuevo Profesor</h2>
    </div>
    <form action="{{ route('profesores.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <strong>Nombre:</strong>
            <input type="text" name="nombre" class="form-control" placeholder="Nombre">
        </div>
        <div class="mb-3">
            <strong>Email:</strong>
            <input type="email" name="email" class="form-control" placeholder="Email">
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary">Guardar</button>
            <a class="btn btn-secondary" href="{{ route('profesores.index') }}">Cancelar</a>
        </div>
    </form>
@endsection