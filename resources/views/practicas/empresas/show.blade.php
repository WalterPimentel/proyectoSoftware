@extends('layouts.plantilla')

@section('title', 'Empresa: ' . $empresa->nombreEmpresa)

@section('content')
    <h1>Se encuentra en el registro: {{$empresa->nombreEmpresa}} ({{$empresa->rubroEmpresa}})</h1>

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

@endsection