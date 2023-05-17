@extends('layouts.plantilla')

@section('title', 'Crear Docentes')

@section('content')
    <h1>En esta página se podrá crear un nuevo registro de docentes.</h1>

    <a href="{{route('docentes.index')}}">Volver a Docentes</a>
    <br><br>

    <form action="{{route('docentes.store')}}" method="POST">
        
        @csrf

        <label>Código:
            <br>
            <input type="number" name="codigoDocente">
        </label>
        <br><br>

        <label>Nombres:
            <br>
            <input type="text" name="nombresDocente">
        </label>
        <br><br>

        <label>Apellido Paterno:
            <br>
            <input type="text" name="apellidopDocente">
        </label>
        <br><br>

        <label>Apellido Materno:
            <br>
            <input type="text" name="apellidomDocente">
        </label>
        <br><br>

        <label>Teléfono:
            <br>
            <input type="text" name="telefonoDocente">
        </label>
        <br><br>

        <label>Correo:
            <br>
            <input type="text" name="correoDocente">
        </label>
        <br><br>

        <button type="submit">Enviar Formulario</button>

    </form>
@endsection