@extends('adminlte::page')

@section('title', 'Docente: ' . $docente->apellidopDocente)

@section('content_header')

    <h1>
        Se encuentra en el registro: 
        {{$docente->apellidopDocente}} 
        {{$docente->apellidomDocente}}, 
        {{$docente->nombresDocente}}
    </h1>

@stop

@section('content')    

    <a href="{{route('docentes.index')}}">Volver a Docentes</a>
    <br><br>

    <a href="{{route('docentes.edit', $docente)}}">Editar Registro</a>
    <br><br>

    <p><strong>Código: {{$docente->codigoDocente}}</strong></p>
    
    <form action="{{route('docentes.destroy', $docente)}}" method="POST">

        @csrf

        @method('delete')

        <button type="submit" class="btn btn-danger">Eliminar</button>

    </form>

@stop