@extends('layouts.plantilla')

@section('title', 'Plan: ' . $pfd->id)

@section('content')
    <h1>Se encuentra en el registro: {{$pfd->id}}</h1>
    <a href="{{route('gestionPI.index')}}">Volver a PlanFD</a>
    <p><strong>Descripción: {{$pfd->descripcionPFD}}</strong></p>
@endsection