@extends('adminlte::page')

@section('title', 'Editar Practica')

@section('content_header')
    
    <div class="d-flex justify-content-between">  
        <h1>Editar Registro "{{$practica->titulo}}" de Prácticas.</h1>
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
                <a href="{{route('practicas.index')}}">
                    <i class="fas fa-angle-left fa-xs">   Prácticas    </i>                
                </a>
            </li>
            <li class="active">
                <i class="fas fa-angle-left fa-xs">   Editar Práctica   </i>
            </li>            
        </ol>
    </div>

    <div class="card card-outline card-info">
        <div class="card-header">
          <h3 class="card-title">Editar Formulario</h3>
        </div>
        <div class="card-body">
            <form action="{{route('practicas.update', $practica)}}" method="POST">
        
                @csrf
        
                @method('put')
        
                <div class="form-group">
                    <label>Código</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                    <input class="form-control" type="number" name="codigo" value="{{old('codigo', $practica->codigo)}}" min="1" pattern="\d+" required>
                    </div>
                    @error('codigo')

                        @if ($errors->has('codigo'))
                            @if (old('codigo'))                        
                                <small class="text-danger">*El campo Código debe ser mayor a 1.</small>
                            @else                        
                                <small class="text-warning">*@lang('validation.required', ['attribute' => 'Código'])</small>
                            @endif
                        @endif
                        
                    @enderror
                </div>
        
                <div class="form-group">
                    <label>Estudiante</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user-graduate"></i></span>
                        </div>
                        <input class="form-control" type="number" name="idEstudiante" value="{{old('idEstudiante', $practica->idEstudiante)}}" min="1" pattern="\d+" required>
                    </div>
                    @error('idEstudiante')

                        @if ($errors->has('idEstudiante'))
                            @if (old('idEstudiante'))                        
                                <small class="text-warning">*Error al registrar.</small>
                            @else                        
                                <small class="text-danger">*@lang('validation.required', ['attribute' => 'Estudiante'])</small>
                            @endif
                        @endif
                        
                    @enderror
                </div>
        
                <div class="form-group">
                    <label>Docente</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-chalkboard-teacher"></i></span>
                        </div>
                        <input class="form-control" type="number" name="idDocente" value="{{old('idDocente', $practica->idDocente)}}" min="1" pattern="\d+" required>
                    </div>
                    @error('idDocente')

                        @if ($errors->has('idDocente'))
                            @if (old('idDocente'))                        
                                <small class="text-danger">*Error al registrar.</small>
                            @else                        
                                <small class="text-warning">*@lang('validation.required', ['attribute' => 'Docente'])</small>
                            @endif
                        @endif
                        
                    @enderror
                </div>
        
                <div class="form-group">
                    <label>Empresa</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-building"></i></span>
                        </div>
                        <input class="form-control" type="number" name="idEmpresa" value="{{old('idEmpresa', $practica->idEmpresa)}}" min="1" pattern="\d+" required>
                    </div>
                    @error('idEmpresa')

                        @if ($errors->has('idEmpresa'))
                            @if (old('idEmpresa'))                        
                                <small class="text-danger">*Error al registrar.</small>
                            @else                        
                                <small class="text-warning">*@lang('validation.required', ['attribute' => 'Empresa'])</small>
                            @endif
                        @endif
                        
                    @enderror
                </div>

                <div class="form-group">
                    <label>Etapa</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-chart-line"></i></span>
                        </div>
                        <input class="form-control" type="number" name="idEtapa" value="{{old('idEtapa', $practica->idEtapa)}}" min="1" pattern="\d+" required>
                    </div>
                    @error('idEtapa')

                        @if ($errors->has('idEtapa'))
                            @if (old('idEtapa'))                        
                                <small class="text-danger">*Error al registrar.</small>
                            @else                        
                                <small class="text-warning">*@lang('validation.required', ['attribute' => 'Etapa'])</small>
                            @endif
                        @endif
                        
                    @enderror
                </div>

                <div class="form-group">
                    <label>Título</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-align-center"></i></span>
                        </div>
                        <textarea class="form-control" name="titulo" rows="5" placeholder="Escribir ..." required>{{old('titulo', $practica->titulo)}}</textarea>
                    </div>
                    @error('titulo')
    
                        <small class="text-warning">*@lang('validation.required', ['attribute' => 'Título'])</small>
                        
                    @enderror
                </div>
        
                <button type="submit" class="btn btn-block btn-info">Actualizar Formulario</button>
        
            </form>
        </div>
    </div>

@stop
