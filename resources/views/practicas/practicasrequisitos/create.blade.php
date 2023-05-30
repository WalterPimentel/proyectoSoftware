@extends('adminlte::page')

@section('title', 'Crear Practicas Requisitos')

@section('content_header')

    <h1>En esta página se podrá crear un nuevo registro de prácticas requisitos.</h1>

@stop

@section('content')
    
    <a href="{{route('practicasrequisitos.index')}}">Volver a Prácticas Requisitos</a>
    <br><br>

    <form action="{{route('practicasrequisitos.store')}}" method="POST">
        
        @csrf

        <label>idPractica:
            <br>
            <input type="number" name="idPractica" value="{{old('idPractica')}}">
        </label>
        
        @error('idPractica')

            <br>
            <small>*{{$message}}</small>
            
        @enderror

        <br><br>

        <label>idRequisito:
            <br>
            <input type="number" name="idRequisito" value="{{old('idRequisito')}}">
        </label>
        
        @error('idRequisito')

            <br>
            <small>*{{$message}}</small>
            
        @enderror

        <br><br>

        <button type="submit">Enviar Formulario</button>

    </form>

@stop
