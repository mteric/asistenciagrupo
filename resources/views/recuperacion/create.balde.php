@extends('layouts.app')

@section('content')
<h1>Crear Recurso</h1>
<form action="{{ route('recursos.store') }}" method="POST">
    @csrf
    <label>Nombre: <input type="text" name="nombre"></label><br>
    <label>Materia: <input type="text" name="materia"></label><br>
    <label>Cuatrimestre: <input type="number" name="cuatrimestre"></label><br>
    <label>Docente: <input type="text" name="docente"></label><br>
    <button type="submit">Guardar</button>
</form>
@endsection
