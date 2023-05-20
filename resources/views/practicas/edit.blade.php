@extends('layouts.plantilla')

@section('title', 'Editar Practica')

@section('content')
    <h1>En esta página se podrá crear editar un registro de practicas.</h1>

    <a href="{{route('practicas.index')}}">Volver a Prácticas</a>
    <br><br>

    <form action="{{route('practicas.update', $practica)}}" method="POST">
        
        @csrf

        @method('put')

        <label>Código:
            <br>
            <input type="number" name="codigo" value="{{$practica->codigo}}">
        </label>
        <br><br>

        <label>Estudiante:
            <br>
            <input type="number" name="idEstudiante" value="{{$practica->idEstudiante}}">
        </label>
        <br><br>

        <label>Docente:
            <br>
            <input type="number" name="idDocente" value="{{$practica->idDocente}}">
        </label>
        <br><br>

        <label>Empresa:
            <br>
            <input type="number" name="idEmpresa" value="{{$practica->idEmpresa}}">
        </label>
        <br><br>

        <label>Etapa:
            <br>
            <input type="number" name="idEtapa" value="{{$practica->idEtapa}}">
        </label>
        <br><br>

        <label>Título:
            <br>
            <textarea name="titulo" rows="5">{{$practica->titulo}}</textarea>
        </label>
        <br><br>

        <button type="submit">Actualizar Formulario</button>

    </form>
@endsection