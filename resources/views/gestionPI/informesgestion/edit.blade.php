@extends('layouts.plantilla')

@section('title', 'Editar Informe de Gestión')

@section('content')
    <h1>En esta página se podrá crear editar un registro de Informes de Gestión.</h1>

    <a href="{{route('informesgestion.index')}}">Regresar</a>
    <br><br>

    <form action="{{route('informesgestion.update', $informegestion)}}" method="POST">
        
        @csrf

        @method('put')

        <label>Monitoreo PFD:
            <br>
            <input type="number" name="idMonitoreoPFD" value="{{$informegestion->idMonitoreoPFD}}">
        </label>
        <br><br>

        <label>Responsable Elaboración:
            <br>
            <input type="number" name="idResponsableElaboracion" value="{{$informegestion->idResponsableElaboracion}}">
        </label>
        <br><br>

        <label>Descripción:
            <br>
            <textarea name="descripcionIG" rows="5">{{$informegestion->descripcionIG}}</textarea>
        </label>
        <br><br>

        <label>Observaciones::
            <br>
            <textarea name="observacionesIG" rows="5">{{$informegestion->observacionesIG}}</textarea>
        </label>
        <br><br>

        <button type="submit">Actualizar Formulario</button>

    </form>
@endsection