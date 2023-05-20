@extends('layouts.plantilla')

@section('title', 'Crear Docentes')

@section('content')
    <h1>En esta página se podrá crear un nuevo registro de docentes.</h1>

    <a href="{{route('docentes.index')}}">Volver a Docentes</a>
    <br><br>

    <form action="{{route('docentes.store')}}" method="POST">
        
        @csrf

        <label>Código:
            <br>
            <input type="number" name="codigoDocente" value="{{old('codigoDocente')}}">
        </label>

        @error('codigoDocente')

            <br>
            <small>*@lang('validation.required', ['attribute' => 'Código'])</small>
            
        @enderror

        <br><br>

        <label>Nombres:
            <br>
            <input type="text" name="nombresDocente" value="{{old('nombresDocente')}}">
        </label>

        @error('nombresDocente')

            <br>
            <small>*@lang('validation.required', ['attribute' => 'Nombres'])</small>
            
        @enderror

        <br><br>

        <label>Apellido Paterno:
            <br>
            <input type="text" name="apellidopDocente" value="{{old('apellidopDocente')}}">
        </label>
        
        @error('apellidopDocente')

            <br>
            <small>*@lang('validation.required', ['attribute' => 'Apellido Paterno'])</small>
            
        @enderror

        <br><br>

        <label>Apellido Materno:
            <br>
            <input type="text" name="apellidomDocente" value="{{old('apellidomDocente')}}">
        </label>
        
        @error('apellidomDocente')

            <br>
            <small>*@lang('validation.required', ['attribute' => 'Apellido Materno'])</small>
            
        @enderror

        <br><br>

        <label>Teléfono:
            <br>
            <input type="text" name="telefonoDocente" value="{{old('telefonoDocente')}}">
        </label>
        
        @error('telefonoDocente')

            <br>
            <small>*@lang('validation.required', ['attribute' => 'Teléfono'])</small>
            
        @enderror

        <br><br>

        <label>Correo:
            <br>
            <input type="text" name="correoDocente" value="{{old('correoDocente')}}">
        </label>
        
        @error('correoDocente')

            <br>
            <small>*@lang('validation.required', ['attribute' => 'Correo'])</small>
            
        @enderror

        <br><br>

        <button type="submit">Enviar Formulario</button>

    </form>
@endsection