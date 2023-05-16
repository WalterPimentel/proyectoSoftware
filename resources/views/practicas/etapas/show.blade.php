@extends('layouts.plantilla')

@section('title', 'Etapa: ' . $etapa->nombreEtapa)

@section('content')
    <h1>Se encuentra en el registro: {{$etapa->nombreEtapa}}</h1>
    Descripción:<br>
    {{$etapa->descripcionEtapa}}<br><br>
    <a href="{{route('etapas.index')}}">Volver a Etapas</a>
    <p><strong>Código: {{$etapa->id}}</strong></p>
@endsection