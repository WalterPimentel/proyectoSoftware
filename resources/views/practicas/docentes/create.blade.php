@extends('layouts.plantilla')

@section('title', 'Crear Docentes')

@section('content')
    <h1>En esta página se podrá crear un nuevo registro de docentes.</h1>
    <a href="{{route('docentes.index')}}">Volver a Docentes</a>
@endsection