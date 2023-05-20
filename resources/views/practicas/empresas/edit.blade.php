@extends('layouts.plantilla')

@section('title', 'Editar Empresa')

@section('content')
    <h1>En esta página se podrá crear editar un registro de empresas.</h1>

    <a href="{{route('empresas.index')}}">Volver a Prácticas</a>
    <br><br>

    <form action="{{route('empresas.update', $empresa)}}" method="POST">
        
        @csrf

        @method('put')

        <label>Empresa:
            <br>
            <input type="text" name="nombreEmpresa" value="{{$empresa->nombreEmpresa}}">
        </label>
        <br><br>

        <label>Encargado:
            <br>
            <input type="text" name="encargadoEmpresa" value="{{$empresa->encargadoEmpresa}}">
        </label>
        <br><br>

        <label>Rubro:
            <br>
            <input type="text" name="rubroEmpresa" value="{{$empresa->rubroEmpresa}}">
        </label>
        <br><br>

        <label>Dirección:
            <br>
            <textarea name="direccionEmpresa" rows="5">{{$empresa->direccionEmpresa}}</textarea>
        </label>
        <br><br>

        <label>Teléfono:
            <br>
            <input type="text" name="telefonoEmpresa" value="{{$empresa->telefonoEmpresa}}">
        </label>
        <br><br>

        <button type="submit">Actualizar Formulario</button>

    </form>
@endsection