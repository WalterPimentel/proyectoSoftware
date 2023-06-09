@extends('adminlte::page')

@section('title', 'Editar Tipo Costo')

@section('content_header')

    <h1>En esta página se podrá crear editar un registro de Tipos de Costos.</h1>

@stop

@section('content')    

    <a href="{{route('tiposcostos.index')}}">Regresar</a>
    <br><br>

    <form action="{{route('tiposcostos.update', $tiposcosto)}}" method="POST">
        
        @csrf

        @method('put')

        <label>Tipo Recurso:
            <br>
            <input type="number" name="idTipoRecurso" value="{{$tiposcosto->idTipoRecurso}}">
        </label>
        <br><br>

        <label>Descripción (mayor cuantía 1, menor cuantía 0):
            <br>
            <input type="number" min="0" max="1" name="descripcionCosto" value="{{$tiposcosto->descripcionCosto}}">
        </label>
        <br><br>

        <label>Observaciones:
            <br>
            <textarea name="observacionesCosto" rows="5">{{$tiposcosto->observacionesCosto}}</textarea>
        </label>
        <br><br>

        <button type="submit">Actualizar Formulario</button>

    </form>
    
@stop
