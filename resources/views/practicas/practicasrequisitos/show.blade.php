@extends('layouts.plantilla')

@section('title', 'N°: ' . $practicaRequisito->id)

@section('content')
    <h1>Se encuentra en el registro: IDPractica({{$practicaRequisito->idPractica}}) con IDRequisito({{$practicaRequisito->idRequisito}})</h1>

    <a href="{{route('practicasrequisitos.index')}}">Volver a Prácticas Requisitos</a>
    <br><br>

    <a href="{{route('practicasrequisitos.edit', $practicaRequisito)}}">Editar Registro</a>
    <br><br>

    <p><strong>Código: {{$practicaRequisito->id}}</strong></p>
@endsection