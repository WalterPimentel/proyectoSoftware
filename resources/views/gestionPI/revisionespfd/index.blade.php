@extends('adminlte::page')

@section('title', 'Revisiones PFD')

@section('content_header')

    <h1>Bienvenido a la Gestión de Revisines PFD</h1>

@stop

@section('content')
    
    <a href="{{route('gestionPI.index')}}">Regresar</a>
    <br><br>
    <a href="{{route('revisionespfd.create')}}">Nueva Revision</a>
    <ul>
        @foreach ($revisionespfd as $revisionpfd)
            <li>
                <a href="{{route('revisionespfd.show',$revisionpfd->id)}}">{{$revisionpfd->descripcionRPFD}}</a>
            </li>
        @endforeach
    </ul>    
    {{$revisionespfd->links()}}    

@stop
