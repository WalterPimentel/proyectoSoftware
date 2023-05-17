@extends('layouts.plantilla')

@section('title', 'Crear Informe')

@section('content')
    <h1>En esta página se podrá crear un nuevo registro de Informe Gestión.</h1>

    <a href="{{route('informesgestion.index')}}">Regresar</a>
    <br><br>

    <form action="{{route('informesgestion.store')}}" method="POST">
        
        @csrf

        <label>Monitoreo PFD:
            <br>
            <input type="number" name="idMonitoreoPFD">
        </label>
        <br><br>

        <label>Responsable Elaboración:
            <br>
            <input type="number" name="idResponsableElaboracion">
        </label>
        <br><br>

        <label>Descripción:
            <br>
            <textarea name="descripcionIG" rows="5"></textarea>
        </label>
        <br><br>

        <label>Observaciones::
            <br>
            <textarea name="observacionesIG" rows="5"></textarea>
        </label>
        <br><br>

        <button type="submit">Enviar Formulario</button>
        <br><br>

    </form>
@endsection