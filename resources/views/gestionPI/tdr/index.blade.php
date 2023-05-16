@extends('layouts.plantilla')

@section('title', 'TDR')

@section('content')
    <h1>Bienvenido a la Gestión de TDR</h1>
    <a href="{{route('gestionPI.index')}}">Regresar</a>
    <br><br>
    <a href="{{route('tdr.create')}}">Nuevo TDR</a>
    <ul>
        @foreach ($tdr as $td)
            <li>
                <a href="{{route('tdr.show',$td->id)}}">{{$td->descripcionTDR}}</a>
            </li>
        @endforeach
    </ul>    
    {{$tdr->links()}}    
@endsection