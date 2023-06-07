@extends('adminlte::page')

@section('title', 'Editar Requisito')

@section('content_header')
    <div class="d-flex justify-content-between"> 
        <h1>Editar Registro "{{$requisito->nombreRequisito}}" de Requisitos.</h1>
        <a style="background-color: rgb(108, 117, 125)" href="javascript:history.back()" class="btn">
            <i class="fas fa-chevron-circle-left" style="color: #ffffff;">   Atrás</i>
        </a>
    </div>
@stop

@section('content')
    <div>
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
                <a href="{{route('requisitos.index')}}">
                    <i class="fas fa-angle-left fa-xs">   Requisitos    </i>                
                </a>
            </li>
            <li class="active">
                <i class="fas fa-angle-left fa-xs">   Editar Requisito   </i>
            </li>        
        </ol>  
    </div>  

    <div class="card card-outline card-info">
        <div class="card-header">
        <h3 class="card-title">Editar Formulario</h3>
        </div>
        <div class="card-body">
            <form action="{{route('requisitos.update', $requisito)}}" method="POST">
        
                @csrf
        
                @method('put')
        
                <div class="form-group">
                    <label>Nombre</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-signature"></i></span>
                        </div>
                        <input class="form-control" type="text" name="nombreRequisito" value="{{old('nombreRequisito', $requisito->nombreRequisito)}}" required>
                    </div>
                    @error('nombreRequisito')
                        <small class="text-warning">*@lang('validation.required', ['attribute' => 'Nombre'])</small>
                    @enderror
                </div>
        
                <div class="form-group">
                    <label>Descripción</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-file-alt"></i></span>
                        </div>
                        <input class="form-control" type="text" name="descripcionRequisito" value="{{old('descripcionRequisito', $requisito->descripcionRequisito)}}">
                    </div>
                </div>
        
                <div class="form-group">
                    <label>Estado</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-toggle-on"></i></span>
                        </div>                
                        <select class="form-control" name="estado">
                            <option value="1" {{ old('estado', $requisito->estado) == 1 ? 'selected' : '' }}>Cumplido</option>
                            <option value="0" {{ old('estado', $requisito->estado) == 0 ? 'selected' : '' }}>Incumplido</option>
                        </select>
                    </div>
                    @error('estado')                        
                        @if ($errors->has('estado'))
                            @if (old('estado'))                        
                                <small class="text-danger">*Error al registrar Estado.</small>
                            @else                        
                                <small class="text-warning">*@lang('validation.required', ['attribute' => 'Estado'])</small>
                            @endif
                        @endif  
                    @enderror
                </div>
        
                <button type="submit" class="btn btn-block btn-info">Actualizar Formulario</button>
        
            </form>
        </div>
    </div>

@stop
