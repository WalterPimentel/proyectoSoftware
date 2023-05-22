@extends('layouts.plantilla')

@section('title', 'Revisión: ' . $revisionespfd->descripcionRPFD)

@section('content')
    <h1>Se encuentra en el registro: {{$revisionespfd->descripcionRPFD}}</h1>

    <a href="{{route('revisionespfd.index')}}">Regresar</a>
    <br><br>

    <a href="{{route('revisionespfd.edit', $revisionespfd)}}">Editar Registro</a>
    <br><br>

    Observaciones:
    <br>
    {{$revisionespfd->observacionesRPFD}}
    <br><br>

    <p><strong>Código: {{$revisionespfd->id}}</strong></p>
                
    <form action="{{route('revisionespfd.destroy', $revisionespfd)}}" method="POST">

        @csrf

        @method('delete')

        <button type="submit">Eliminar</button>

    </form>

@endsection