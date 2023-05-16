@extends('layouts.plantilla')

@section('title', 'Recurso: ' . $tiporecurso->descripcionRecurso)

@section('content')
    <h1>Se encuentra en el registro: {{$tiporecurso->descripcionRecurso}}</h1>
    <a href="{{route('tiposrecursos.index')}}">Regresar</a>
    <p><strong>Código: {{$tiporecurso->id}}</strong></p>
@endsection