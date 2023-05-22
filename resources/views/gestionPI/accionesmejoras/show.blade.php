@extends('layouts.plantilla')

@section('title', 'Acción: ' . $accionesmejora->metasAM)

@section('content')
    <h1>Se encuentra en el registro: {{$accionesmejora->metasAM}}</h1>

    <a href="{{route('accionesmejoras.index')}}">Regresar</a>
    <br><br>

    <a href="{{route('accionesmejoras.edit', $accionesmejora)}}">Editar Registro</a>
    <br><br>

    Descripción:
    <br>
    {{$accionesmejora->descripcionAM}}
    <br><br>

    <p><strong>Código: {{$accionesmejora->id}}</strong></p>
    
    <form action="{{route('accionesmejoras.destroy', $accionesmejora)}}" method="POST">

        @csrf

        @method('delete')

        <button type="submit">Eliminar</button>

    </form>

@endsection