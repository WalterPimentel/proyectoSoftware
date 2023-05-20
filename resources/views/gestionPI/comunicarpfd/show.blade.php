@extends('layouts.plantilla')

@section('title', 'Comunicado: ' . $comunicarpfd->descripcionComunicarPFD)

@section('content')
    <h1>Se encuentra en el registro: {{$comunicarpfd->descripcionComunicarPFD}}</h1>

    <a href="{{route('comunicarpfd.index')}}">Volver a Prácticas</a>
    <br><br>

    <a href="{{route('comunicarpfd.edit', $comunicarpfd)}}">Editar Registro</a>
    <br><br>

    Medio:
    <br>
    {{$comunicarpfd->medioComunicarPFD}}
    <br><br>

    <p><strong>Código: {{$comunicarpfd->id}}</strong></p>

@endsection