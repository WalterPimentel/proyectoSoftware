@extends('layouts.plantilla')

@section('title', 'Informe: ' . $informegestion->descripcionIG)

@section('content')
    <h1>Se encuentra en el registro: {{$informegestion->descripcionIG}}</h1>
    <a href="{{route('informesgestion.index')}}">Regresar</a>
    <br><br>
    Observaciones:
    <br>
    {{$informegestion->observacionesIG}}
    <p><strong>Código: {{$informegestion->id}}</strong></p>
@endsection