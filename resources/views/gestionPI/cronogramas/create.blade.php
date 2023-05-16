@extends('layouts.plantilla')

@section('title', 'Crear Cronograma')

@section('content')
    <h1>En esta página se podrá crear un nuevo registro de cronograma.</h1>
    <a href="{{route('cronogramas.index')}}">Regresar</a>
@endsection