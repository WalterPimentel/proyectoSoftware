@extends('layouts.plantilla')

@section('title', 'Recurso: ' . $tiporecurso->descripcionRecurso)

@section('content')
    <h1>Se encuentra en el registro: {{$tiporecurso->descripcionRecurso}}</h1>

    <a href="{{route('tiposrecursos.index')}}">Regresar</a>
    <br><br>

    <a href="{{route('tiposrecursos.edit', $tiporecurso)}}">Editar Registro</a>
    <br><br>

    <p><strong>Código: {{$tiporecurso->id}}</strong></p>
                        
    <form action="{{route('tiposrecursos.destroy', $tiporecurso)}}" method="POST">

        @csrf

        @method('delete')

        <button type="submit">Eliminar</button>

    </form>

@endsection