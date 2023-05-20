@extends('layouts.plantilla')

@section('title', 'Editar Comunicado de PFD')

@section('content')
    <h1>En esta página se podrá crear editar un registro de Comunicados de PFD.</h1>

    <a href="{{route('comunicarpfd.index')}}">Regresar</a>
    <br><br>

    <form action="{{route('comunicarpfd.update', $comunicarpfd)}}" method="POST">
        
        @csrf

        @method('put')

        <label>Plan FD:
            <br>
            <input type="number" name="idPlanFD" value="{{$comunicarpfd->idPlanFD}}">
        </label>
        <br><br>

        <label>Parte Interesada:
            <br>
            <input type="number" name="idParteInteresada" value="{{$comunicarpfd->idParteInteresada}}">
        </label>
        <br><br>

        <label>Descripción:
            <br>
            <textarea name="descripcionComunicarPFD" rows="5">{{$comunicarpfd->descripcionComunicarPFD}}</textarea>
        </label>
        <br><br>

        <label>Medio Comunicación:
            <br>
            <input type="text" name="medioComunicarPFD" value="{{$comunicarpfd->medioComunicarPFD}}">
        </label>
        <br><br>

        <label>Fecha:
            <br>
            <input type="date" name="fechaComunicarPFD" value="{{$comunicarpfd->fechaComunicarPFD}}">
        </label>
        <br><br>

        <label>Hora:
            <br>
            <input type="time" name="horaComunicarPFD" value="{{$comunicarpfd->horaComunicarPFD}}">
        </label>
        <br><br>

        <label>Observaciones:
            <br>
            <textarea name="observacionesComunicarPFD" rows="5">{{$comunicarpfd->observacionesComunicarPFD}}</textarea>
        </label>
        <br><br>

        <button type="submit">Actualizar Formulario</button>

    </form>
@endsection