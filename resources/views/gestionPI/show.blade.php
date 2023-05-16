@extends('layouts.plantilla')

@section('title', 'Plan: ' . $pfd->id)

@section('content')
    <h1>Se encuentra en el registro: {{$pfd->id}}</h1>    
    <br><br>
    <a href="{{route('gestionPI.indexPI')}}">Volver a PlanFD</a>
    <p><strong>Descripción: {{$pfd->descripcionPFD}}</strong></p>
@endsection