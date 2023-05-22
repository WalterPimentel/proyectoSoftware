@extends('layouts.plantilla')

@section('title', 'Comisión: ' . $comisione->nombreComision)

@section('content')
    <h1>Se encuentra en el registro: {{$comisione->nombreComision}}</h1>

    <a href="{{route('comisiones.index')}}">Regresar</a>
    <br><br>

    <a href="{{route('comisiones.edit', $comisione)}}">Editar Registro</a>
    <br><br>

    Macro Proceso:
    <br>
    {{$comisione->macroProcesoComision}}
    <br><br>

    Proceso:
    <br>
    {{$comisione->procesoComision}}
    <br><br>

    Sub Proceso:
    <br>
    {{$comisione->subprocesoComision}}
    <br><br>

    Periodo:
    <br>
    {{$comisione->periodoComision}}
    <br><br>

    <p><strong>Código: {{$comisione->id}}</strong></p>
    
    <form action="{{route('comisiones.destroy', $comisione)}}" method="POST">

        @csrf

        @method('delete')

        <button type="submit">Eliminar</button>

    </form>

@endsection