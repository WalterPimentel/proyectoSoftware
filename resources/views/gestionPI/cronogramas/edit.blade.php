@extends('adminlte::page')

@section('title', 'Editar Cronograma')

@section('content_header')

    <h1>En esta página se podrá crear editar un registro de cronogramas.</h1>

@stop

@section('content')    

    <a href="{{route('cronogramas.index')}}">Regresar</a>
    <br><br>

    <form action="{{route('cronogramas.update', $cronograma)}}" method="POST">
        
        @csrf

        @method('put')

        <label>Plan FD:
            <br>
            <input type="number" name="idPlanFD" value="{{$cronograma->idPlanFD}}">
        </label>
        <br><br>

        <label>Proyecto:
            <br>
            <input type="number" name="idProyecto" value="{{$cronograma->idProyecto}}">
        </label>
        <br><br>

        <label>Descripción:
            <br>
            <textarea name="descripcionCronograma" rows="5">{{$cronograma->descripcionCronograma}}</textarea>
        </label>
        <br><br>

        <button type="submit">Actualizar Formulario</button>

    </form>

@stop
