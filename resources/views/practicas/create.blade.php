@extends('adminlte::page')

@section('title', 'Registrar')

@section('content_header')

    <h1>En esta página se podrá crear un nuevo registro de practicas.</h1>

@stop

@section('content')
    
    <a href="{{route('practicas.index')}}">Volver a Prácticas</a>
    <br><br>

    <form action="{{route('practicas.store')}}" method="POST">
        
        @csrf

        <label>Código:
            <br>
            <input type="number" name="codigo" value="{{old('codigo')}}">
        </label>

        @error('codigo')

            <br>
            <small>*@lang('validation.required', ['attribute' => 'Código'])</small>
            
        @enderror

        <br><br>

        <label>Estudiante:
            <br>
            <input type="number" name="idEstudiante" value="{{old('idEstudiante')}}">
        </label>
        
        @error('idEstudiante')

            <br>
            <!--
                //Solo llamar el mensaje sin modificar el atributo
                <small>*{{$message}}</small>
                //resultado: *El campo id estudiante es obligatorio.

                //Sale el mismo mensaje solo con el atributo modificado
                <small>*@lang('validation.required', ['attribute' => 'Estudiante'])</small>
                //resultado: *El campo Estudiante es obligatorio.
            -->
            <small>*@lang('validation.required', ['attribute' => 'Estudiante'])</small>
            
        @enderror

        <br><br>

        <label>Docente:
            <br>
            <input type="number" name="idDocente" value="{{old('idDocente')}}">
        </label>
        
        @error('idDocente')

            <br>
            <small>*@lang('validation.required', ['attribute' => 'Docente'])</small>
            
        @enderror

        <br><br>

        <label>Empresa:
            <br>
            <input type="number" name="idEmpresa" value="{{old('idEmpresa')}}">
        </label>
        
        @error('idEmpresa')

            <br>
            <small>*@lang('validation.required', ['attribute' => 'Empresa'])</small>
            
        @enderror

        <br><br>

        <label>Etapa:
            <br>
            <input type="number" name="idEtapa" value="{{old('idEtapa')}}">
        </label>
        
        @error('idEtapa')

            <br>
            <small>*@lang('validation.required', ['attribute' => 'Etapa'])</small>
            
        @enderror

        <br><br>

        <label>Título:
            <br>
            <textarea name="titulo" rows="5">{{old('titulo')}}</textarea>
        </label>
        
        @error('titulo')

            <br>
            <small>*@lang('validation.required', ['attribute' => 'Título'])</small>
            
        @enderror

        <br><br>

        <button type="submit" class="btn btn-success">Enviar Formulario</button>

    </form>

@stop
