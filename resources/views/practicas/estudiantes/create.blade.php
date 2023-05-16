@extends('layouts.plantilla')

@section('title', 'Crear Estudiantes')

@section('content')
    <h1>En esta página se podrá crear un nuevo registro de estudiantes.</h1>
    <a href="{{route('estudiantes.index')}}">Volver a Estudiantes</a>
@endsection