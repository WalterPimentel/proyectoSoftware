@extends('adminlte::page')

@section('title', 'Estudiante: ' . $estudiante->apellidopEstudiante)

@section('content_header')

    <h1>Se encuentra en el registro: {{$estudiante->apellidopEstudiante}} {{$estudiante->apellidomEstudiante}}, {{$estudiante->nombresEstudiante}}</h1>

@stop

@section('content')    

    <a href="{{route('estudiantes.index')}}">Volver a Estudiantes</a>
    <br><br>

    <a href="{{route('estudiantes.edit', $estudiante)}}">Editar Registro</a>
    <br><br>

    <p><strong>Código: {{$estudiante->codigoEstudiante}}</strong></p>
    
    <form action="{{route('estudiantes.destroy', $estudiante)}}" method="POST">

        @csrf

        @method('delete')

        <button type="submit">Eliminar</button>

    </form>


@stop
