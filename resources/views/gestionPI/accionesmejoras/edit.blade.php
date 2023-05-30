@extends('adminlte::page')

@section('title', 'Editar Acción de Mejora')

@section('content_header')

    <h1>En esta página se podrá crear editar un registro de Acciones Mejoras.</h1>

@stop

@section('content')    

    <a href="{{route('accionesmejoras.index')}}">Regresar</a>
    <br><br>

    <form action="{{route('accionesmejoras.update', $accionesmejora)}}" method="POST">
        
        @csrf

        @method('put')

        <label>Comisión:
            <br>
            <input type="number" name="idComision" value="{{$accionesmejora->idComision}}">
        </label>
        <br><br>

        <label>Plan FD:
            <br>
            <input type="number" name="idPlanFD" value="{{$accionesmejora->idPlanFD}}">
        </label>
        <br><br>

        <label>Monitoreo PFD:
            <br>
            <input type="number" name="idMonitoreoPFD" value="{{$accionesmejora->idMonitoreoPFD}}">
        </label>
        <br><br>

        <label>Tipo Recurso:
            <br>
            <input type="number" name="idTipoRecurso" value="{{$accionesmejora->idTipoRecurso}}">
        </label>
        <br><br>

        <label>Metas:
            <br>
            <textarea name="metasAM" rows="5">{{$accionesmejora->metasAM}}</textarea>
        </label>
        <br><br>

        <label>Descripción:
            <br>
            <textarea name="descripcionAM" rows="5">{{$accionesmejora->descripcionAM}}</textarea>
        </label>
        <br><br>

        <button type="submit">Actualizar Formulario</button>

    </form>

@stop
