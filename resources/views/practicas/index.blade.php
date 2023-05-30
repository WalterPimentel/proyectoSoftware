@extends('adminlte::page')

@section('title', 'Prácticas Preprofesionales')

@section('content_header')

    <h1>Bienvenido a la Gestión de Practicas Preprofesionales</h1>

@stop

@section('content')
    
    <a href="{{route('home')}}">Inicio</a> |
    <a href="{{route('docentes.index')}}">Docentes</a> |
    <a href="{{route('empresas.index')}}">Empresas</a> |
    <a href="{{route('estudiantes.index')}}">Estudiantes</a> |
    <a href="{{route('etapas.index')}}">Etapas</a> |
    <a href="{{route('practicasrequisitos.index')}}">Practicas Requisitos</a> |
    <a href="{{route('requisitos.index')}}">Requisitos</a>
    <br><br>
    <a href="{{route('practicas.create')}}">Nueva Practica</a>
    <ul>
        @foreach ($practicas as $practica)
            <li>
                <a href="{{route('practicas.show',$practica->id)}}">{{$practica->titulo}}</a>
            </li>
        @endforeach
    </ul>    
    {{$practicas->links()}}    

@stop
