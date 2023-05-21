@extends('layouts.plantilla')

@section('title', 'Informe: ' . $informegestion->descripcionIG)

@section('content')
    <h1>Se encuentra en el registro: {{$informegestion->descripcionIG}}</h1>

    <a href="{{route('informesgestion.index')}}">Regresar</a>
    <br><br>

    <a href="{{route('informesgestion.edit', $informegestion)}}">Editar Registro</a>
    <br><br>

    Observaciones:
    <br>
    {{$informegestion->observacionesIG}}
    <br><br>

    <p><strong>Código: {{$informegestion->id}}</strong></p>
            
    <form action="{{route('informesgestion.destroy', $informegestion)}}" method="POST">

        @csrf

        @method('delete')

        <button type="submit">Eliminar</button>

    </form>

@endsection