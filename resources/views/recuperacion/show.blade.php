@extends('layouts.app')

@section('content')
<h1>Detalles del Recurso</h1>
<p><b>Nombre:</b> {{ $recurso->nombre }}</p>
<p><b>Materia:</b> {{ $recurso->materia }}</p>
<p><b>Cuatrimestre:</b> {{ $recurso->cuatrimestre }}</p>
<p><b>Docente:</b> {{ $recurso->docente }}</p>
<a href="{{ route('recursos.index') }}">⬅ Volver</a>
@endsection
