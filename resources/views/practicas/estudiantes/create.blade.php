@extends('layouts.plantilla')

@section('title', 'Crear Estudiantes')

@section('content')
    <h1>En esta página se podrá crear un nuevo registro de estudiantes.</h1>
    <a href="{{route('estudiantes.index')}}">Volver a Estudiantes</a>
    <br><br>

    <form action="{{route('estudiantes.store')}}" method="POST">
        
        @csrf

        <label>Código:
            <br>
            <input type="number" name="codigoEstudiante">
        </label>
        <br><br>

        <label>Nombres:
            <br>
            <input type="text" name="nombresEstudiante">
        </label>
        <br><br>

        <label>Apellido Paterno:
            <br>
            <input type="text" name="apellidopEstudiante">
        </label>
        <br><br>

        <label>Apellido Materno:
            <br>
            <input type="text" name="apellidomEstudiante">
        </label>
        <br><br>

        <label>Teléfono:
            <br>
            <input type="text" name="telefonoEstudiante">
        </label>
        <br><br>

        <label>Correo:
            <br>
            <input type="text" name="correoEstudiante">
        </label>
        <br><br>

        <button type="submit">Enviar Formulario</button>

    </form>
@endsection