@extends('adminlte::page')

@section('title', 'Editar Requisito')

@section('content_header')

    <h1>En esta página se podrá crear editar un registro de requisitos.</h1>

@stop

@section('content')
    
    <a href="{{route('practicas.index')}}">Volver a Prácticas</a>
    <br><br>

    <form action="{{route('requisitos.update', $requisito)}}" method="POST">
        
        @csrf

        @method('put')

        <label>Nombre:
            <br>
            <input type="text" name="nombreRequisito" value="{{$requisito->nombreRequisito}}">
        </label>
        <br><br>

        <label>Descripción:
            <br>
            <textarea name="descripcionRequisito" rows="5">{{$requisito->descripcionRequisito}}</textarea>
        </label>
        <br><br>

        <label>Estado:
            <br>
            <input type="number" name="estado" value="{{$requisito->estado}}">
        </label>
        <br><br>

        <button type="submit">Actualizar Formulario</button>

    </form>

@stop
