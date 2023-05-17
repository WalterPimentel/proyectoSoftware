@extends('layouts.plantilla')

@section('title', 'Crear Etapas')

@section('content')
    <h1>En esta página se podrá crear un nuevo registro de etapas.</h1>
    <a href="{{route('etapas.index')}}">Volver a Etapas</a>
    <br><br>

    <form action="{{route('etapas.store')}}" method="POST">
        
        @csrf

        <label>Nombre:
            <br>
            <input type="text" name="nombreEtapa">
        </label>
        <br><br>

        <label>Descripción:
            <br>
            <textarea name="descripcionEtapa" rows="5"></textarea>
        </label>
        <br><br>

        <button type="submit">Enviar Formulario</button>

    </form>
@endsection