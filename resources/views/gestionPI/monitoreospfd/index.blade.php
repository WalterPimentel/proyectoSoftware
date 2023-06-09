@extends('adminlte::page')

@section('title', 'Monitoreo PFD')

@section('content_header')

    <h1>Bienvenido a la Gestión de Monitoreo PFD</h1>

@stop

@section('content')

    <a href="{{route('gestionPI.index')}}">Regresar</a>
    <br><br>
    <a href="{{route('monitoreospfd.create')}}">Nuevo Monitoreo</a>
    <ul>
        @foreach ($monitoreospfd as $monitoreopfd)
            <li>
                <a href="{{route('monitoreospfd.show',$monitoreopfd->id)}}">{{$monitoreopfd->descripcionMPFD}}</a>
            </li>
        @endforeach
    </ul>    
    {{$monitoreospfd->links()}}    
    
@stop
