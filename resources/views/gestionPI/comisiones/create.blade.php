@extends('layouts.plantilla')

@section('title', 'Comisiones y Áreas')

@section('content')
    <h1>En esta página se podrá crear un nuevo registro de Comisiones y/o Áreas.</h1>
    <a href="{{route('comisiones.index')}}">Regresar</a>
@endsection