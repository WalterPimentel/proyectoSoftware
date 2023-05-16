@extends('layouts.plantilla')

@section('title', 'Tipo Costos')

@section('content')
    <h1>Bienvenido a la Gestión de Tipo Costos</h1>
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
@endsection