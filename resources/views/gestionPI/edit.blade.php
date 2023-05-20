@extends('layouts.plantilla')

@section('title', 'Editar Plan FD')

@section('content')
    <h1>En esta página se podrá crear editar un registro de Planes FD.</h1>

    <a href="{{route('gestionPI.index')}}">Regresar</a>
    <br><br>

    <form action="{{route('gestionPI.update', $pfd)}}" method="POST">
        
        @csrf

        @method('put')

        <label>Comisión:
            <br>
            <input type="number" name="idComision" value="{{$pfd->idComision}}">
        </label>
        <br><br>

        <label>Cuadro Necesidad:
            <br>
            <input type="number" name="idCuadroNecesidades" value="{{$pfd->idCuadroNecesidades}}">
        </label>
        <br><br>

        <label>Revisión:
            <br>
            <input type="number" name="idRevisionPFD" value="{{$pfd->idRevisionPFD}}">
        </label>
        <br><br>

        <label>Acta:
            <br>
            <input type="number" name="idActaConsejoFacultad" value="{{$pfd->idActaConsejoFacultad}}">
        </label>
        <br><br>

        <label>Responsable Elaboración:
            <br>
            <input type="number" name="idResponsableElaboracion" value="{{$pfd->idResponsableElaboracion}}">
        </label>
        <br><br>

        <label>Responsable Aprobación:
            <br>
            <input type="number" name="idResponsableAprobacion" value="{{$pfd->idResponsableAprobacion}}">
        </label>
        <br><br>

        <label>Descripción:
            <br>
            <textarea name="descripcionPFD" rows="5">{{$pfd->descripcionPFD}}</textarea>
        </label>
        <br><br>

        <label>Fecha Elaboración:
            <br>
            <input type="datetime-local" name="fechaElaboracionPFD" value="{{$pfd->fechaElaboracionPFD}}">
        </label>
        <br><br>

        <label>Fecha Aprobación:
            <br>
            <input type="datetime-local" name="fechaAprobacionPFD" value="{{$pfd->fechaAprobacionPFD}}">
        </label>
        <br><br>

        <label>Año:
            <br>
            <select name="yearPFD">
                @php
                  $anioActual = date('Y');
                  $anioInicial = 1900;
                @endphp
                <option value="{{$pfd->yearPFD}}" selected>{{$pfd->yearPFD}}</option>
                @for ($i = $anioActual; $i >= $anioInicial; $i--)                  
                    @if ($i != $pfd->yearPFD)
                        <option value="{{ $i }}">{{ $i }}</option>
                    @endif
                @endfor
            </select>
        </label>
        <br><br>

        <button type="submit">Actualizar Formulario</button>

    </form>
@endsection