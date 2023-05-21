@extends('layouts.plantilla')

@section('title', 'Crear Cronograma')

@section('content')
    <h1>En esta página se podrá crear un nuevo registro de cronograma.</h1>

    <a href="{{route('cronogramas.index')}}">Regresar</a>
    <br><br>

    <form action="{{route('cronogramas.store')}}" method="POST">
        
        @csrf

        <label>Plan FD:
            <br>
            <input type="number" name="idPlanFD" value="{{old('idPlanFD')}}">
        </label>
                
        @error('idPlanFD')

            <br>
            <small>*@lang('validation.required', ['attribute' => 'Plan FD'])</small>
            
        @enderror

        <br><br>

        <label>Proyecto:
            <br>
            <input type="number" name="idProyecto" value="{{old('idProyecto')}}">
        </label>
                
        @error('idProyecto')

            <br>
            <small>*@lang('validation.required', ['attribute' => 'Proyecto'])</small>
            
        @enderror

        <br><br>

        <label>Descripción:
            <br>
            <textarea name="descripcionCronograma" rows="5">{{old('descripcionCronograma')}}</textarea>
        </label>
                
        @error('descripcionCronograma')

            <br>
            <small>*@lang('validation.required', ['attribute' => 'Descripción'])</small>
            
        @enderror

        <br><br>

        <button type="submit">Enviar Formulario</button>
        <br><br>

    </form>
@endsection