@extends('layouts.plantilla')

@section('title', 'Revisión: ' . $revisionpfd->descripcionRPFD)

@section('content')
    <h1>Se encuentra en el registro: {{$revisionpfd->descripcionRPFD}}</h1>

    <a href="{{route('revisionespfd.index')}}">Regresar</a>
    <br><br>

    <a href="{{route('revisionespfd.edit', $revisionpfd)}}">Editar Registro</a>
    <br><br>

    Observaciones:
    <br>
    {{$revisionpfd->observacionesRPFD}}
    <br><br>

    <p><strong>Código: {{$revisionpfd->id}}</strong></p>
                
    <form action="{{route('revisionespfd.destroy', $revisionpfd)}}" method="POST">

        @csrf

        @method('delete')

        <button type="submit">Eliminar</button>

    </form>

@endsection