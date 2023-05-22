@extends('layouts.plantilla')

@section('title', 'Recurso: ' . $tiposrecurso->descripcionRecurso)

@section('content')
    <h1>Se encuentra en el registro: {{$tiposrecurso->descripcionRecurso}}</h1>

    <a href="{{route('tiposrecursos.index')}}">Regresar</a>
    <br><br>

    <a href="{{route('tiposrecursos.edit', $tiposrecurso)}}">Editar Registro</a>
    <br><br>

    <p><strong>Código: {{$tiposrecurso->id}}</strong></p>
                        
    <form action="{{route('tiposrecursos.destroy', $tiposrecurso)}}" method="POST">

        @csrf

        @method('delete')

        <button type="submit">Eliminar</button>

    </form>

@endsection