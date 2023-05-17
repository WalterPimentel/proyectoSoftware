@extends('layouts.plantilla')

@section('title', 'Comisiones y Áreas')

@section('content')
    <h1>En esta página se podrá crear un nuevo registro de Comisiones y/o Áreas.</h1>
    <a href="{{route('comisiones.index')}}">Regresar</a>
    <br><br>

    <form action="{{route('comisiones.store')}}" method="POST">
        
        @csrf

        <label>Docente:
            <br>
            <input type="number" name="idDocente">
        </label>
        <br><br>

        <label>Administrativo:
            <br>
            <input type="number" name="idAdministrativo">
        </label>
        <br><br>

        <label>Nombre Comisión:
            <br>
            <input type="text" name="nombreComision">
        </label>
        <br><br>

        <label>Macro Proceso:
            <br>
            <input type="text" name="macroProcesoComision">
        </label>
        <br><br>

        <label>Proceso:
            <br>
            <input type="text" name="procesoComision">
        </label>
        <br><br>

        <label>Subproceso:
            <br>
            <input type="text" name="subprocesoComision">
        </label>
        <br><br>

        <label>Periodo:
            <br>
            <input type="text" name="periodoComision">
        </label>
        <br><br>

        <button type="submit">Enviar Formulario</button>
        <br><br>

    </form>
@endsection