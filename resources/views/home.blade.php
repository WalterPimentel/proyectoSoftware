@extends('adminlte::page')

@section('title', 'Página Principal')

@section('content_header')

    <h1>Bienvenido a la Página Principal</h1>

@stop

@section('content')
    
    <a href="{{route('practicas.index')}}">Gestión de Prácticas Preprofesionales</a> |
    <a href="{{route('gestionPI.index')}}">Gestión de Planificación Institucional</a>

@stop