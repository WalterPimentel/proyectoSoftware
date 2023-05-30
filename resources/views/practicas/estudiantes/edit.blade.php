@extends('adminlte::page')

@section('title', 'Editar Estudiante')

@section('content_header')

    <h1>En esta página se podrá crear editar un registro de estudiantes.</h1>

@stop

@section('content')    

    <a href="{{route('practicas.index')}}">Volver a Prácticas</a>
    <br><br>

    <form action="{{route('estudiantes.update', $estudiante)}}" method="POST">
        
        @csrf

        @method('put')

        <label>Código:
            <br>
            <input type="number" name="codigoEstudiante" value="{{$estudiante->codigoEstudiante}}">
        </label>
        <br><br>

        <label>Nombres:
            <br>
            <input type="text" name="nombresEstudiante" value="{{$estudiante->nombresEstudiante}}">
        </label>
        <br><br>

        <label>Apellido Paterno:
            <br>
            <input type="text" name="apellidopEstudiante" value="{{$estudiante->apellidopEstudiante}}">
        </label>
        <br><br>

        <label>Apellido Materno:
            <br>
            <input type="text" name="apellidomEstudiante" value="{{$estudiante->apellidomEstudiante}}">
        </label>
        <br><br>

        <label>Teléfono:
            <br>
            <input type="text" name="telefonoEstudiante" value="{{$estudiante->telefonoEstudiante}}">
        </label>
        <br><br>

        <label>Correo:
            <br>
            <input type="text" name="correoEstudiante" value="{{$estudiante->correoEstudiante}}">
        </label>
        <br><br>

        <button type="submit">Actualizar Formulario</button>

    </form>

@stop
