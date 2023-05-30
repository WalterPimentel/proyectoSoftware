@extends('adminlte::page')

@section('title', 'Comunicado: ' . $comunicarpfd->descripcionComunicarPFD)

@section('content_header')

    <h1>Se encuentra en el registro: {{$comunicarpfd->descripcionComunicarPFD}}</h1>

@stop

@section('content')    

    <a href="{{route('comunicarpfd.index')}}">Volver a Prácticas</a>
    <br><br>

    <a href="{{route('comunicarpfd.edit', $comunicarpfd)}}">Editar Registro</a>
    <br><br>

    Medio:
    <br>
    {{$comunicarpfd->medioComunicarPFD}}
    <br><br>

    <p><strong>Código: {{$comunicarpfd->id}}</strong></p>

    <form action="{{route('comunicarpfd.destroy', $comunicarpfd)}}" method="POST">

        @csrf

        @method('delete')

        <button type="submit">Eliminar</button>

    </form>

@stop
