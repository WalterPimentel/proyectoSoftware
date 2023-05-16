@extends('layouts.plantilla')

@section('title', 'Prácticas Requisitos')

@section('content')
    <h1>Bienvenido a la Gestión de Prácticas Requisitos</h1>
    <a href="{{route('practicas.index')}}">Volver a Prácticas</a> |
    <a href="{{route('practicasrequisitos.create')}}">Nueva Prácticas Requisitos</a>
    <ul>
        @foreach ($practicasRequisitos as $pr)
            <li>
                <a href="{{route('practicasrequisitos.show',$pr->id)}}">Relación: IDPráctica({{$pr->idPractica}}) con IDRequisito({{$pr->idRequisito}})</a>
            </li>
        @endforeach
    </ul>    
    {{$practicasRequisitos->links()}}    
@endsection