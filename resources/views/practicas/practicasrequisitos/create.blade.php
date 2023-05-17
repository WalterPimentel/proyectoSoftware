@extends('layouts.plantilla')

@section('title', 'Crear Practicas Requisitos')

@section('content')
    <h1>En esta página se podrá crear un nuevo registro de prácticas requisitos.</h1>
    <a href="{{route('practicasrequisitos.index')}}">Volver a Prácticas Requisitos</a>
    <br><br>

    <form action="{{route('practicasrequisitos.store')}}" method="POST">
        
        @csrf

        <label>idPractica:
            <br>
            <input type="number" name="idPractica">
        </label>
        <br><br>

        <label>idRequisito:
            <br>
            <input type="number" name="idRequisito">
        </label>
        <br><br>

        <button type="submit">Enviar Formulario</button>

    </form>
@endsection