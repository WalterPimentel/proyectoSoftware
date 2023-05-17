@extends('layouts.plantilla')

@section('title', 'Crear Empresas')

@section('content')
    <h1>En esta página se podrá crear un nuevo registro de empresas.</h1>

    <a href="{{route('empresas.index')}}">Volver a Empresas</a>
    <br><br>

    <form action="{{route('empresas.store')}}" method="POST">
        
        @csrf

        <label>Empresa:
            <br>
            <input type="text" name="nombreEmpresa">
        </label>
        <br><br>

        <label>Encargado:
            <br>
            <input type="text" name="encargadoEmpresa">
        </label>
        <br><br>

        <label>Rubro:
            <br>
            <input type="text" name="rubroEmpresa">
        </label>
        <br><br>

        <label>Dirección:
            <br>
            <textarea name="direccionEmpresa" rows="5"></textarea>
        </label>
        <br><br>

        <label>Teléfono:
            <br>
            <input type="text" name="telefonoEmpresa">
        </label>
        <br><br>

        <button type="submit">Enviar Formulario</button>

    </form>
@endsection