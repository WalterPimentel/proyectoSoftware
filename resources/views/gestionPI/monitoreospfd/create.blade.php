@extends('layouts.plantilla')

@section('title', 'Crear Nuevo Monitoreo')

@section('content')
    <h1>En esta página se podrá crear un nuevo registro de Monitoreo PFD.</h1>
    
    <a href="{{route('monitoreospfd.index')}}">Regresar</a>
    <br><br>

    <form action="{{route('monitoreospfd.store')}}" method="POST">
        
        @csrf

        <label>Accion Mejora:
            <br>
            <input type="number" name="idAccionesMejora">
        </label>
        <br><br>

        <label>Descripción:
            <br>
            <textarea name="descripcionMPFD" rows="5"></textarea>
        </label>
        <br><br>

        <label>Avance (%):
            <br>
            <input type="number" step="0.01" min="0" max="100.00" name="porcentajeAvanceMPFD">
        </label>
        <br><br>

        <button type="submit">Enviar Formulario</button>
        <br><br>

    </form>
@endsection