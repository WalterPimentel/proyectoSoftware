@extends('layouts.plantilla')

@section('title', 'Comisión: ' . $comision->nombreComision)

@section('content')
    <h1>Se encuentra en el registro: {{$comision->nombreComision}}</h1>

    <a href="{{route('comisiones.index')}}">Regresar</a>
    <br><br>

    <a href="{{route('comisiones.edit', $comision)}}">Editar Registro</a>
    <br><br>

    Macro Proceso:
    <br>
    {{$comision->macroProcesoComision}}
    <br><br>

    Proceso:
    <br>
    {{$comision->procesoComision}}
    <br><br>

    Sub Proceso:
    <br>
    {{$comision->subprocesoComision}}
    <br><br>

    Periodo:
    <br>
    {{$comision->periodoComision}}
    <br><br>

    <p><strong>Código: {{$comision->id}}</strong></p>

@endsection