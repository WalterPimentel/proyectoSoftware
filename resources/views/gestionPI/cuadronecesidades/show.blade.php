@extends('layouts.plantilla')

@section('title', 'Necesidad: ' . $cuadronecesidad->descripcionCuadroN)

@section('content')
    <h1>Se encuentra en el registro: {{$cuadronecesidad->descripcionCuadroN}}</h1>
    <a href="{{route('cuadronecesidades.index')}}">Regresar</a>
    <p><strong>Código: {{$cuadronecesidad->id}}</strong></p>
@endsection