@extends('layouts.plantilla')

@section('title', 'N°: ' . $practicasrequisito->id)

@section('content')
    <h1>Se encuentra en el registro: IDPractica({{$practicasrequisito->idPractica}}) con IDRequisito({{$practicasrequisito->idRequisito}})</h1>

    <a href="{{route('practicasrequisitos.index')}}">Volver a Prácticas Requisitos</a>
    <br><br>

    <a href="{{route('practicasrequisitos.edit', $practicasrequisito)}}">Editar Registro</a>
    <br><br>

    <p><strong>Código: {{$practicasrequisito->id}}</strong></p>

    <form action="{{route('practicasrequisitos.destroy', $practicasrequisito)}}" method="POST">

        @csrf

        @method('delete')

        <button type="submit">Eliminar</button>

    </form>

@endsection