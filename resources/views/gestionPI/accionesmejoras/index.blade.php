@extends('adminlte::page')

@section('title', 'Acciones Mejoras')

@section('content_header')

    <h1>Bienvenido a la Gestión de Acciones de Mejora</h1>

@stop

@section('content')
    
    <a href="{{route('gestionPI.index')}}">Regresar</a>
    <br><br>
    <a href="{{route('accionesmejoras.create')}}">Nueva Acción</a>
    <ul>
        @foreach ($accionesmejoras as $accionmejora)
            <li>
                <a href="{{route('accionesmejoras.show',$accionmejora->id)}}">{{$accionmejora->metasAM}}</a>
            </li>
        @endforeach
    </ul>    
    {{$accionesmejoras->links()}}   

@stop
