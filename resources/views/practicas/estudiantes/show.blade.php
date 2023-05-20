@extends('layouts.plantilla')

@section('title', 'Estudiante: ' . $estudiante->apellidopEstudiante)

@section('content')
    <h1>Se encuentra en el registro: {{$estudiante->apellidopEstudiante}} {{$estudiante->apellidomEstudiante}}, {{$estudiante->nombresEstudiante}}</h1>

    <a href="{{route('estudiantes.index')}}">Volver a Estudiantes</a>
    <br><br>

    <a href="{{route('estudiantes.edit', $estudiante)}}">Editar Registro</a>
    <br><br>

    <p><strong>Código: {{$estudiante->codigoEstudiante}}</strong></p>

@endsection