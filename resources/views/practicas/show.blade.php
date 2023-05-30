@extends('adminlte::page')

@section('title', 'Practica: ' . $practica->titulo)

@section('content_header')

    <h1>Se encuentra en el registro: {{$practica->titulo}}</h1>

@stop

@section('content')
    
    <a href="{{route('practicas.index')}}">Volver a Prácticas</a>
    <br><br>

    <a href="{{route('practicas.edit', $practica)}}">Editar Registro</a>
    <br><br>

    <p><strong>Código: {{$practica->codigo}}</strong></p>

    <form action="{{route('practicas.destroy', $practica)}}" method="POST">

        @csrf

        @method('delete')

        <button type="submit" class="btn btn-danger">Eliminar</button>

    </form>

@stop