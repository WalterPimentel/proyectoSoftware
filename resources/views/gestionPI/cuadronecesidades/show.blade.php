@extends('layouts.plantilla')

@section('title', 'Necesidad: ' . $cuadronecesidad->descripcionCuadroN)

@section('content')
    <h1>Se encuentra en el registro: {{$cuadronecesidad->descripcionCuadroN}}</h1>
    
    <a href="{{route('cuadronecesidades.index')}}">Regresar</a>
    <br><br>

    <a href="{{route('cuadronecesidades.edit', $cuadronecesidad)}}">Editar Registro</a>
    <br><br>

    <p><strong>Código: {{$cuadronecesidad->id}}</strong></p>
        
    <form action="{{route('cuadronecesidades.destroy', $cuadronecesidad)}}" method="POST">

        @csrf

        @method('delete')

        <button type="submit">Eliminar</button>

    </form>

@endsection