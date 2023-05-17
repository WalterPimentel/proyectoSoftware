@extends('layouts.plantilla')

@section('title', 'Crear Costo')

@section('content')
    <h1>En esta página se podrá crear un nuevo registro de Tipo Costos.</h1>

    <a href="{{route('tiposcostos.index')}}">Regresar</a>
    <br><br>

    <form action="{{route('tiposcostos.store')}}" method="POST">
        
        @csrf

        <label>Tipo Recurso:
            <br>
            <input type="number" name="idTipoRecurso">
        </label>
        <br><br>

        <label>Descripción (mayor cuantía 1, menor cuantía 0):
            <br>
            <input type="number" min="0" max="1" name="descripcionCosto">
        </label>
        <br><br>

        <label>Observaciones:
            <br>
            <textarea name="observacionesCosto" rows="5"></textarea>
        </label>
        <br><br>

        <button type="submit">Enviar Formulario</button>
        <br><br>

    </form>
@endsection