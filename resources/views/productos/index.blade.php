@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Lista de Productos</h2>
        <a class="btn btn-success" href="{{ route('productos.create') }}">Crear Nuevo Producto</a>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th width="280px">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($productos as $producto)
            <tr>
                <td>{{ $producto->id }}</td>
                <td>{{ $producto->nombre }}</td>
                <td>{{ $producto->descripcion }}</td>
                <td>${{ number_format($producto->precio, 2) }}</td>
                <td>
                    <form action="{{ route('productos.destroy', $producto->id) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('productos.show', $producto->id) }}">Mostrar</a>
                        <a class="btn btn-primary" href="{{ route('productos.edit', $producto->id) }}">Editar</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection