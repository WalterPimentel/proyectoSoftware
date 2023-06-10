@extends('adminlte::page')

@section('title', 'Crear Acciones de Mejora')

@section('content_header')
    <div class="d-flex justify-content-between">
        <h1>Crear nevao Registro de Acciones de Mejora.</h1>
        <a style="background-color: rgb(108, 117, 125)" href="{{route('gestionPI.index')}}" class="btn">
            <i class="fas fa-chevron-circle-left" style="color: #ffffff;">   Volver a Plan FD</i>
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
                <i class="fas fa-angle-left fa-xs">   Estratégicos  </i>
            </a>
        </li>
        <li>
            <a href="{{route('gestionPI.index')}}">
                <i class="fas fa-angle-left fa-xs">   Planificación Institucional   </i>
            </a>
        </li>
        <li>
            <a href="{{route('accionesmejoras.index')}}">
                <i class="fas fa-angle-left fa-xs">   Acción Mejora    </i>                
            </a>
        </li>
        <li class="active">
            <i class="fas fa-angle-left fa-xs">   Nueva Acción de Mejora   </i>
        </li>        
    </ol>
    <div class="card card-outline card-success">
        <div class="card-header">
          <h3 class="card-title">Rellenar Formulario</h3>
        </div>
        <div class="card-body">
            <form action="{{route('accionesmejoras.store')}}" method="POST">
        
                @csrf

                <div class="form-group">
                    <label>Plan de Funcionamiento y Desarrollo</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-scroll"></i></span>
                        </div>
                        <select class="form-control" name="idPlanFD" required>
                            <option value="">Seleccione ...</option>
                            @foreach ($pfds as $pfd)
                                <option value="{{ $pfd->id }}" {{ old('idPlanFD') == $pfd->id ? 'selected' : '' }}>
                                        {{ $pfd->descripcionPFD }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    @error('idPlanFD')

                        @if ($errors->has('idPlanFD'))
                            @if (old('idPlanFD'))                        
                                <small class="text-danger">*Error al registrar Plan.</small>
                            @else                        
                                <small class="text-warning">*@lang('validation.required', ['attribute' => 'Plan'])</small>
                            @endif
                        @endif
                        
                    @enderror
                </div>

                <div class="form-group">
                    <label>Comisión</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-warehouse"></i></span>
                        </div>
                        <select class="form-control" name="idComision" required>
                            <option value="">Seleccione ...</option>
                            @foreach ($comision as $comisio)
                                <option value="{{ $comisio->id }}" {{ old('idComision') == $comisio->id ? 'selected' : '' }}>
                                    {{ $comisio->nombreComision }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    @error('idComision')

                        @if ($errors->has('idComision'))
                            @if (old('idComision'))                        
                                <small class="text-danger">*Error al registrar Comisión.</small>
                            @else                        
                                <small class="text-warning">*@lang('validation.required', ['attribute' => 'Comisión'])</small>
                            @endif
                        @endif
                        
                    @enderror
                </div>        

                <div class="form-group">
                    <label>Monitoreo del Plan de Funcionamiento y Desarrollo</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-binoculars"></i></span>
                        </div>
                        <select class="form-control" name="idMonitoreoPFD" required>
                            <option value="">Seleccione ...</option>
                            @foreach ($monitoreoPFD as $mpfd)
                            <option value="{{ $mpfd->id }}" {{ old('idMonitoreoPFD') == $mpfd->id ? 'selected' : '' }}>
                                    {{ $mpfd->descripcionMPFD }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    @error('idMonitoreoPFD')
        
                        @if ($errors->has('idMonitoreoPFD'))
                            @if (old('idMonitoreoPFD'))                        
                                <small class="text-danger">*Error al registrar Monitoreo.</small>
                            @else                        
                                <small class="text-warning">*@lang('validation.required', ['attribute' => 'Monitoreo'])</small>
                            @endif
                        @endif
                        
                    @enderror
                </div>

                <div class="form-group">
                    <label>Tipo de Recurso</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-boxes"></i></span>
                        </div>
                        <select class="form-control" name="idTipoRecurso" required>
                            <option value="">Seleccione ...</option>
                            @foreach ($tipoRecurso as $tr)
                            <option value="{{ $tr->id }}" {{ old('idTipoRecurso') == $tr->id ? 'selected' : '' }}>
                                    {{ $tr->descripcionRecurso }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    @error('idTipoRecurso')

                        @if ($errors->has('idTipoRecurso'))
                            @if (old('idTipoRecurso'))                        
                                <small class="text-danger">*Error al registrar Tipo de Recurso.</small>
                            @else                        
                                <small class="text-warning">*@lang('validation.required', ['attribute' => 'Tipo Recurso'])</small>
                            @endif
                        @endif
                        
                    @enderror
                </div>

                <div class="form-group">
                    <label>Metas de las Mejoras</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-bullseye"></i></span>
                        </div>
                        <textarea class="form-control" name="metasAM" rows="5" required>{{old('metasAM')}}</textarea>
                    </div>
                    @error('metasAM')

                        <small>*@lang('validation.required', ['attribute' => 'Metas'])</small>
                        
                    @enderror
                </div>

                <div class="form-group">
                    <label>Descripción de la Acción a Mejorar</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-align-left"></i></span>
                        </div>
                        <textarea class="form-control" name="descripcionAM" rows="5" required>{{old('descripcionAM')}}</textarea>
                    </div>
                    @error('descripcionAM')
        
                        <small>*@lang('validation.required', ['attribute' => 'Descripción'])</small>
                    
                    @enderror
                </div>
        
                <button class="btn btn-block btn-success" type="submit" >Enviar Formulario</button>                
        
            </form>
        </div>
    </div>
@stop
