@extends('adminlte::page')

@section('title', 'Crear Empresas')

@section('content_header')

    <h1>En esta página se podrá crear un nuevo registro de empresas.</h1>

@stop

@section('content')

    <a href="{{route('empresas.index')}}">Volver a Empresas</a>
    <br><br>

    <form action="{{route('empresas.store')}}" method="POST">
        
        @csrf

        <label>Empresa:
            <br>
            <input type="text" name="nombreEmpresa" value="{{old('nombreEmpresa')}}">
        </label>
        
        @error('nombreEmpresa')

            <br>
            <small>*@lang('validation.required', ['attribute' => 'Empresa'])</small>
            
        @enderror

        <br><br>

        <label>Encargado:
            <br>
            <input type="text" name="encargadoEmpresa" value="{{old('encargadoEmpresa')}}">
        </label>
        
        @error('encargadoEmpresa')

            <br>
            <small>*@lang('validation.required', ['attribute' => 'Encargado'])</small>
            
        @enderror

        <br><br>

        <label>Rubro:
            <br>
            <input type="text" name="rubroEmpresa" value="{{old('rubroEmpresa')}}">
        </label>
        
        @error('rubroEmpresa')

            <br>
            <small>*@lang('validation.required', ['attribute' => 'Rubro'])</small>
            
        @enderror

        <br><br>

        <label>Dirección:
            <br>
            <textarea name="direccionEmpresa" rows="5">{{old('direccionEmpresa')}}</textarea>
        </label>
        
        @error('direccionEmpresa')

            <br>
            <small>*@lang('validation.required', ['attribute' => 'Dirección'])</small>
            
        @enderror

        <br><br>

        <label>Teléfono:
            <br>
            <input type="text" name="telefonoEmpresa" value="{{old('telefonoEmpresa')}}">
        </label>
        <br><br>

        <button type="submit">Enviar Formulario</button>

    </form>

@stop
