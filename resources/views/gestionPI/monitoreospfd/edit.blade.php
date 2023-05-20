@extends('layouts.plantilla')

@section('title', 'Editar Monitoreo de PFD')

@section('content')
    <h1>En esta página se podrá crear editar un registro de Monitoreos de PFD.</h1>

    <a href="{{route('monitoreospfd.index')}}">Regresar</a>
    <br><br>

    <form action="{{route('monitoreospfd.update', $monitoreopfd)}}" method="POST">
        
        @csrf

        @method('put')

        <label>Accion Mejora:
            <br>
            <input type="number" name="idAccionesMejora" value="{{$monitoreopfd->idAccionesMejora}}">
        </label>
        <br><br>

        <label>Descripción:
            <br>
            <textarea name="descripcionMPFD" rows="5">{{$monitoreopfd->descripcionMPFD}}</textarea>
        </label>
        <br><br>

        <label>Avance (%):
            <br>
            <input type="number" step="0.01" min="0" max="100.00" name="porcentajeAvanceMPFD" value="{{$monitoreopfd->porcentajeAvanceMPFD}}">
        </label>
        <br><br>

        <button type="submit">Actualizar Formulario</button>

    </form>
@endsection