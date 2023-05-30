@extends('adminlte::page')

@section('title', 'Requisitos')

@section('content_header')

    <h1>Bienvenido a la Gestión de Requisitos</h1>

@stop

@section('content')

    <a href="{{route('practicas.index')}}">Volver a Practicas</a> |
    <a href="{{route('requisitos.create')}}">Nuevo Requisito</a>
    <ul>
        @foreach ($requisitos as $requisito)
            <li>
                <a href="{{route('requisitos.show',$requisito->id)}}">{{$requisito->nombreRequisito}}</a>
            </li>
        @endforeach
    </ul>    
    {{$requisitos->links()}}    

@stop
