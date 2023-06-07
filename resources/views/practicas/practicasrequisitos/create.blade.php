@extends('adminlte::page')

@section('title', 'Crear Practicas Requisitos')

@section('content_header')
    <div class="d-flex justify-content-between">  
        <h1>Crear un nuevo Registro de Práctica y sus Requisitos.</h1>
        <a style="background-color: rgb(108, 117, 125)" href="{{route('practicasrequisitos.index')}}" class="btn">
            <i class="fas fa-chevron-circle-left" style="color: #ffffff;">   Volver a Prácticas y sus Requisitos</i>
        </a>
    </div>
@stop

@section('content')
    
    <ol class="breadcrumb">
        <li>
            <a href="{{route('home')}}">
                <i class="fas fa-home fa-xs">   Home   </i>
            </a>
        </li>
        <li>
            <a href="#">
                <i class="fas fa-angle-left fa-xs">   Macroprocesos   </i>
            </a>
        </li>
        <li>
            <a href="#">
                <i class="fas fa-angle-left fa-xs">   Misionales  </i>
            </a>
        </li>
        <li>
            <a href="{{route('practicas.index')}}">
                <i class="fas fa-angle-left fa-xs">   Prácticas Pre Profesionales   </i>
            </a>
        </li>
        <li>
            <a href="{{route('practicasrequisitos.index')}}">
                <i class="fas fa-angle-left fa-xs">   Prácticas y sus Requisitos    </i>                
            </a>
        </li>
        <li class="active">
            <i class="fas fa-angle-left fa-xs">   Nueva Prácticas y sus Requisitos   </i>
        </li>        
    </ol>
    <div class="card card-outline card-success">
        <div class="card-header">
          <h3 class="card-title">Rellenar Formulario</h3>
        </div>
        <div class="card-body">
            <form action="{{route('practicasrequisitos.store')}}" method="POST">
        
                @csrf
        
                <div class="form-group">
                    <label>Práctica</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-briefcase"></i></span>
                        </div>
                        <input class="form-control" type="number" name="idPractica" value="{{old('idPractica')}}" min="1" pattern="\d+" required>
                    </div>
                    @error('idPractica')
                        @if ($errors->has('idPractica'))
                            @if (old('idPractica'))                        
                                <small class="text-danger">*Error al registrar Práctica.</small>
                            @else                        
                                <small class="text-warning">*@lang('validation.required', ['attribute' => 'Práctica'])</small>
                            @endif
                        @endif                        
                    @enderror
                </div>
        
                <div class="form-group">
                    <label>Requisitos</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-spell-check"></i></span>
                        </div>
                        <input class="form-control" type="number" name="idRequisito" value="{{old('idRequisito')}}" min="1" pattern="\d+" required>
                    </div>
                    @error('idRequisito')
                        @if ($errors->has('idRequisito'))
                            @if (old('idRequisito'))                        
                                <small class="text-danger">*Error al registrar Requisitos.</small>
                            @else                        
                                <small class="text-warning">*@lang('validation.required', ['attribute' => 'Requisitos'])</small>
                            @endif
                        @endif                        
                    @enderror
                </div>
        
                <button type="submit" class="btn btn-block btn-success">Enviar Formulario</button>
        
            </form>
        </div>
    </div>
@stop
