@extends('adminlte::page')

@section('title', 'Informe Gestión')

@section('content_header')

    <h1>Bienvenido a la Gestión de Infrome Gestión</h1>   

@stop

@section('content')
     
    <a href="{{route('gestionPI.index')}}">Regresar</a>
    <br><br>
    <a href="{{route('informesgestion.create')}}">Nuevo Informe</a>
    <ul>
        @foreach ($informesgestion as $informegestion)
            <li>
                <a href="{{route('informesgestion.show',$informegestion->id)}}">{{$informegestion->descripcionIG}}</a>
            </li>
        @endforeach
    </ul>    
    {{$informesgestion->links()}}  

@stop
