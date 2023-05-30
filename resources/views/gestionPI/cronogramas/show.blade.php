@extends('adminlte::page')

@section('title', 'Cronograma: ' . $cronograma->descripcionCronograma)

@section('content_header')

    <h1>Se encuentra en el registro: {{$cronograma->descripcionCronograma}}</h1>

@stop

@section('content')    

    <a href="{{route('cronogramas.index')}}">Regresar</a>
    <br><br>

    <a href="{{route('cronogramas.edit', $cronograma)}}">Editar Registro</a>
    <br><br>

    <p><strong>Código: {{$cronograma->id}}</strong></p>
    
    <form action="{{route('cronogramas.destroy', $cronograma)}}" method="POST">

        @csrf

        @method('delete')

        <button type="submit">Eliminar</button>

    </form>

@stop