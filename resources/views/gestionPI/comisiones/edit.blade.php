@extends('adminlte::page')

@section('title', 'Editar Comisión')

@section('content_header')

    <h1>En esta página se podrá crear editar un registro de Comisiones.</h1>

@stop

@section('content')    

    <a href="{{route('comisiones.index')}}">Regresar</a>
    <br><br>

    <form action="{{route('comisiones.update', $comisione)}}" method="POST">
        
        @csrf

        @method('put')

        <label>Docente:
            <br>
            <input type="number" name="idDocente" value="{{$comisione->idDocente}}">
        </label>
        <br><br>

        <label>Administrativo:
            <br>
            <input type="number" name="idAdministrativo" value="{{$comisione->idAdministrativo}}">
        </label>
        <br><br>

        <label>Nombre Comisión:
            <br>
            <input type="text" name="nombreComision" value="{{$comisione->nombreComision}}">
        </label>
        <br><br>

        <label>Macro Proceso:
            <br>
            <input type="text" name="macroProcesoComision" value="{{$comisione->macroProcesoComision}}">
        </label>
        <br><br>

        <label>Proceso:
            <br>
            <input type="text" name="procesoComision" value="{{$comisione->procesoComision}}">
        </label>
        <br><br>

        <label>Subproceso:
            <br>
            <input type="text" name="subprocesoComision" value="{{$comisione->subprocesoComision}}">
        </label>
        <br><br>

        <label>Periodo:
            <br>
            <input type="text" name="periodoComision" value="{{$comisione->periodoComision}}">
        </label>
        <br><br>

        <button type="submit">Actualizar Formulario</button>

    </form>
    
@stop
