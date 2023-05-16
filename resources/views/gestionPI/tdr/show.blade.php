@extends('layouts.plantilla')

@section('title', 'TDR: ' . $tdr->descripcionTDR)

@section('content')
    <h1>Se encuentra en el registro: {{$tdr->descripcionTDR}}</h1>
    <a href="{{route('tdr.index')}}">Regresar</a>
    <p><strong>Código: {{$tdr->id}}</strong></p>
@endsection