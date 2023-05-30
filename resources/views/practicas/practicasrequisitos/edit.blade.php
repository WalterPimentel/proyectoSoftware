@extends('adminlte::page')

@section('title', 'Editar Practica Requisito')

@section('content_header')

    <h1>En esta página se podrá crear editar un registro de practicas requisitos.</h1>

@stop

@section('content')    

    <a href="{{route('practicasrequisitos.index')}}">Volver a Requisitos</a>
    <br><br>

    <form action="{{route('practicasrequisitos.update', $practicasrequisito)}}" method="POST">
        
        @csrf

        @method('put')

        <label>idPractica:
            <br>
            <input type="number" name="idPractica" value="{{$practicasrequisito->idPractica}}">
        </label>
        <br><br>

        <label>idRequisito:
            <br>
            <input type="number" name="idRequisito" value="{{$practicasrequisito->idRequisito}}">
        </label>
        <br><br>

        <button type="submit">Actualizar Formulario</button>

    </form>

@stop
