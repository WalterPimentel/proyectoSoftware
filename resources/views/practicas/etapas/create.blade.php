@extends('adminlte::page')

@section('title', 'Crear Etapas')

@section('content_header')

    <h1>En esta página se podrá crear un nuevo registro de etapas.</h1>

@stop

@section('content')

    <a href="{{route('etapas.index')}}">Volver a Etapas</a>
    <br><br>

    <form action="{{route('etapas.store')}}" method="POST">
        
        @csrf

        <label>Nombre:
            <br>
            <input type="text" name="nombreEtapa" value="{{old('nombreEtapa')}}">
        </label>
        
        @error('nombreEtapa')

            <br>
            <small>*@lang('validation.required', ['attribute' => 'Nombre'])</small>
            
        @enderror

        <br><br>

        <label>Descripción:
            <br>
            <textarea name="descripcionEtapa" rows="5">{{old('descripcionEtapa')}}</textarea>
        </label>
        
        @error('descripcionEtapa')

            <br>
            <small>*@lang('validation.required', ['attribute' => 'Descripción'])</small>
            
        @enderror

        <br><br>

        <button type="submit">Enviar Formulario</button>

    </form>

@stop
