@extends('layouts.plantilla')

@section('title', 'Revisión: ' . $revisionpfd->descripcionRPFD)

@section('content')
    <h1>Se encuentra en el registro: {{$revisionpfd->descripcionRPFD}}</h1>
    <a href="{{route('revisionespfd.index')}}">Regresar</a>
    <br><br>
    Observaciones:
    <br>
    {{$revisionpfd->observacionesRPFD}}
    <p><strong>Código: {{$revisionpfd->id}}</strong></p>
@endsection