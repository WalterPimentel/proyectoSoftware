@extends('adminlte::page')

@section('title', 'Planificación Institucional')

@section('content_header')

    <h1>Bienvenido a la Página Principal de la Gestión de Planificación Institucional</h1>

@stop

@section('content')

    <a href="{{route('home')}}">Inicio</a> |
    <a href="{{route('accionesmejoras.index')}}">Acciones Mejora</a> |
    <a href="{{route('comisiones.index')}}">Comisiones</a> |
    <a href="{{route('comunicarpfd.index')}}">Comunicar PFD</a> |
    <a href="{{route('cronogramas.index')}}">Cronograma</a> |
    <a href="{{route('cuadronecesidades.index')}}">Cuadro Necesidades</a> |
    <a href="{{route('informesgestion.index')}}">Informe Gestión</a> |
    <a href="{{route('monitoreospfd.index')}}">Monitoreo PFD</a> |
    <a href="{{route('revisionespfd.index')}}">Revisión PFD</a> |
    <a href="{{route('tdr.index')}}">TDR</a> |
    <a href="{{route('tiposcostos.index')}}">Tipo Costo</a> |
    <a href="{{route('tiposrecursos.index')}}">Tipo Recurso</a>    
    <br><br>
    <a href="{{route('gestionPI.create')}}">Nuevo Plan</a>
    <ul>
        @foreach ($pfds as $pfd)
            <li>
                <a href="{{route('gestionPI.show', $pfd->id)}}">{{$pfd->descripcionPFD}}</a>
            </li>
        @endforeach
    </ul>    
    {{$pfds->links()}}   

@stop
