@extends('layouts.plantilla')

@section('title', 'Editar Practica Requisito')

@section('content')
    <h1>En esta página se podrá crear editar un registro de practicas requisitos.</h1>

    <a href="{{route('practicas.index')}}">Volver a Prácticas</a>
    <br><br>

    <form action="{{route('practicasrequisitos.update', $practicaRequisito)}}" method="POST">
        
        @csrf

        @method('put')

        <label>idPractica:
            <br>
            <input type="number" name="idPractica" value="{{$practicaRequisito->idPractica}}">
        </label>
        <br><br>

        <label>idRequisito:
            <br>
            <input type="number" name="idRequisito" value="{{$practicaRequisito->idRequisito}}">
        </label>
        <br><br>

        <button type="submit">Actualizar Formulario</button>

    </form>
@endsection