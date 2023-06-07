@extends('adminlte::page')

@section('title', 'Editar Plan FD')

@section('content_header')
    <div class="d-flex justify-content-between">
        <h1>Editar Registro "{{$gestionPI->descripcionPFD}}" del Plan de Funcionamiento y Desarrollo.</h1>
        <a style="background-color: rgb(108, 117, 125)" href="javascript:history.back()" class="btn">
            <i class="fas fa-chevron-circle-left" style="color: #ffffff;">   Atrás</i>
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
            <a href="{{route('gestionPI.index')}}">
                <i class="fas fa-angle-left fa-xs">   Plan de Funcionamiento y Desarrollo    </i>                
            </a>
        </li>
        <li class="active">
            <i class="fas fa-angle-left fa-xs">   Editar Plan de Funcionamiento y Desarrollo   </i>
        </li>        
    </ol>

    <div class="card card-outline card-info">
        <div class="card-header">
          <h3 class="card-title">Editar Formulario</h3>
        </div>
        <div class="card-body">
            <form action="{{route('gestionPI.update', $gestionPI)}}" method="POST">
        
                @csrf
        
                @method('put')
        
                <div class="form-group">
                    <label>Comisión</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-warehouse"></i></span>
                        </div>
                        <input class="form-control" type="number" name="idComision" value="{{old('idComision', $gestionPI->idComision)}}" min="1" pattern="\d+" required>
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
                    <label>Cuadro Necesidad</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-comments"></i></span>
                        </div>
                        <input class="form-control" type="number" name="idCuadroNecesidades" value="{{ old('idCuadroNecesidades', $gestionPI->idCuadroNecesidades) }}" min="1" pattern="\d+" required>
                    </div>
                    @error('idCuadroNecesidades')
        
                        @if ($errors->has('idCuadroNecesidades'))
                            @if (old('idCuadroNecesidades'))                        
                                <small class="text-danger">*Error al registrar Cuadro Necesidad.</small>
                            @else                        
                                <small class="text-warning">*@lang('validation.required', ['attribute' => 'Cuadro Necesidad'])</small>
                            @endif
                        @endif
                        
                    @enderror
                </div>
        
                <div class="form-group">
                    <label>Revisión</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-clipboard-check"></i></span>
                        </div>
                        <input class="form-control" type="number" name="idRevisionPFD" value="{{ old('idRevisionPFD', $gestionPI->idRevisionPFD) }}" min="1" pattern="\d+" required>
                    </div>
                    @error('idRevisionPFD')
        
                        @if ($errors->has('idRevisionPFD'))
                            @if (old('idRevisionPFD'))                        
                                <small class="text-danger">*Error al registrar Revisión.</small>
                            @else                        
                                <small class="text-warning">*@lang('validation.required', ['attribute' => 'Revisión'])</small>
                            @endif
                        @endif
                        
                    @enderror
                </div>
        
                <div class="form-group">
                    <label>Acta</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-file-contract"></i></span>
                        </div>
                        <input class="form-control" type="number" name="idActaConsejoFacultad" value="{{ old('idActaConsejoFacultad', $gestionPI->idActaConsejoFacultad) }}" min="1" pattern="\d+" required>
                    </div>
                    @error('idActaConsejoFacultad')
        
                        @if ($errors->has('idActaConsejoFacultad'))
                            @if (old('idActaConsejoFacultad'))                        
                                <small class="text-danger">*Error al registrar Acta.</small>
                            @else                        
                                <small class="text-warning">*@lang('validation.required', ['attribute' => 'Acta'])</small>
                            @endif
                        @endif
                        
                    @enderror
                </div>
        
                <div class="form-group">
                    <label>Responsable Elaboración</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user-tie"></i></span>
                        </div>
                        <input class="form-control" type="number" name="idResponsableElaboracion" value="{{ old('idResponsableElaboracion', $gestionPI->idResponsableElaboracion) }}" min="1" pattern="\d+" required>
                    </div>
                    @error('idResponsableElaboracion')
        
                        @if ($errors->has('idResponsableElaboracion'))
                            @if (old('idResponsableElaboracion'))                        
                                <small class="text-danger">*Error al registrar Responsable Elaboración.</small>
                            @else                        
                                <small class="text-warning">*@lang('validation.required', ['attribute' => 'Responsable Elaboración'])</small>
                            @endif
                        @endif
                        
                    @enderror
                </div>
        
                <div class="form-group">
                    <label>Responsable Aprobación</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user-check"></i></span>
                        </div>
                        <input class="form-control" type="number" name="idResponsableAprobacion" value="{{ old('idResponsableAprobacion', $gestionPI->idResponsableAprobacion) }}" min="1" pattern="\d+" required>
                    </div>
                    @error('idResponsableAprobacion')
        
                        @if ($errors->has('idResponsableAprobacion'))
                            @if (old('idResponsableAprobacion'))                        
                                <small class="text-danger">*Error al registrar Responsable Aprobación.</small>
                            @else                        
                                <small class="text-warning">*@lang('validation.required', ['attribute' => 'Responsable Aprobación'])</small>
                            @endif
                        @endif
                        
                    @enderror
                </div>
                
                <div class="form-group">
                    <label>Descripción</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-align-left"></i></span>
                        </div>
                        <textarea class="form-control" name="descripcionPFD" rows="5" required>{{old('descripcionPFD', $gestionPI->descripcionPFD)}}</textarea>
                    </div>
                    @error('descripcionPFD')
        
                        <small>*@lang('validation.required', ['attribute' => 'Descripción'])</small>
                    
                    @enderror
                </div>
        
                <div class="form-group">
                    <label>Fecha Elaboración</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                        </div>
                        <input class="form-control" type="datetime-local" name="fechaElaboracionPFD" value="{{ old('fechaElaboracionPFD', $gestionPI->fechaElaboracionPFD) }}" required>
                    </div>
                    @error('fechaElaboracionPFD')
        
                        @if ($errors->has('fechaElaboracionPFD'))
                            @if (old('fechaElaboracionPFD'))                        
                                <small class="text-danger">*@lang('validation.date', ['attribute' => 'Fecha Elaboración'])</small>
                            @else                        
                                <small class="text-warning">*@lang('validation.required', ['attribute' => 'Fecha Elaboración'])</small>
                            @endif
                        @endif
                        
                    @enderror
                </div>
        
                <div class="form-group">
                    <label>Fecha Aprobación</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-calendar-check"></i></span>
                        </div>
                        <input class="form-control" type="datetime-local" name="fechaAprobacionPFD" value="{{ old('fechaAprobacionPFD', $gestionPI->fechaAprobacionPFD) }}" required>
                    </div>
                    @error('fechaAprobacionPFD')
        
                        @if ($errors->has('fechaAprobacionPFD'))
                            @if (old('fechaAprobacionPFD'))                        
                                <small class="text-danger">*@lang('validation.date', ['attribute' => 'Fecha Aprobación'])</small>
                            @else                        
                                <small class="text-warning">*@lang('validation.required', ['attribute' => 'Fecha Aprobación'])</small>
                            @endif
                        @endif
                        
                    @enderror
                </div>
        
                <div class="form-group">
                    <label>Año</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                        </div>
                        <select class="form-control" name="yearPFD" required>                            
                            @php
                                $anioActual = date('Y');
                                $anioInicial = 1900;
                            @endphp
                            @for ($i = $anioActual; $i >= $anioInicial; $i--)
                                <option value="{{ $i }}" {{ old('yearPFD', $gestionPI->yearPFD) == $i ? 'selected' : '' }}>{{ $i }}</option>
                            @endfor                            
                        </select>
                    </div>
                    @error('yearPFD')
        
                        @if ($errors->has('yearPFD'))
                            @if (old('yearPFD'))                        
                                <small class="text-danger">*@lang('validation.date_format', ['attribute' => 'Año', 'format' => 'AAAA'])</small>
                            @else                        
                                <small class="text-warning">*@lang('validation.required', ['attribute' => 'Año'])</small>
                            @endif
                        @endif
                        
                    @enderror
                </div>
        
                <button type="submit" class="btn btn-block btn-info">Actualizar Formulario</button>
        
            </form>
        </div>
    </div>
@stop
