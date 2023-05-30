@extends('adminlte::page')

@section('title', 'Comisiones y Áreas')

@section('content_header')

    <h1>En esta página se podrá crear un nuevo registro de Comisiones y/o Áreas.</h1>

@stop

@section('content')
    
    <a href="{{route('comisiones.index')}}">Regresar</a>
    <br><br>

    <form action="{{route('comisiones.store')}}" method="POST">
        
        @csrf

        <label>Docente:
            <br>
            <input type="number" name="idDocente" value="{{old('idDocente')}}">
        </label>
                
        @error('idDocente')

            <br>
            <small>*@lang('validation.required', ['attribute' => 'Docente'])</small>
            
        @enderror

        <br><br>

        <label>Administrativo:
            <br>
            <input type="number" name="idAdministrativo" value="{{old('idAdministrativo')}}">
        </label>
                
        @error('idAdministrativo')

            <br>
            <small>*@lang('validation.required', ['attribute' => 'Administrativo'])</small>
            
        @enderror

        <br><br>

        <label>Nombre Comisión:
            <br>
            <input type="text" name="nombreComision" value="{{old('nombreComision')}}">
        </label>
                
        @error('nombreComision')

            <br>
            <small>*@lang('validation.required', ['attribute' => 'Nombre Comisión'])</small>
            
        @enderror

        <br><br>

        <label>Macro Proceso:
            <br>
            <input type="text" name="macroProcesoComision" value="{{old('macroProcesoComision')}}">
        </label>
                
        @error('macroProcesoComision')

            <br>
            <small>*@lang('validation.required', ['attribute' => 'Macro Proceso'])</small>
            
        @enderror

        <br><br>

        <label>Proceso:
            <br>
            <input type="text" name="procesoComision" value="{{old('procesoComision')}}">
        </label>
                
        @error('procesoComision')

            <br>
            <small>*@lang('validation.required', ['attribute' => 'Proceso'])</small>
            
        @enderror

        <br><br>

        <label>Subproceso:
            <br>
            <input type="text" name="subprocesoComision" value="{{old('subprocesoComision')}}">
        </label>
                
        @error('subprocesoComision')

            <br>
            <small>*@lang('validation.required', ['attribute' => 'Subproceso'])</small>
            
        @enderror

        <br><br>

        <label>Periodo:
            <br>
            <input type="text" name="periodoComision" value="{{old('periodoComision')}}">
        </label>
                
        @error('periodoComision')

            <br>
            <small>*@lang('validation.required', ['attribute' => 'Periodo'])</small>
            
        @enderror

        <br><br>

        <button type="submit">Enviar Formulario</button>
        <br><br>

    </form>

@stop
