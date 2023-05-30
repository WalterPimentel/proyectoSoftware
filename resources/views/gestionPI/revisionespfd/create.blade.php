@extends('adminlte::page')

@section('title', 'Crear Revisión')

@section('content_header')

    <h1>En esta página se podrá crear un nuevo registro de Revisiones PFD.</h1>

@stop

@section('content')    

    <a href="{{route('revisionespfd.index')}}">Regresar</a>
    <br><br>

    <form action="{{route('revisionespfd.store')}}" method="POST">
        
        @csrf

        <label>Descripción de Revisión:
            <br>
            <textarea name="descripcionRPFD" rows="5">{{old('nombreRequisito')}}</textarea>
        </label>
                
        @error('descripcionRPFD')

            <br>
            <small>*@lang('validation.required', ['attribute' => 'Descripción de Revisión'])</small>
            
        @enderror

        <br><br>

        <label>Observaciones:
            <br>
            <textarea name="observacionesRPFD" rows="5">{{old('observacionesRPFD')}}</textarea>
        </label>
        <br><br>

        <button type="submit">Enviar Formulario</button>
        <br><br>

    </form>

@stop
