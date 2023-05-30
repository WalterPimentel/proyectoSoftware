@extends('adminlte::page')

@section('title', 'Crear Necesidad')

@section('content_header')

    <h1>En esta página se podrá crear un nuevo registro de Cuadro Necesidades.</h1>

@stop

@section('content')    

    <a href="{{route('cuadronecesidades.index')}}">Regresar</a>
    <br><br>

    <form action="{{route('cuadronecesidades.store')}}" method="POST">
        
        @csrf

        <label>Comisión:
            <br>
            <input type="number" name="idComision" value="{{old('idComision')}}">
        </label>
                
        @error('idComision')

            <br>
            <small>*@lang('validation.required', ['attribute' => 'Comisión'])</small>
            
        @enderror

        <br><br>

        <label>Tipo Recurso:
            <br>
            <input type="number" name="idTipoRecurso" value="{{old('idTipoRecurso')}}">
        </label>
                
        @error('idTipoRecurso')

            <br>
            <small>*@lang('validation.required', ['attribute' => 'Tipo Recurso'])</small>
            
        @enderror

        <br><br>

        <label>Tipo Costo:
            <br>
            <input type="number" name="idTipoCosto" value="{{old('idTipoCosto')}}">
        </label>
                
        @error('idTipoCosto')

            <br>
            <small>*@lang('validation.required', ['attribute' => 'Tipo Costo'])</small>
            
        @enderror

        <br><br>

        <label>TDR:
            <br>
            <input type="number" name="idTDR" value="{{old('idTDR')}}">
        </label>
                
        @error('idTDR')

            <br>
            <small>*@lang('validation.required', ['attribute' => 'TDR'])</small>
            
        @enderror

        <br><br>

        <label>Descripción:
            <br>
            <textarea name="descripcionCuadroN" rows="5">{{old('descripcionCuadroN')}}</textarea>
        </label>
                
        @error('descripcionCuadroN')

            <br>
            <small>*@lang('validation.required', ['attribute' => 'Descripción'])</small>
            
        @enderror

        <br><br>

        <label>Cantidad:
            <br>
            <input type="number" name="cantidadCuadroN" value="{{old('cantidadCuadroN')}}">
        </label>
                
        @error('cantidadCuadroN')

            <br>
            <small>*@lang('validation.required', ['attribute' => 'Cantidad'])</small>
            
        @enderror

        <br><br>

        <label>Precio:
            <br>
            <input type="number" step="0.01" name="precioCuadroN" value="{{old('precioCuadroN')}}">
        </label>
                
        @error('precioCuadroN')

            <br>
            <small>*@lang('validation.required', ['attribute' => 'Precio'])</small>
            
        @enderror

        <br><br>

        <button type="submit">Enviar Formulario</button>
        <br><br>

    </form>

@stop
