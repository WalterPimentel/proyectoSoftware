@extends('layouts.plantilla')

@section('title', 'Crear Requisitos')

@section('content')
    <h1>En esta página se podrá crear un nuevo registro de requisitos.</h1>
    <a href="{{route('requisitos.index')}}">Volver a Requisitos</a>
    <br><br>

    <form action="{{route('requisitos.store')}}" method="POST">
        
        @csrf

        <label>Nombre:
            <br>
            <input type="text" name="nombreRequisito">
        </label>
        <br><br>

        <label>Descripción:
            <br>
            <input type="text" name="descripcionRequisito">
        </label>
        <br><br>

        <label>Estado:
            <br>
            <input type="number" name="estado">
        </label>
        <br><br>

        <button type="submit">Enviar Formulario</button>

    </form>
@endsection