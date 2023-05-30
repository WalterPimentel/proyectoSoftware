@extends('adminlte::page')

@section('title', 'Editar Etapa')

@section('content_header')

    <h1>En esta página se podrá crear editar un registro de etapas.</h1>

@stop

@section('content')    

    <a href="{{route('practicas.index')}}">Volver a Prácticas</a>
    <br><br>

    <form action="{{route('etapas.update', $etapa)}}" method="POST">
        
        @csrf

        @method('put')

        <label>Nombre:
            <br>
            <input type="text" name="nombreEtapa" value="{{$etapa->nombreEtapa}}">
        </label>
        <br><br>

        <label>Descripción:
            <br>
            <textarea name="descripcionEtapa" rows="5">{{$etapa->descripcionEtapa}}</textarea>
        </label>
        <br><br>

        <button type="submit">Actualizar Formulario</button>

    </form>

@stop
