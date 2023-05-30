@extends('adminlte::page')

@section('title', 'Necesidad: ' . $cuadronecesidade->descripcionCuadroN)

@section('content_header')

    <h1>Se encuentra en el registro: {{$cuadronecesidade->descripcionCuadroN}}</h1>

@stop

@section('content')    
    
    <a href="{{route('cuadronecesidades.index')}}">Regresar</a>
    <br><br>

    <a href="{{route('cuadronecesidades.edit', $cuadronecesidade)}}">Editar Registro</a>
    <br><br>

    <p><strong>Código: {{$cuadronecesidade->id}}</strong></p>
        
    <form action="{{route('cuadronecesidades.destroy', $cuadronecesidade)}}" method="POST">

        @csrf

        @method('delete')

        <button type="submit">Eliminar</button>

    </form>

@stop
