@extends('layouts.plantilla')

@section('title', 'Crear Recurso')

@section('content')
    <h1>En esta página se podrá crear un nuevo registro de Tipo Recurso.</h1>

    <a href="{{route('tiposrecursos.index')}}">Regresar</a>
    <br><br>

    <form action="{{route('tiposrecursos.store')}}" method="POST">
        
        @csrf

        <label>Descripción Recurso:
            <br>
            <textarea name="descripcionRecurso" rows="5">{{old('nombreRequisito')}}</textarea>
        </label>
                
        @error('descripcionRecurso')

            <br>
            <small>*@lang('validation.required', ['attribute' => 'Descripción Recurso'])</small>
            
        @enderror

        <br><br>

        <button type="submit">Enviar Formulario</button>
        <br><br>

    </form>
@endsection