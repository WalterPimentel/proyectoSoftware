@extends('layouts.plantilla')

@section('title', 'Docente: ' . $docente->apellidopDocente)

@section('content')
    <h1>Se encuentra en el registro: {{$docente->apellidopDocente}} {{$docente->apellidomDocente}}, {{$docente->nombresDocente}}</h1>

    <a href="{{route('docentes.index')}}">Volver a Docentes</a>
    <br><br>

    <a href="{{route('docentes.edit', $docente)}}">Editar Registro</a>
    <br><br>

    <p><strong>Código: {{$docente->codigoDocente}}</strong></p>

@endsection