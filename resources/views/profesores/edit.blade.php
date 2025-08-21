@extends('layouts.app')
@section('content')
    <div class="row mb-4">
        <h2>Editar Profesor</h2>
    </div>
    <form action="{{ route('profesores.update', $profesor->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <strong>Nombre:</strong>
            <input type="text" name="nombre" value="{{ $profesor->nombre }}" class="form-control" placeholder="Nombre">
        </div>
        <div class="mb-3">
            <strong>Email:</strong>
            <input type="email" name="email" value="{{ $profesor->email }}" class="form-control" placeholder="Email">
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary">Actualizar</button>
            <a class="btn btn-secondary" href="{{ route('profesores.index') }}">Cancelar</a>
        </div>
    </form>
@endsection