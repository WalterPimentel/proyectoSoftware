@extends('layouts.plantilla')

@section('title', 'Crear Comunicado')

@section('content')
    <h1>En esta página se podrá crear un nuevo registro de Comunicados PFD.</h1>
    <a href="{{route('comunicarpfd.index')}}">Regresar</a>
@endsection