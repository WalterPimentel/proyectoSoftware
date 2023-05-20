@extends('layouts.plantilla')

@section('title', 'Costo: ' . $tipocosto->id)

@section('content')
    <h1>Se encuentra en el registro: {{$tipocosto->observacionesCosto}}</h1>

    <a href="{{route('tiposcostos.index')}}">Regresar</a>
    <br><br>

    <a href="{{route('tiposcostos.edit', $tipocosto)}}">Editar Registro</a>
    <br><br>

    Cuantía:
    <br>
    {{$tipocosto->descripcionCosto}}
    <br><br>

    <p><strong>Código: {{$tipocosto->id}}</strong></p>

@endsection