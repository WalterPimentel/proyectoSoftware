@extends('layouts.plantilla')

@section('title', 'Crear Revisión')

@section('content')
    <h1>En esta página se podrá crear un nuevo registro de Revisiones PFD.</h1>

    <a href="{{route('revisionespfd.index')}}">regresar</a>
    <br><br>

    <form action="{{route('revisionespfd.store')}}" method="POST">
        
        @csrf

        <label>Descripción de Revisión:
            <br>
            <textarea name="descripcionRPFD" rows="5"></textarea>
        </label>
        <br><br>

        <label>Observaciones:
            <br>
            <textarea name="observacionesRPFD" rows="5"></textarea>
        </label>
        <br><br>

        <button type="submit">Enviar Formulario</button>
        <br><br>

    </form>
@endsection