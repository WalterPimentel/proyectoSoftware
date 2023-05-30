@extends('adminlte::page')

@section('title', 'Comisiones y/o Áreas')

@section('content_header')

    <h1>Bienvenido a la Gestión de Comisiones y/o Áreas</h1>

@stop

@section('content')
    
    <a href="{{route('gestionPI.index')}}">Regresar</a>
    <br><br>
    <a href="{{route('comisiones.create')}}">Nueva Comisión</a>
    <ul>
        @foreach ($comisiones as $comision)
            <li>
                <a href="{{route('comisiones.show',$comision->id)}}">{{$comision->nombreComision}}</a>
            </li>
        @endforeach
    </ul>    
    {{$comisiones->links()}}    
    
@stop
