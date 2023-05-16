@extends('layouts.plantilla')

@section('title', 'Comunicados PFD')

@section('content')
    <h1>Bienvenido a la Gestión de Comunicados PFD</h1>
    <a href="{{route('gestionPI.index')}}">Regresar</a>
    <br><br>
    <a href="{{route('comunicarpfd.create')}}">Nuevo Comunicado</a>
    <ul>
        @foreach ($comunicarpfd as $comunicar)
            <li>
                <a href="{{route('comunicarpfd.show',$comunicar->id)}}">{{$comunicar->descripcionComunicarPFD}}</a>
            </li>
        @endforeach
    </ul>    
    {{$comunicarpfd->links()}}    
@endsection