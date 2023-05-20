@extends('layouts.plantilla')

@section('title', 'Editar Tipo Recurso')

@section('content')
    <h1>En esta página se podrá crear editar un registro de Tipos de Recursos.</h1>

    <a href="{{route('tiposrecursos.index')}}">Regresar</a>
    <br><br>

    <form action="{{route('tiposrecursos.update', $tiporecurso)}}" method="POST">
        
        @csrf

        @method('put')

        <label>Descripción Recurso:
            <br>
            <textarea name="descripcionRecurso" rows="5">{{$tiporecurso->descripcionRecurso}}</textarea>
        </label>
        <br><br>

        <button type="submit">Actualizar Formulario</button>

    </form>
@endsection