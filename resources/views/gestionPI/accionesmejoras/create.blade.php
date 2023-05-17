@extends('layouts.plantilla')

@section('title', 'Crear Acciones de Mejora')

@section('content')
    <h1>En esta página se podrá crear una Nueva Accion de Mejora.</h1>
    <a href="{{route('accionesmejoras.index')}}">Regresar</a>
    <br><br>

    <form action="{{route('accionesmejoras.store')}}" method="POST">
        
        @csrf

        <label>Comisión:
            <br>
            <input type="number" name="idComision">
        </label>
        <br><br>

        <label>Plan FD:
            <br>
            <input type="number" name="idPlanFD">
        </label>
        <br><br>

        <label>Monitoreo PFD:
            <br>
            <input type="number" name="idMonitoreoPFD">
        </label>
        <br><br>

        <label>Tipo Recurso:
            <br>
            <input type="number" name="idTipoRecurso">
        </label>
        <br><br>

        <label>Metas:
            <br>
            <textarea name="metasAM" rows="5"></textarea>
        </label>
        <br><br>

        <label>Descripción:
            <br>
            <textarea name="descripcionAM" rows="5"></textarea>
        </label>
        <br><br>

        <button type="submit" >Enviar Formulario</button>
        <br><br>

    </form>
@endsection