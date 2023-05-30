@extends('adminlte::page')

@section('title', 'Crear Estudiantes')

@section('content_header')

    <h1>En esta página se podrá crear un nuevo registro de estudiantes.</h1>

@stop

@section('content')
    
    <a href="{{route('estudiantes.index')}}">Volver a Estudiantes</a>
    <br><br>

    <form action="{{route('estudiantes.store')}}" method="POST">
        
        @csrf

        <label>Código:
            <br>
            <input type="number" name="codigoEstudiante" value="{{old('codigoEstudiante')}}">
        </label>

        @error('codigoEstudiante')

            <br>
            <small>*@lang('validation.required', ['attribute' => 'Código'])</small>
            
        @enderror

        <br><br>

        <label>Nombres:
            <br>
            <input type="text" name="nombresEstudiante" value="{{old('nombresEstudiante')}}">
        </label>
        
        @error('nombresEstudiante')

            <br>
            <small>*@lang('validation.required', ['attribute' => 'Nombres'])</small>
            
        @enderror

        <br><br>

        <label>Apellido Paterno:
            <br>
            <input type="text" name="apellidopEstudiante" value="{{old('apellidopEstudiante')}}">
        </label>
        
        @error('apellidopEstudiante')

            <br>
            <small>*@lang('validation.required', ['attribute' => 'Apellido Paterno'])</small>
            
        @enderror

        <br><br>

        <label>Apellido Materno:
            <br>
            <input type="text" name="apellidomEstudiante" value="{{old('apellidomEstudiante')}}">
        </label>
        
        @error('apellidomEstudiante')

            <br>
            <small>*@lang('validation.required', ['attribute' => 'Apellido Materno'])</small>
            
        @enderror

        <br><br>

        <label>Teléfono:
            <br>
            <input type="text" name="telefonoEstudiante" value="{{old('telefonoEstudiante')}}">
        </label>
        
        @error('telefonoEstudiante')

            <br>
            <small>*@lang('validation.required', ['attribute' => 'Teléfono'])</small>
            
        @enderror

        <br><br>

        <label>Correo:
            <br>
            <input type="text" name="correoEstudiante" value="{{old('correoEstudiante')}}">
        </label>
        
        @error('correoEstudiante')

            <br>
            <small>*@lang('validation.required', ['attribute' => 'Correo'])</small>
            
        @enderror

        <br><br>

        <button type="submit">Enviar Formulario</button>

    </form>

@stop
