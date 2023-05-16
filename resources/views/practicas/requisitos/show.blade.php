@extends('layouts.plantilla')

@section('title', 'Docente: ' . $requisito->nombreRequisito)

@section('content')
    <h1>Se encuentra en el registro: {{$requisito->nombreRequisito}}</h1>
    Descripción:<br>
    {{$requisito->descripcionRequisito}}<br><br>
    <a href="{{route('requisitos.index')}}">Volver a Requisitos</a>
    <p><strong>Código: {{$requisito->id}}</strong></p>
@endsection