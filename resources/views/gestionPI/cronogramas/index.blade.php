@extends('adminlte::page')

@section('title', 'Cronogramas')

@section('content_header')

    <h1>Bienvenido a la Gestión de Cronogramas</h1>

@stop

@section('content')
    
    <a href="{{route('gestionPI.index')}}">Regresar</a>
    <br><br>
    <a href="{{route('cronogramas.create')}}">Nuevo Cronograma</a>
    <ul>
        @foreach ($cronogramas as $cronograma)
            <li>
                <a href="{{route('cronogramas.show',$cronograma->id)}}">{{$cronograma->descripcionCronograma}}</a>
            </li>
        @endforeach
    </ul>    
    {{$cronogramas->links()}}    

@stop
