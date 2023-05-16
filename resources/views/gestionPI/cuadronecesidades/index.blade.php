@extends('layouts.plantilla')

@section('title', 'Cuadro de Necesidades')

@section('content')
    <h1>Bienvenido a la Gestión de Cuadro de Necesidades</h1>
    <a href="{{route('gestionPI.index')}}">Regresar</a>
    <br><br>
    <a href="{{route('cuadronecesidades.create')}}">Nueva Necesidad</a>
    <ul>
        @foreach ($cuadronecesidades as $cuadronecesidad)
            <li>
                <a href="{{route('cuadronecesidades.show',$cuadronecesidad->id)}}">{{$cuadronecesidad->descripcionCuadroN}}</a>
            </li>
        @endforeach
    </ul>    
    {{$cuadronecesidades->links()}}    
@endsection