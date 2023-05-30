@extends('adminlte::page')

@section('title', 'TDR')

@section('content_header')

    <h1>Bienvenido a la Gestión de TDR</h1>

@stop

@section('content')
    
    <a href="{{route('gestionPI.index')}}">Regresar</a>
    <br><br>
    <a href="{{route('tdr.create')}}">Nuevo TDR</a>
    <ul>
        @foreach ($tdr as $td)
            <li>
                <a href="{{route('tdr.show',$td->id)}}">{{$td->descripcionTDR}}</a>
            </li>
        @endforeach
    </ul>    
    {{$tdr->links()}}

@stop
