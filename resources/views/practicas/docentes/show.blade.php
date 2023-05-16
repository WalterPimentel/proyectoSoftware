@extends('layouts.plantilla')

@section('title', 'Docente: ' . $docente->apellidopDocente)

@section('content')
    <h1>Se encuentra en el registro: {{$docente->apellidopDocente}} {{$docente->apellidomDocente}}, {{$docente->nombresDocente}}</h1>
    <a href="{{route('docentes.index')}}">Volver a Docentes</a>
    <p><strong>Código: {{$docente->codigoDocente}}</strong></p>
@endsection