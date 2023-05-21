@extends('layouts.plantilla')

@section('title', 'Crear Comunicado')

@section('content')
    <h1>En esta página se podrá crear un nuevo registro de Comunicados PFD.</h1>

    <a href="{{route('comunicarpfd.index')}}">Regresar</a>
    <br><br>

    <form action="{{route('comunicarpfd.store')}}" method="POST">
        
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

        <label>Parte Interesada:
            <br>
            <input type="number" name="idParteInteresada" value="{{old('idParteInteresada')}}">
        </label>
                
        @error('idParteInteresada')

            <br>
            <small>*@lang('validation.required', ['attribute' => 'Parte Interesada'])</small>
            
        @enderror

        <br><br>

        <label>Descripción:
            <br>
            <textarea name="descripcionComunicarPFD" rows="5">{{old('descripcionComunicarPFD')}}</textarea>
        </label>
                
        @error('descripcionComunicarPFD')

            <br>
            <small>*@lang('validation.required', ['attribute' => 'Descripción'])</small>
            
        @enderror

        <br><br>

        <label>Medio Comunicación:
            <br>
            <input type="text" name="medioComunicarPFD" value="{{old('medioComunicarPFD')}}">
        </label>
                
        @error('medioComunicarPFD')

            <br>
            <small>*@lang('validation.required', ['attribute' => 'Medio Comunicación'])</small>
            
        @enderror

        <br><br>

        <label>Fecha:
            <br>
            <input type="date" name="fechaComunicarPFD" value="{{old('fechaComunicarPFD')}}">
        </label>
                
        @error('fechaComunicarPFD')

            <br>
            <small>*@lang('validation.required', ['attribute' => 'Fecha'])</small>
            
        @enderror

        <br><br>

        <label>Hora:
            <br>
            <input type="time" name="horaComunicarPFD" id="horaActual" value="{{ old('horaComunicarPFD', date('H:i')) }}">
        </label>
                
        @error('horaComunicarPFD')

            <br>
            <small>*@lang('validation.required', ['attribute' => 'Hora'])</small>
            
        @enderror

        <br><br>

        <label>Observaciones:
            <br>
            <textarea name="observacionesComunicarPFD" rows="5">{{old('observacionesComunicarPFD')}}</textarea>
        </label>
        <br><br>

        <button type="submit">Enviar Formulario</button>
        <br><br>

    </form>
@endsection