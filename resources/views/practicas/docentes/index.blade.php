@extends('adminlte::page')

@section('title', 'Docentes')

@section('content_header')

    <h1>Bienvenido a la Gestión de Docentes</h1>

@stop

@section('content')
    
    <a href="{{route('practicas.index')}}">Volver a Practicas</a> |
    <a href="{{route('docentes.create')}}">Nuevo Docente</a>
    <ul>
        @foreach ($docentes as $docente)
            <li>
                <a href="{{route('docentes.show',$docente->id)}}">{{$docente->apellidopDocente}} {{$docente->apellidomDocente}}, {{$docente->nombresDocente}}</a>
            </li>
        @endforeach
    </ul>    
    {{$docentes->links()}}    

@stop
