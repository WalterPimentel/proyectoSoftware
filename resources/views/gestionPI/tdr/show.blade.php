@extends('adminlte::page')

@section('title', 'TDR: ' . $tdr->descripcionTDR)

@section('content_header')

    <h1>Se encuentra en el registro: {{$tdr->descripcionTDR}}</h1>

@stop

@section('content')        

    <a href="{{route('tdr.index')}}">Regresar</a>
    <br><br>
    
    <a href="{{route('tdr.edit', $tdr)}}">Editar Registro</a>
    <br><br>

    <p><strong>Código: {{$tdr->id}}</strong></p>
                
    <form action="{{route('tdr.destroy', $tdr)}}" method="POST">

        @csrf

        @method('delete')

        <button type="submit">Eliminar</button>

    </form>

@stop
