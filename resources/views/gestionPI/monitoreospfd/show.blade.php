@extends('layouts.plantilla')

@section('title', 'Monitoreo: ' . $monitoreopfd->descripcionMPFD)

@section('content')
    <h1>Se encuentra en el registro: {{$monitoreopfd->descripcionMPFD}}</h1>
    <a href="{{route('monitoreospfd.index')}}">Regresar</a>
    <p><strong>Código: {{$monitoreopfd->id}}</strong></p>
@endsection