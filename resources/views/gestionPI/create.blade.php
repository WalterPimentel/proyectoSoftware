@extends('adminlte::page')

@section('title', 'Plan de Funcionamiento y Desarrollo')

@section('content_header')

    <h1>En esta Página se registrará el Plan de Funcionamiento y Desarrollo a decanatura por parte del Resposable de la Comisión de Planificaión Institucional</h1>

@stop

@section('content')    

    <a href="{{route('gestionPI.index')}}">Regresar</a>
    <br><br>

    <form action="{{route('gestionPI.store')}}" method="POST">
        
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

        <label>Cuadro Necesidad:
            <br>
            <input type="number" name="idCuadroNecesidades" value="{{old('idCuadroNecesidades')}}">
        </label>
                
        @error('idCuadroNecesidades')

            <br>
            <small>*@lang('validation.required', ['attribute' => 'Cuadro Necesidad'])</small>
            
        @enderror

        <br><br>

        <label>Revisión:
            <br>
            <input type="number" name="idRevisionPFD" value="{{old('idRevisionPFD')}}">
        </label>
                
        @error('idRevisionPFD')

            <br>
            <small>*@lang('validation.required', ['attribute' => 'Revisión'])</small>
            
        @enderror

        <br><br>

        <label>Acta:
            <br>
            <input type="number" name="idActaConsejoFacultad" value="{{old('idActaConsejoFacultad')}}">
        </label>
                
        @error('idActaConsejoFacultad')

            <br>
            <small>*@lang('validation.required', ['attribute' => 'Acta'])</small>
            
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

        <label>Responsable Aprobación:
            <br>
            <input type="number" name="idResponsableAprobacion" value="{{old('idResponsableAprobacion')}}">
        </label>
                
        @error('idResponsableAprobacion')

            <br>
            <small>*@lang('validation.required', ['attribute' => 'Responsable Aprobación'])</small>
            
        @enderror

        <br><br>

        <label>Descripción:
            <br>
            <textarea name="descripcionPFD" rows="5">{{old('descripcionPFD')}}</textarea>
        </label>
                
        @error('descripcionPFD')

            <br>
            <small>*@lang('validation.required', ['attribute' => 'Descripción'])</small>
            
        @enderror

        <br><br>

        <label>Fecha Elaboración:
            <br>
            <input type="datetime-local" name="fechaElaboracionPFD" value="{{old('fechaElaboracionPFD')}}">
        </label>
                
        @error('fechaElaboracionPFD')

            <br>
            <small>*@lang('validation.required', ['attribute' => 'Fecha Elaboración'])</small>
            
        @enderror

        <br><br>

        <label>Fecha Aprobación:
            <br>
            <input type="datetime-local" name="fechaAprobacionPFD" value="{{old('fechaAprobacionPFD')}}">
        </label>
                
        @error('fechaAprobacionPFD')

            <br>
            <small>*@lang('validation.required', ['attribute' => 'Fecha Aprobación'])</small>
            
        @enderror

        <br><br>

        <label>Año:
            <br>
            <select name="yearPFD" value="{{old('yearPFD')}}">
                @php
                  $anioActual = date('Y');
                  $anioInicial = 1900;
                @endphp
                @for ($i = $anioActual; $i >= $anioInicial; $i--)
                <option value="{{ $i }}" {{ old('yearPFD') == $i ? 'selected' : '' }}>{{ $i }}</option>
                @endfor
            </select>
        </label>
                
        @error('yearPFD')

            <br>
            <small>*@lang('validation.required', ['attribute' => 'Año'])</small>
            
        @enderror

        <br><br>

        <button type="submit">Enviar Formulario</button>
        <br><br>

    </form>
@endsection