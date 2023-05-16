@extends('layouts.plantilla')

@section('title', 'Etapas')

@section('content')
    <h1>Bienvenido a la Gestión de Etapas</h1>
    <a href="{{route('practicas.index')}}">Volver a Practicas</a> |
    <a href="{{route('etapas.create')}}">Nueva Etapa</a>
    <ul>
        @foreach ($etapas as $etapa)
            <li>
                <a href="{{route('etapas.show',$etapa->id)}}">{{$etapa->nombreEtapa}}</a>
            </li>
        @endforeach
    </ul>    
    {{$etapas->links()}}    
@endsection