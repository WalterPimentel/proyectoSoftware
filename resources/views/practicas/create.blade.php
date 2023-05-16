@extends('layouts.plantilla')

@section('title', 'Registrar')

@section('content')
    <h1>En esta página se podrá crear un nuevo registro de practicas.</h1>
    <a href="{{route('practicas.index')}}">Volver a Prácticas</a>
@endsection