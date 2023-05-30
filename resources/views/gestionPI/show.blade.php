@extends('adminlte::page')

@section('title', 'Plan: ' . $gestionPI->id)

@section('content_header')

    <h1>Se encuentra en el registro: {{$gestionPI->id}}</h1>

@stop

@section('content')    

    <a href="{{route('gestionPI.index')}}">Volver a PlanFD</a>
    <br><br>

    <a href="{{route('gestionPI.edit', $gestionPI)}}">Editar Registro</a>
    <br><br>

    <p><strong>Descripción: {{$gestionPI->descripcionPFD}}</strong></p>

    <form action="{{route('gestionPI.destroy', $gestionPI)}}" method="POST">

        @csrf

        @method('delete')

        <button type="submit">Eliminar</button>

    </form>

@stop