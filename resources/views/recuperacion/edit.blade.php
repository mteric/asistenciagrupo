@extends('layouts.app')

@section('content')
<h1>Editar Recurso</h1>
<form action="{{ route('recursos.update',$recurso) }}" method="POST">
    @csrf @method('PUT')
    <label>Nombre: <input type="text" name="nombre" value="{{ $recurso->nombre }}"></label><br>
    <label>Materia: <input type="text" name="materia" value="{{ $recurso->materia }}"></label><br>
    <label>Cuatrimestre: <input type="number" name="cuatrimestre" value="{{ $recurso->cuatrimestre }}"></label><br>
    <label>Docente: <input type="text" name="docente" value="{{ $recurso->docente }}"></label><br>
    <button type="submit">Actualizar</button>
</form>
@endsection
