@extends('adminlte::page')

@section('title', 'Tipo Recursos')

@section('content_header')

    <h1>Bienvenido a la Gestión de Tipo Recursos</h1>

@stop

@section('content')
    
    <a href="{{route('gestionPI.index')}}">Regresar</a>
    <br><br>
    <a href="{{route('tiposrecursos.create')}}">Nuevo Recurso</a>
    <ul>
        @foreach ($tiposrecursos as $tiporecurso)
            <li>
                <a href="{{route('tiposrecursos.show',$tiporecurso->id)}}">{{$tiporecurso->descripcionRecurso}}</a>
            </li>
        @endforeach
    </ul>    
    {{$tiposrecursos->links()}}    
    
@stop
