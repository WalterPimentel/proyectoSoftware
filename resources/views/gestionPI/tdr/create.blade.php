@extends('layouts.plantilla')

@section('title', 'Crear TDR')

@section('content')
    <h1>En esta página se podrá crear un nuevo registro de TDR.</h1>

    <a href="{{route('tdr.index')}}">Regresar</a>
    <br><br>

    <form action="{{route('tdr.store')}}" method="POST">
        
        @csrf

        <label>Tipo Recurso:
            <br>
            <input type="number" name="idTipoRecurso">
        </label>
        <br><br>

        <label>Mayor Cuantia:
            <br>
            <input type="number" name="mayorCuantiaTDR">
        </label>
        <br><br>

        <label>Descripción:
            <br>
            <textarea name="descripcionTDR" rows="5"></textarea>
        </label>
        <br><br>

        <label>Costo:
            <br>
            <input type="number" step="0.01" name="costoTDR">
        </label>
        <br><br>

        <button type="submit">Enviar Formulario</button>
        <br><br>

    </form>
@endsection