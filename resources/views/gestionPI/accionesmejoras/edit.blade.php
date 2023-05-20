@extends('layouts.plantilla')

@section('title', 'Editar Acción de Mejora')

@section('content')
    <h1>En esta página se podrá crear editar un registro de Acciones Mejoras.</h1>

    <a href="{{route('accionesmejoras.index')}}">Regresar</a>
    <br><br>

    <form action="{{route('accionesmejoras.update', $accionmejora)}}" method="POST">
        
        @csrf

        @method('put')

        <label>Comisión:
            <br>
            <input type="number" name="idComision" value="{{$accionmejora->idComision}}">
        </label>
        <br><br>

        <label>Plan FD:
            <br>
            <input type="number" name="idPlanFD" value="{{$accionmejora->idPlanFD}}">
        </label>
        <br><br>

        <label>Monitoreo PFD:
            <br>
            <input type="number" name="idMonitoreoPFD" value="{{$accionmejora->idMonitoreoPFD}}">
        </label>
        <br><br>

        <label>Tipo Recurso:
            <br>
            <input type="number" name="idTipoRecurso" value="{{$accionmejora->idTipoRecurso}}">
        </label>
        <br><br>

        <label>Metas:
            <br>
            <textarea name="metasAM" rows="5">{{$accionmejora->metasAM}}</textarea>
        </label>
        <br><br>

        <label>Descripción:
            <br>
            <textarea name="descripcionAM" rows="5">{{$accionmejora->descripcionAM}}</textarea>
        </label>
        <br><br>

        <button type="submit">Actualizar Formulario</button>

    </form>
@endsection