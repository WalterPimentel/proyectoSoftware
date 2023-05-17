@extends('layouts.plantilla')

@section('title', 'Plan de Funcionamiento y Desarrollo')

@section('content')
    <h1>En esta Página se registrará el Plan de Funcionamiento y Desarrollo a decanatura por parte del Resposable de la Comisión de Planificaión Institucional</h1>

    <a href="{{route('gestionPI.index')}}">Regresar</a>
    <br><br>

    <form action="{{route('gestionPI.store')}}" method="POST">
        
        @csrf

        <label>Comisión:
            <br>
            <input type="number" name="idComision">
        </label>
        <br><br>

        <label>Cuadro Necesidad:
            <br>
            <input type="number" name="idCuadroNecesidades">
        </label>
        <br><br>

        <label>Revisión:
            <br>
            <input type="number" name="idRevisionPFD">
        </label>
        <br><br>

        <label>Acta:
            <br>
            <input type="number" name="idActaConsejoFacultad">
        </label>
        <br><br>

        <label>Responsable Elaboración:
            <br>
            <input type="number" name="idResponsableElaboracion">
        </label>
        <br><br>

        <label>Responsable Aprobación:
            <br>
            <input type="number" name="idResponsableAprobacion">
        </label>
        <br><br>

        <label>Descripción:
            <br>
            <textarea name="descripcionPFD" rows="5"></textarea>
        </label>
        <br><br>

        <label>Fecha Elaboración:
            <br>
            <input type="datetime-local" name="fechaElaboracionPFD">
        </label>
        <br><br>

        <label>Fecha Aprobación:
            <br>
            <input type="datetime-local" name="fechaAprobacionPFD">
        </label>
        <br><br>

        <label>Año:
            <br>
            <select name="yearPFD">
                @php
                  $anioActual = date('Y');
                  $anioInicial = 1900;
                @endphp
                @for ($i = $anioActual; $i >= $anioInicial; $i--)
                  <option value="{{ $i }}">{{ $i }}</option>
                @endfor
            </select>
        </label>
        <br><br>

        <button type="submit">Enviar Formulario</button>
        <br><br>

    </form>
@endsection