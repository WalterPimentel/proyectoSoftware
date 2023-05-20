@extends('layouts.plantilla')

@section('title', 'Practica: ' . $practica->titulo)

@section('content')
    <h1>Se encuentra en el registro: {{$practica->titulo}}</h1>

    <a href="{{route('practicas.index')}}">Volver a Prácticas</a>
    <br><br>

    <a href="{{route('practicas.edit', $practica)}}">Editar Registro</a>
    <br><br>

    <p><strong>Código: {{$practica->codigo}}</strong></p>

@endsection