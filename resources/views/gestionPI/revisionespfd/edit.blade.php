@extends('layouts.plantilla')

@section('title', 'Editar Revisión PFD')

@section('content')
    <h1>En esta página se podrá crear editar un registro de Revisiones PFD.</h1>

    <a href="{{route('revisionespfd.index')}}">Regresar</a>
    <br><br>

    <form action="{{route('revisionespfd.update', $revisionespfd)}}" method="POST">
        
        @csrf

        @method('put')

        <label>Descripción de Revisión:
            <br>
            <textarea name="descripcionRPFD" rows="5">{{$revisionespfd->descripcionRPFD}}</textarea>
        </label>
        <br><br>

        <label>Observaciones:
            <br>
            <textarea name="observacionesRPFD" rows="5">{{$revisionespfd->observacionesRPFD}}</textarea>
        </label>
        <br><br>

        <button type="submit">Actualizar Formulario</button>

    </form>
@endsection