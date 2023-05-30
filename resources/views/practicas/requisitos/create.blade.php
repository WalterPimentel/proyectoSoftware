@extends('adminlte::page')

@section('title', 'Crear Requisitos')

@section('content_header')

    <h1>En esta página se podrá crear un nuevo registro de requisitos.</h1>

@stop

@section('content')
    
    <a href="{{route('requisitos.index')}}">Volver a Requisitos</a>
    <br><br>

    <form action="{{route('requisitos.store')}}" method="POST">
        
        @csrf

        <label>Nombre:
            <br>
            <input type="text" name="nombreRequisito" value="{{old('nombreRequisito')}}">
        </label>
        
        @error('nombreRequisito')

            <br>
            <small>*@lang('validation.required', ['attribute' => 'Nombre'])</small>
            
        @enderror

        <br><br>

        <label>Descripción:
            <br>
            <input type="text" name="descripcionRequisito" value="{{old('descripcionRequisito')}}">
        </label>
        <br><br>

        <label>Estado:
            <br>
            <input type="number" name="estado" value="{{old('estado')}}">
        </label>
        
        @error('estado')

            <br>
            <small>*@lang('validation.required', ['attribute' => 'Estado'])</small>
            
        @enderror

        <br><br>

        <button type="submit">Enviar Formulario</button>

    </form>

@stop
