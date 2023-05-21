@extends('layouts.plantilla')

@section('title', 'Plan: ' . $pfd->id)

@section('content')
    <h1>Se encuentra en el registro: {{$pfd->id}}</h1>

    <a href="{{route('gestionPI.index')}}">Volver a PlanFD</a>
    <br><br>

    <a href="{{route('gestionPI.edit', $pfd)}}">Editar Registro</a>
    <br><br>

    <p><strong>Descripción: {{$pfd->descripcionPFD}}</strong></p>

    <form action="{{route('gestionPI.destroy', $pfd)}}" method="POST">

        @csrf

        @method('delete')

        <button type="submit">Eliminar</button>

    </form>

@endsection