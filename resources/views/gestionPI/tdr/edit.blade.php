@extends('layouts.plantilla')

@section('title', 'Editar TDR')

@section('content')
    <h1>En esta página se podrá crear editar un registro de TDR.</h1>

    <a href="{{route('tdr.index')}}">Regresar</a>
    <br><br>

    <form action="{{route('tdr.update', $tdr)}}" method="POST">
        
        @csrf

        @method('put')

        <label>Tipo Recurso:
            <br>
            <input type="number" name="idTipoRecurso" value="{{$tdr->idTipoRecurso}}">
        </label>
        <br><br>

        <label>Mayor Cuantia:
            <br>
            <input type="number" name="mayorCuantiaTDR" value="{{$tdr->mayorCuantiaTDR}}">
        </label>
        <br><br>

        <label>Descripción:
            <br>
            <textarea name="descripcionTDR" rows="5">{{$tdr->descripcionTDR}}</textarea>
        </label>
        <br><br>

        <label>Costo:
            <br>
            <input type="number" step="0.01" name="costoTDR" value="{{$tdr->costoTDR}}">
        </label>
        <br><br>

        <button type="submit">Actualizar Formulario</button>

    </form>
@endsection