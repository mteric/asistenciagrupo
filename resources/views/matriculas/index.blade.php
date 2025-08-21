@extends('layouts.app')
@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Lista de Matrículas</h2>
        <a class="btn btn-success" href="{{ route('matriculas.create') }}">Crear Nueva Matrícula</a>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success"><p>{{ $message }}</p></div>
    @endif

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Estudiante</th>
                <th>Curso</th>
                <th width="280px">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($matriculas as $matricula)
            <tr>
                <td>{{ $matricula->id }}</td>
                <td>{{ $matricula->estudiante->nombre }}</td>
                <td>{{ $matricula->curso->titulo }}</td>
                <td>
                    <form action="{{ route('matriculas.destroy', $matricula->id) }}" method="POST">
                        <a class="btn btn-primary btn-sm" href="{{ route('matriculas.edit', $matricula->id) }}">Editar</a>
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