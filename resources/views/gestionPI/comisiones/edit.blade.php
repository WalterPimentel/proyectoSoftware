@extends('layouts.plantilla')

@section('title', 'Editar Comisión')

@section('content')
    <h1>En esta página se podrá crear editar un registro de Comisiones.</h1>

    <a href="{{route('comisiones.index')}}">Regresar</a>
    <br><br>

    <form action="{{route('comisiones.update', $comision)}}" method="POST">
        
        @csrf

        @method('put')

        <label>Docente:
            <br>
            <input type="number" name="idDocente" value="{{$comision->idDocente}}">
        </label>
        <br><br>

        <label>Administrativo:
            <br>
            <input type="number" name="idAdministrativo" value="{{$comision->idAdministrativo}}">
        </label>
        <br><br>

        <label>Nombre Comisión:
            <br>
            <input type="text" name="nombreComision" value="{{$comision->nombreComision}}">
        </label>
        <br><br>

        <label>Macro Proceso:
            <br>
            <input type="text" name="macroProcesoComision" value="{{$comision->macroProcesoComision}}">
        </label>
        <br><br>

        <label>Proceso:
            <br>
            <input type="text" name="procesoComision" value="{{$comision->procesoComision}}">
        </label>
        <br><br>

        <label>Subproceso:
            <br>
            <input type="text" name="subprocesoComision" value="{{$comision->subprocesoComision}}">
        </label>
        <br><br>

        <label>Periodo:
            <br>
            <input type="text" name="periodoComision" value="{{$comision->periodoComision}}">
        </label>
        <br><br>

        <button type="submit">Actualizar Formulario</button>

    </form>
@endsection