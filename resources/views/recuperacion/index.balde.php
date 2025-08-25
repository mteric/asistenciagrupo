@extends('layouts.app')

@section('content')
<h1>Lista de Recursos</h1>
<a href="{{ route('recursos.create') }}">➕ Nuevo Recurso</a>
<table border="1" cellpadding="5">
    <tr>
        <th>Nombre</th>
        <th>Materia</th>
        <th>Cuatrimestre</th>
        <th>Docente</th>
        <th>Acciones</th>
    </tr>
    @foreach($recursos as $r)
    <tr>
        <td>{{ $r->nombre }}</td>
        <td>{{ $r->materia }}</td>
        <td>{{ $r->cuatrimestre }}</td>
        <td>{{ $r->docente }}</td>
        <td>
            <a href="{{ route('recursos.show',$r) }}">👁 Ver</a> |
            <a href="{{ route('recursos.edit',$r) }}">✏️ Editar</a> |
            <form action="{{ route('recursos.destroy',$r) }}" method="POST" style="display:inline;">
                @csrf @method('DELETE')
                <button type="submit">🗑 Eliminar</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection
