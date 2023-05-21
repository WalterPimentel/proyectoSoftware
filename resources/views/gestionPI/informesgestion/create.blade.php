@extends('layouts.plantilla')

@section('title', 'Crear Informe')

@section('content')
    <h1>En esta página se podrá crear un nuevo registro de Informe Gestión.</h1>

    <a href="{{route('informesgestion.index')}}">Regresar</a>
    <br><br>

    <form action="{{route('informesgestion.store')}}" method="POST">
        
        @csrf

        <label>Monitoreo PFD:
            <br>
            <input type="number" name="idMonitoreoPFD" value="{{old('idMonitoreoPFD')}}">
        </label>
                
        @error('idMonitoreoPFD')

            <br>
            <small>*@lang('validation.required', ['attribute' => 'Monitoreo PFD'])</small>
            
        @enderror

        <br><br>

        <label>Responsable Elaboración:
            <br>
            <input type="number" name="idResponsableElaboracion" value="{{old('idResponsableElaboracion')}}">
        </label>
                
        @error('idResponsableElaboracion')

            <br>
            <small>*@lang('validation.required', ['attribute' => 'Responsable Elaboración'])</small>
            
        @enderror

        <br><br>

        <label>Descripción:
            <br>
            <textarea name="descripcionIG" rows="5">{{old('descripcionIG')}}</textarea>
        </label>
                
        @error('descripcionIG')

            <br>
            <small>*@lang('validation.required', ['attribute' => 'Descripción'])</small>
            
        @enderror

        <br><br>

        <label>Observaciones::
            <br>
            <textarea name="observacionesIG" rows="5">{{old('observacionesIG')}}</textarea>
        </label>
        <br><br>

        <button type="submit">Enviar Formulario</button>
        <br><br>

    </form>
@endsection