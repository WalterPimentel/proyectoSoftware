@extends('layouts.plantilla')

@section('title', 'Informe: ' . $informesgestion->descripcionIG)

@section('content')
    <h1>Se encuentra en el registro: {{$informesgestion->descripcionIG}}</h1>

    <a href="{{route('informesgestion.index')}}">Regresar</a>
    <br><br>

    <a href="{{route('informesgestion.edit', $informesgestion)}}">Editar Registro</a>
    <br><br>

    Observaciones:
    <br>
    {{$informesgestion->observacionesIG}}
    <br><br>

    <p><strong>Código: {{$informesgestion->id}}</strong></p>
            
    <form action="{{route('informesgestion.destroy', $informesgestion)}}" method="POST">

        @csrf

        @method('delete')

        <button type="submit">Eliminar</button>

    </form>

@endsection