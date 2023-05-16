@extends('layouts.plantilla')

@section('title', 'Estudiantes')

@section('content')
    <h1>Bienvenido a la Gestión de Estudiantes</h1>
    <a href="{{route('practicas.index')}}">Volver a Practicas</a> |
    <a href="{{route('estudiantes.create')}}">Nuevo Estudiante</a>
    <ul>
        @foreach ($estudiantes as $estudiante)
            <li>
                <a href="{{route('estudiantes.show',$estudiante->id)}}">{{$estudiante->apellidopEstudiante}} {{$estudiante->apellidomEstudiante}}, {{$estudiante->nombresEstudiante}}</a>
            </li>
        @endforeach
    </ul>    
    {{$estudiantes->links()}}    
@endsection