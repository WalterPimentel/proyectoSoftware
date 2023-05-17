@extends('layouts.plantilla')

@section('title', 'Registrar')

@section('content')
    <h1>En esta página se podrá crear un nuevo registro de practicas.</h1>

    <a href="{{route('practicas.index')}}">Volver a Prácticas</a>
    <br><br>

    <form action="{{route('practicas.store')}}" method="POST">
        
        @csrf

        <label>Código:
            <br>
            <input type="number" name="codigo">
        </label>
        <br><br>

        <label>Estudiante:
            <br>
            <input type="number" name="idEstudiante">
        </label>
        <br><br>

        <label>Docente:
            <br>
            <input type="number" name="idDocente">
        </label>
        <br><br>

        <label>Empresa:
            <br>
            <input type="number" name="idEmpresa">
        </label>
        <br><br>

        <label>Etapa:
            <br>
            <input type="number" name="idEtapa">
        </label>
        <br><br>

        <label>Título:
            <br>
            <textarea name="titulo" rows="5"></textarea>
        </label>
        <br><br>

        <button type="submit">Enviar Formulario</button>

    </form>
@endsection