@extends('layouts.plantilla')

@section('title', 'Editar Cuadro de Necesidades')

@section('content')
    <h1>En esta página se podrá crear editar un registro de Cuadros de Necesidades.</h1>

    <a href="{{route('cuadronecesidades.index')}}">Regresar</a>
    <br><br>

    <form action="{{route('cuadronecesidades.update', $cuadronecesidad)}}" method="POST">
        
        @csrf

        @method('put')

        <label>Comisión:
            <br>
            <input type="number" name="idComision" value="{{$cuadronecesidad->idComision}}">
        </label>
        <br><br>

        <label>Tipo Recurso:
            <br>
            <input type="number" name="idTipoRecurso" value="{{$cuadronecesidad->idTipoRecurso}}">
        </label>
        <br><br>

        <label>Tipo Costo:
            <br>
            <input type="number" name="idTipoCosto" value="{{$cuadronecesidad->idTipoCosto}}">
        </label>
        <br><br>

        <label>TDR:
            <br>
            <input type="number" name="idTDR" value="{{$cuadronecesidad->idTDR}}">
        </label>
        <br><br>

        <label>Descripción:
            <br>
            <textarea name="descripcionCuadroN" rows="5">{{$cuadronecesidad->descripcionCuadroN}}</textarea>
        </label>
        <br><br>

        <label>Cantidad:
            <br>
            <input type="number" name="cantidadCuadroN" value="{{$cuadronecesidad->cantidadCuadroN}}">
        </label>
        <br><br>

        <label>Precio:
            <br>
            <input type="number" step="0.01" name="precioCuadroN" value="{{$cuadronecesidad->precioCuadroN}}">
        </label>
        <br><br>

        <button type="submit">Actualizar Formulario</button>

    </form>
@endsection