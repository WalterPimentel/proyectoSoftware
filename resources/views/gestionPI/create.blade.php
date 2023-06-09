@extends('adminlte::page')

@section('title', 'Plan de Funcionamiento y Desarrollo')

@section('content_header')
    <div class="d-flex justify-content-between">
        <h1>Crear nuevo Registro de Plan de Funcionamiento y Desarrollo</h1>
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
            <a href="{{route('gestionPI.index')}}">
                <i class="fas fa-angle-left fa-xs">   Plan de Funcionamiento y Desarrollo    </i>                
            </a>
        </li>
        <li class="active">
            <i class="fas fa-angle-left fa-xs">   Nuevo Plan de Funcionamiento y Desarrollo   </i>
        </li>        
    </ol>
    <div class="card card-outline card-success">
        <div class="card-header">
          <h3 class="card-title">Rellenar Formulario</h3>
        </div>
        <div class="card-body">
            <form action="{{route('gestionPI.store')}}" method="POST">
        
                @csrf                

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
                    <label>Cuadro Necesidad</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-comments"></i></span>
                        </div>
                        <select class="form-control" name="idCuadroNecesidades" required>
                            <option value="">Seleccione ...</option>
                            @foreach ($cuadronecesidade as $cuadronecesidad)
                            <option value="{{ $cuadronecesidad->id }}" {{ old('idCuadroNecesidades') == $cuadronecesidad->id ? 'selected' : '' }}>
                                    {{ $cuadronecesidad->descripcionCuadroN }}
                                </option>
                            @endforeach
                        </select>
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
                        <select class="form-control" name="idRevisionPFD" required>
                            <option value="">Seleccione ...</option>
                            @foreach ($revisionespfd as $revisionpfd)
                                <option value="{{ $revisionpfd->id }}" {{ old('idRevisionPFD') == $revisionpfd->id ? 'selected' : '' }}>
                                    {{ $revisionpfd->descripcionRPFD }}
                                </option>
                            @endforeach
                        </select>
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
                        <select class="form-control" name="idActaConsejoFacultad" required>
                            <option value="">
                                Seleccione ...
                            </option>
                            <option value="3" {{ old('idActaConsejoFacultad') == "3" ? 'selected' : '' }}>
                                idActa 3
                            </option>
                            <option value="2" {{ old('idActaConsejoFacultad') == "2" ? 'selected' : '' }}>
                                idActa 2
                            </option>
                            <option value="1" {{ old('idActaConsejoFacultad') == "1" ? 'selected' : '' }}>
                                idActa 1
                            </option>
                        </select>
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
                        <select class="form-control" name="idResponsableElaboracion" required>
                            <option value="">
                                Seleccione ...
                            </option>
                            <option value="3" {{ old('idResponsableElaboracion') == "3" ? 'selected' : '' }}>
                                idResponsableElaboracion 3
                            </option>
                            <option value="2" {{ old('idResponsableElaboracion') == "2" ? 'selected' : '' }}>
                                idResponsableElaboracion 2
                            </option>
                            <option value="1" {{ old('idResponsableElaboracion') == "1" ? 'selected' : '' }}>
                                idResponsableElaboracion 1
                            </option>
                        </select> 
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
                        <select class="form-control" name="idResponsableAprobacion" required>
                            <option value="">
                                Seleccione ...
                            </option>
                            <option value="3" {{ old('idResponsableAprobacion') == "3" ? 'selected' : '' }}>
                                idResponsableAprobacion 3
                            </option>
                            <option value="2" {{ old('idResponsableAprobacion') == "2" ? 'selected' : '' }}>
                                idResponsableAprobacion 2
                            </option>
                            <option value="1" {{ old('idResponsableAprobacion') == "1" ? 'selected' : '' }}>
                                idResponsableAprobacion 1
                            </option>
                        </select>
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
                        <textarea class="form-control" name="descripcionPFD" rows="5" required>{{old('descripcionPFD')}}</textarea>
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
                        <input class="form-control" type="datetime-local" name="fechaElaboracionPFD" value="{{ old('fechaElaboracionPFD') }}" required>
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
                        <input class="form-control" type="datetime-local" name="fechaAprobacionPFD" value="{{ old('fechaAprobacionPFD') }}" required>
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
                                <option value="{{ $i }}" {{ old('yearPFD') == $i ? 'selected' : '' }}>{{ $i }}</option>
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
        
                <button class="btn btn-block btn-success" type="submit">Enviar Formulario</button>
        
            </form>
        </div>
    </div>
@endsection