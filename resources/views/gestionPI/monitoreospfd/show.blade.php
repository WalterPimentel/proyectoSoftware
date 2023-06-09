@extends('adminlte::page')

@section('title', 'Monitoreo: ' . $monitoreospfd->descripcionMPFD)

@section('content_header')

    <h1>Se encuentra en el registro: {{$monitoreospfd->descripcionMPFD}}</h1>

@stop

@section('content')    

    <a href="{{route('monitoreospfd.index')}}">Regresar</a>
    <br><br>

    <a href="{{route('monitoreospfd.edit', $monitoreospfd)}}">Editar Registro</a>
    <br><br>

    <p><strong>Código: {{$monitoreospfd->id}}</strong></p>
            
    <form action="{{route('monitoreospfd.destroy', $monitoreospfd)}}" method="POST">

        @csrf

        @method('delete')

        <button type="submit">Eliminar</button>

    </form>

@stop
