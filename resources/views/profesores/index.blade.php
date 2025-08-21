@extends('layouts.app')
@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Lista de Profesores</h2>
        <a class="btn btn-success" href="{{ route('profesores.create') }}">Crear Nuevo Profesor</a>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success"><p>{{ $message }}</p></div>
    @endif

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Email</th>
                <th width="280px">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($profesores as $profesor)
            <tr>
                <td>{{ $profesor->id }}</td>
                <td>{{ $profesor->nombre }}</td>
                <td>{{ $profesor->email }}</td>
                <td>
                    <form action="{{ route('profesores.destroy', $profesor->id) }}" method="POST">
                        <a class="btn btn-primary btn-sm" href="{{ route('profesores.edit', $profesor->id) }}">Editar</a>
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