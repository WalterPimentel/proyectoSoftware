@extends('layouts.plantilla')

@section('title', 'Crear Necesidad')

@section('content')
    <h1>En esta página se podrá crear un nuevo registro de Cuadro Necesidades.</h1>

    <a href="{{route('cuadronecesidades.index')}}">Regresar</a>
    <br><br>

    <form action="{{route('cuadronecesidades.store')}}" method="POST">
        
        @csrf

        <label>Comisión:
            <br>
            <input type="number" name="idComision">
        </label>
        <br><br>

        <label>Tipo Recurso:
            <br>
            <input type="number" name="idTipoRecurso">
        </label>
        <br><br>

        <label>Tipo Costo:
            <br>
            <input type="number" name="idTipoCosto">
        </label>
        <br><br>

        <label>TDR:
            <br>
            <input type="number" name="idTDR">
        </label>
        <br><br>

        <label>Descripción:
            <br>
            <textarea name="descripcionCuadroN" rows="5"></textarea>
        </label>
        <br><br>

        <label>Cantidad:
            <br>
            <input type="number" name="cantidadCuadroN">
        </label>
        <br><br>

        <label>Precio:
            <br>
            <input type="number" step="0.01" name="precioCuadroN">
        </label>
        <br><br>

        <button type="submit">Enviar Formulario</button>
        <br><br>

    </form>
@endsection