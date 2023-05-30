@extends('adminlte::page')

@section('title', 'Tipo Costos')

@section('content_header')

    <h1>Bienvenido a la Gestión de Tipo Costos</h1>

@stop

@section('content')

    <a href="{{route('gestionPI.index')}}">Regresar</a>
    <br><br>
    <a href="{{route('tiposcostos.create')}}">Nuevo Costo</a>
    <ul>
        @foreach ($tiposcostos as $tipocosto)
            <li>
                <a href="{{route('tiposcostos.show',$tipocosto->id)}}">Cuantía: {{$tipocosto->descripcionCosto}}</a>
            </li>
        @endforeach
    </ul>    
    {{$tiposcostos->links()}}    
    
@stop
