@extends('layouts.plantilla')

@section('title', 'Cronograma: ' . $cronograma->descripcionCronograma)

@section('content')
    <h1>Se encuentra en el registro: {{$cronograma->descripcionCronograma}}</h1>
    <a href="{{route('cronogramas.index')}}">Regresar</a>
    <p><strong>Código: {{$cronograma->id}}</strong></p>
@endsection