@extends('layouts.plantilla')

@section('title', 'Crear Acciones de Mejora')

@section('content')
    <h1>En esta página se podrá crear una Nueva Accion de Mejora.</h1>
    <a href="{{route('accionesmejoras.index')}}">Regresar</a>
    <br><br>

    <form action="{{route('accionesmejoras.store')}}" method="POST">
        
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

        <label>Plan FD:
            <br>
            <input type="number" name="idPlanFD" value="{{old('idPlanFD')}}">
        </label>
                
        @error('idPlanFD')

            <br>
            <small>*@lang('validation.required', ['attribute' => 'Plan FD:'])</small>
            
        @enderror

        <br><br>

        <label>Monitoreo PFD:
            <br>
            <input type="number" name="idMonitoreoPFD" value="{{old('idMonitoreoPFD')}}">
        </label>
                
        @error('idMonitoreoPFD')

            <br>
            <small>*@lang('validation.required', ['attribute' => 'Monitoreo PFD'])</small>
            
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

        <label>Metas:
            <br>
            <textarea name="metasAM" rows="5">{{old('metasAM')}}</textarea>
        </label>
                
        @error('metasAM')

            <br>
            <small>*@lang('validation.required', ['attribute' => 'Metas'])</small>
            
        @enderror

        <br><br>

        <label>Descripción:
            <br>
            <textarea name="descripcionAM" rows="5">{{old('descripcionAM')}}</textarea>
        </label>
                
        @error('descripcionAM')

            <br>
            <small>*@lang('validation.required', ['attribute' => 'Descripción'])</small>
            
        @enderror

        <br><br>

        <button type="submit" >Enviar Formulario</button>
        <br><br>

    </form>
@endsection