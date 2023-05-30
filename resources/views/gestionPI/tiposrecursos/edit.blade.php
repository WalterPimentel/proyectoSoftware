@extends('adminlte::page')

@section('title', 'Editar Tipo Recurso')

@section('content_header')

    <h1>En esta página se podrá crear editar un registro de Tipos de Recursos.</h1>

@stop

@section('content')    

    <a href="{{route('tiposrecursos.index')}}">Regresar</a>
    <br><br>

    <form action="{{route('tiposrecursos.update', $tiposrecurso)}}" method="POST">
        
        @csrf

        @method('put')

        <label>Descripción Recurso:
            <br>
            <textarea name="descripcionRecurso" rows="5">{{$tiposrecurso->descripcionRecurso}}</textarea>
        </label>
        <br><br>

        <button type="submit">Actualizar Formulario</button>

    </form>
    
@stop
