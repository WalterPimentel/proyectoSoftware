@extends('adminlte::page')

@section('title', 'Empresas')

@section('content_header')

    <h1>Bienvenido a la Gestión de Empresas</h1>

@stop

@section('content')
    
    <a href="{{route('practicas.index')}}">Volver a Practicas</a> |
    <a href="{{route('empresas.create')}}">Nueva Empresa</a>
    <ul>
        @foreach ($empresas as $empresa)
            <li>
                <a href="{{route('empresas.show',$empresa->id)}}">{{$empresa->nombreEmpresa}} ({{$empresa->rubroEmpresa}})</a>
            </li>
        @endforeach
    </ul>    
    {{$empresas->links()}}

@stop
