@extends('layouts.app')
@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Lista de Cursos</h2>
        <a class="btn btn-success" href="{{ route('cursos.create') }}">Crear Nuevo Curso</a>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success"><p>{{ $message }}</p></div>
    @endif

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Créditos</th>
                <th width="280px">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cursos as $curso)
            <tr>
                <td>{{ $curso->id }}</td>
                <td>{{ $curso->titulo }}</td>
                <td>{{ $curso->creditos }}</td>
                <td>
                    <form action="{{ route('cursos.destroy', $curso->id) }}" method="POST">
                        <a class="btn btn-primary btn-sm" href="{{ route('cursos.edit', $curso->id) }}">Editar</a>
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