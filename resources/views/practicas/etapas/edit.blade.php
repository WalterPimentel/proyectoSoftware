@extends('adminlte::page')

@section('title', 'Editar Etapa')

@section('content_header')
    <div class="d-flex justify-content-between">   
        <h1>Editar Registro "{{$etapa->nombreEtapa}}" de Etapas.</h1>
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
                <a href="{{route('etapas.index')}}">
                    <i class="fas fa-angle-left fa-xs">   Etapas    </i>                
                </a>
            </li>
            <li class="active">
                <i class="fas fa-angle-left fa-xs">   Editar Etapa   </i>
            </li>            
        </ol>
    </div>

    <a href="{{route('practicas.index')}}">Volver a Prácticas</a>
    <br><br>
    <div class="card card-outline card-info">
        <div class="card-header">
          <h3 class="card-title">Rellenar Formulario</h3>
        </div>
        <div class="card-body">
            <form action="{{route('etapas.update', $etapa)}}" method="POST">
        
                @csrf
        
                @method('put')
        
                <div class="form-group">
                    <label>Nombre</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-signature"></i></span>
                        </div>                    
                        <input class="form-control" type="text" name="nombreEtapa" value="{{old('nombreEtapa', $etapa->nombreEtapa)}}" required>
                    </div>
                    @error('nombreEtapa')
                        <small class="text-warning">*@lang('validation.required', ['attribute' => 'Nombre'])</small>
                    @enderror
                </div>
        
                <div class="form-group">
                    <label>Descripción</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-align-left"></i></span>
                        </div>                    
                        <textarea class="form-control" name="descripcionEtapa" rows="5" required>{{old('descripcionEtapa', $etapa->descripcionEtapa)}}</textarea>
                    </div>
                    @error('descripcionEtapa')
                        <br>
                        <small class="text-warning">*@lang('validation.required', ['attribute' => 'Descripción'])</small>
                    @enderror
                </div>
        
                <button type="submit" class="btn btn-block btn-info">Actualizar Formulario</button>
        
            </form>
        </div>
    </div>

@stop
