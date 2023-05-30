@extends('adminlte::page')

@section('title', 'Costo: ' . $tiposcosto->id)

@section('content_header')

    <h1>Se encuentra en el registro: {{$tiposcosto->observacionesCosto}}</h1>

@stop

@section('content')

    <a href="{{route('tiposcostos.index')}}">Regresar</a>
    <br><br>

    <a href="{{route('tiposcostos.edit', $tiposcosto)}}">Editar Registro</a>
    <br><br>

    Cuantía:
    <br>
    {{$tiposcosto->descripcionCosto}}
    <br><br>

    <p><strong>Código: {{$tiposcosto->id}}</strong></p>
                    
    <form action="{{route('tiposcostos.destroy', $tiposcosto)}}" method="POST">

        @csrf

        @method('delete')

        <button type="submit">Eliminar</button>

    </form>

@stop
