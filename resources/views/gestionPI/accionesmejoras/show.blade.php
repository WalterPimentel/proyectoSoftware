@extends('layouts.plantilla')

@section('title', 'Acción: ' . $accionmejora->metasAM)

@section('content')
    <h1>Se encuentra en el registro: {{$accionmejora->metasAM}}</h1>

    <a href="{{route('accionesmejoras.index')}}">Regresar</a>
    <br><br>

    <a href="{{route('accionesmejoras.edit', $accionmejora)}}">Editar Registro</a>
    <br><br>

    Descripción:
    <br>
    {{$accionmejora->descripcionAM}}
    <br><br>

    <p><strong>Código: {{$accionmejora->id}}</strong></p>
    
    <form action="{{route('accionesmejoras.destroy', $accionmejora)}}" method="POST">

        @csrf

        @method('delete')

        <button type="submit">Eliminar</button>

    </form>

@endsection