@extends('adminlte::page')

@section('title', 'Requisito: ' . $requisito->nombreRequisito)

@section('content_header')

    <h1>Se encuentra en el registro: {{$requisito->nombreRequisito}}</h1>

@stop

@section('content')    

    <a href="{{route('requisitos.index')}}">Volver a Requisitos</a>
    <br><br>

    <a href="{{route('requisitos.edit', $requisito)}}">Editar Registro</a>
    <br><br>

    Descripción:
    <br>
    {{$requisito->descripcionRequisito}}
    <br><br>    

    <p><strong>Código: {{$requisito->id}}</strong></p>

    <form action="{{route('requisitos.destroy', $requisito)}}" method="POST">

        @csrf

        @method('delete')

        <button type="submit">Eliminar</button>

    </form>

@stop
