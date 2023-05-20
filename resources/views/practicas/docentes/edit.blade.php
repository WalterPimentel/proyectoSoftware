@extends('layouts.plantilla')

@section('title', 'Editar Docente')

@section('content')
    <h1>En esta página se podrá crear editar un registro de Docentes.</h1>

    <a href="{{route('docentes.index')}}">Volver a Docentes</a>
    <br><br>

    <form action="{{route('docentes.update', $docente)}}" method="POST">
        
        @csrf

        @method('put')

        <label>Código:
            <br>
            <input type="number" name="codigoDocente" value="{{$docente->codigoDocente}}">
        </label>
        <br><br>

        <label>Nombres:
            <br>
            <input type="text" name="nombresDocente" value="{{$docente->nombresDocente}}">
        </label>
        <br><br>

        <label>Apellido Paterno:
            <br>
            <input type="text" name="apellidopDocente" value="{{$docente->apellidopDocente}}">
        </label>
        <br><br>

        <label>Apellido Materno:
            <br>
            <input type="text" name="apellidomDocente" value="{{$docente->apellidomDocente}}">
        </label>
        <br><br>

        <label>Teléfono:
            <br>
            <input type="text" name="telefonoDocente" value="{{$docente->telefonoDocente}}">
        </label>
        <br><br>

        <label>Correo:
            <br>
            <input type="text" name="correoDocente" value="{{$docente->correoDocente}}">
        </label>
        <br><br>

        <button type="submit">Actualizar Formulario</button>

    </form>
@endsection