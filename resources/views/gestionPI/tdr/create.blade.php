@extends('adminlte::page')

@section('title', 'Crear TDR')

@section('content_header')

    <h1>En esta página se podrá crear un nuevo registro de TDR.</h1>

@stop

@section('content')    

    <a href="{{route('tdr.index')}}">Regresar</a>
    <br><br>

    <form action="{{route('tdr.store')}}" method="POST">
        
        @csrf

        <label>Tipo Recurso:
            <br>
            <input type="number" name="idTipoRecurso" value="{{old('idTipoRecurso')}}">
        </label>
                
        @error('idTipoRecurso')

            <br>
            <small>*@lang('validation.required', ['attribute' => 'Tipo Recurso'])</small>
            
        @enderror

        <br><br>

        <label>Mayor Cuantia:
            <br>
            <input type="number" name="mayorCuantiaTDR" value="{{old('mayorCuantiaTDR')}}">
        </label>
                
        @error('mayorCuantiaTDR')

            <br>
            <small>*@lang('validation.required', ['attribute' => 'Mayor Cuantia'])</small>
            
        @enderror

        <br><br>

        <label>Descripción:
            <br>
            <textarea name="descripcionTDR" rows="5">{{old('descripcionTDR')}}</textarea>
        </label>
        <br><br>

        <label>Costo:
            <br>
            <input type="number" step="0.01" name="costoTDR" value="{{old('costoTDR')}}">
        </label>
                
        @error('costoTDR')

            <br>
            <small>*@lang('validation.required', ['attribute' => 'Costo'])</small>
            
        @enderror

        <br><br>

        <button type="submit">Enviar Formulario</button>
        <br><br>

    </form>

@stop
