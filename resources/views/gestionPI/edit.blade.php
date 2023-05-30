@extends('adminlte::page')

@section('title', 'Editar Plan FD')

@section('content_header')

    <h1>En esta página se podrá crear editar un registro de Planes FD.</h1>

@stop

@section('content')    

    <a href="{{route('gestionPI.index')}}">Regresar</a>
    <br><br>

    <form action="{{route('gestionPI.update', $gestionPI)}}" method="POST">
        
        @csrf

        @method('put')

        <label>Comisión:
            <br>
            <input type="number" name="idComision" value="{{$gestionPI->idComision}}">
        </label>
        <br><br>

        <label>Cuadro Necesidad:
            <br>
            <input type="number" name="idCuadroNecesidades" value="{{$gestionPI->idCuadroNecesidades}}">
        </label>
        <br><br>

        <label>Revisión:
            <br>
            <input type="number" name="idRevisionPFD" value="{{$gestionPI->idRevisionPFD}}">
        </label>
        <br><br>

        <label>Acta:
            <br>
            <input type="number" name="idActaConsejoFacultad" value="{{$gestionPI->idActaConsejoFacultad}}">
        </label>
        <br><br>

        <label>Responsable Elaboración:
            <br>
            <input type="number" name="idResponsableElaboracion" value="{{$gestionPI->idResponsableElaboracion}}">
        </label>
        <br><br>

        <label>Responsable Aprobación:
            <br>
            <input type="number" name="idResponsableAprobacion" value="{{$gestionPI->idResponsableAprobacion}}">
        </label>
        <br><br>

        <label>Descripción:
            <br>
            <textarea name="descripcionPFD" rows="5">{{$gestionPI->descripcionPFD}}</textarea>
        </label>
        <br><br>

        <label>Fecha Elaboración:
            <br>
            <input type="datetime-local" name="fechaElaboracionPFD" value="{{$gestionPI->fechaElaboracionPFD}}">
        </label>
        <br><br>

        <label>Fecha Aprobación:
            <br>
            <input type="datetime-local" name="fechaAprobacionPFD" value="{{$gestionPI->fechaAprobacionPFD}}">
        </label>
        <br><br>

        <label>Año:
            <br>
            <select name="yearPFD">
                @php
                  $anioActual = date('Y');
                  $anioInicial = 1900;
                @endphp
                <option value="{{$gestionPI->yearPFD}}" selected>{{$gestionPI->yearPFD}}</option>
                @for ($i = $anioActual; $i >= $anioInicial; $i--)                  
                    @if ($i != $gestionPI->yearPFD)
                        <option value="{{ $i }}">{{ $i }}</option>
                    @endif
                @endfor
            </select>
        </label>
        <br><br>

        <button type="submit">Actualizar Formulario</button>

    </form>
@stop
