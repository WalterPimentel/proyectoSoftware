@extends('layouts.plantilla')

@section('title', 'Etapa: ' . $etapa->nombreEtapa)

@section('content')
    <h1>Se encuentra en el registro: {{$etapa->nombreEtapa}}</h1>

    <a href="{{route('etapas.index')}}">Volver a Etapas</a>
    <br><br>

    <a href="{{route('etapas.edit', $etapa)}}">Editar Registro</a>
    <br><br>

    Descripción:<br>
    {{$etapa->descripcionEtapa}}<br><br>
        
    <p><strong>Código: {{$etapa->id}}</strong></p>

    <form action="{{route('etapas.destroy', $etapa)}}" method="POST">

        @csrf

        @method('delete')

        <button type="submit">Eliminar</button>

    </form>

@endsection