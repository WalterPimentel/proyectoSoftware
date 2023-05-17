@extends('layouts.plantilla')

@section('title', 'Crear Cronograma')

@section('content')
    <h1>En esta página se podrá crear un nuevo registro de cronograma.</h1>

    <a href="{{route('cronogramas.index')}}">Regresar</a>
    <br><br>

    <form action="{{route('cronogramas.store')}}" method="POST">
        
        @csrf

        <label>Plan FD:
            <br>
            <input type="number" name="idPlanFD">
        </label>
        <br><br>

        <label>Proyecto:
            <br>
            <input type="number" name="idProyecto">
        </label>
        <br><br>

        <label>Descripción:
            <br>
            <textarea name="descripcionCronograma" rows="5"></textarea>
        </label>
        <br><br>

        <button type="submit">Enviar Formulario</button>
        <br><br>

    </form>
@endsection