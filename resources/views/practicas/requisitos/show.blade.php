@extends('layouts.plantilla')

@section('title', 'Requisito: ' . $requisito->nombreRequisito)

@section('content')
    <h1>Se encuentra en el registro: {{$requisito->nombreRequisito}}</h1>

    <a href="{{route('requisitos.index')}}">Volver a Requisitos</a>
    <br><br>

    <a href="{{route('requisitos.edit', $requisito)}}">Editar Registro</a>
    <br><br>

    Descripción:
    <br>
    {{$requisito->descripcionRequisito}}
    <br><br>    

    <p><strong>Código: {{$requisito->id}}</strong></p>

    <form action="{{route('requisitos.destroy', $requisito)}}" method="POST">

        @csrf

        @method('delete')

        <button type="submit">Eliminar</button>

    </form>

@endsection