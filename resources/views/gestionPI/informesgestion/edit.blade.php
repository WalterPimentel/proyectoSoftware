@extends('adminlte::page')

@section('title', 'Editar Informe de Gestión')

@section('content_header')

    <h1>En esta página se podrá crear editar un registro de Informes de Gestión.</h1>

@stop

@section('content')    

    <a href="{{route('informesgestion.index')}}">Regresar</a>
    <br><br>

    <form action="{{route('informesgestion.update', $informesgestion)}}" method="POST">
        
        @csrf

        @method('put')

        <label>Monitoreo PFD:
            <br>
            <input type="number" name="idMonitoreoPFD" value="{{$informesgestion->idMonitoreoPFD}}">
        </label>
        <br><br>

        <label>Responsable Elaboración:
            <br>
            <input type="number" name="idResponsableElaboracion" value="{{$informesgestion->idResponsableElaboracion}}">
        </label>
        <br><br>

        <label>Descripción:
            <br>
            <textarea name="descripcionIG" rows="5">{{$informesgestion->descripcionIG}}</textarea>
        </label>
        <br><br>

        <label>Observaciones::
            <br>
            <textarea name="observacionesIG" rows="5">{{$informesgestion->observacionesIG}}</textarea>
        </label>
        <br><br>

        <button type="submit">Actualizar Formulario</button>

    </form>

@stop
