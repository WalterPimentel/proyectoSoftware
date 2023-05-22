@extends('layouts.plantilla')

@section('title', 'Página Principal')

@section('content')
    <h1>Bienvenido a la Página Principal</h1>
    <a href="{{route('practicas.index')}}">Gestión de Prácticas Preprofesionales</a> |
    <a href="{{route('gestionPI.index')}}">Gestión de Planificación Institucional</a>
@endsection