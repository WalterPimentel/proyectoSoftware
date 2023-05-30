@extends('adminlte::page')

@section('title', 'Empresa: ' . $empresa->nombreEmpresa)

@section('content_header')

<h1>Se encuentra en el registro: {{$empresa->nombreEmpresa}} ({{$empresa->rubroEmpresa}})</h1>

@stop

@section('content')    

    <a href="{{route('empresas.index')}}">Volver a Empresas</a>
    <br><br>

    <a href="{{route('empresas.edit', $empresa)}}">Editar Registro</a>
    <br><br>
    
    Encargado: {{$empresa->encargadoEmpresa}}
    <br>

    Dirección: {{$empresa->direccionEmpresa}}
    <br>

    teléfono: {{$empresa->telefonoEmpresa}}
    <br><br>
    
    <p><strong>Código: {{$empresa->id}}</strong></p>

    <form action="{{route('empresas.destroy', $empresa)}}" method="POST">

        @csrf

        @method('delete')

        <button type="submit">Eliminar</button>

    </form>

@stop
