@extends('layouts.app')
@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Lista de Estudiantes</h2>
        <a class="btn btn-success" href="{{ route('estudiantes.create') }}">Crear Nuevo Estudiante</a>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success"><p>{{ $message }}</p></div>
    @endif

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Fecha de Nacimiento</th>
                <th width="280px">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($estudiantes as $estudiante)
            <tr>
                <td>{{ $estudiante->id }}</td>
                <td>{{ $estudiante->nombre }}</td>
                <td>{{ $estudiante->fecha_nacimiento }}</td>
                <td>
                    <form action="{{ route('estudiantes.destroy', $estudiante->id) }}" method="POST">
                        <a class="btn btn-primary btn-sm" href="{{ route('estudiantes.edit', $estudiante->id) }}">Editar</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection