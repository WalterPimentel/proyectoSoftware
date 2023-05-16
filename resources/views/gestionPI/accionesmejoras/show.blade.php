@extends('layouts.plantilla')

@section('title', 'Acción: ' . $accionmejora->metasAM)

@section('content')
    <h1>Se encuentra en el registro: {{$accionmejora->metasAM}}</h1>
    <a href="{{route('accionesmejoras.index')}}">Regresar</a>
    <br><br>
    Descripción:<br>
    {{$accionmejora->descripcionAM}}
    <p><strong>Código: {{$accionmejora->id}}</strong></p>
@endsection