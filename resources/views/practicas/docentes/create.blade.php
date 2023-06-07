@extends('adminlte::page')

@section('title', 'Crear Docentes')

@section('content_header')
    <div class="d-flex justify-content-between">     
        <h1>Crear un nuevo Registro de Docentes.</h1>
        <a style="background-color: rgb(108, 117, 125)" href="{{route('docentes.index')}}" class="btn">
            <i class="fas fa-chevron-circle-left" style="color: #ffffff;">   Volver a Docentes</i>
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
            <a href="{{route('docentes.index')}}">
                <i class="fas fa-angle-left fa-xs">   Docentes    </i>                
            </a>
        </li>
        <li class="active">
            <i class="fas fa-angle-left fa-xs">   Nuevo Docente   </i>
        </li>        
    </ol>    
    <div class="card card-outline card-success">
        <div class="card-header">
          <h3 class="card-title">Rellenar Formulario</h3>
        </div>
        <div class="card-body">
            <form action="{{route('docentes.store')}}" method="POST">
                
                @csrf

                <div class="form-group">
                    <label>Código</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input class="form-control" type="number" name="codigoDocente" value="{{old('codigoDocente')}}" min="1" pattern="\d+" required>
                    </div>
                    @error('codigoDocente')

                        @if ($errors->has('codigoDocente'))
                            @if (old('codigoDocente'))                        
                                <small class="text-danger">*El campo Código debe ser mayor a 1.</small>
                            @else                        
                                <small class="text-warning">*@lang('validation.required', ['attribute' => 'Código'])</small>
                            @endif
                        @endif
                        
                    @enderror
                </div>        

                <div class="form-group">
                    <label>Nombres</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input class="form-control" type="text" name="nombresDocente" value="{{old('nombresDocente')}}" pattern="^[A-Za-zñÑáéíóúÁÉÍÓÚ\s.]+" required>
                    </div>
                    @error('nombresDocente')

                        @if ($errors->has('nombresDocente'))
                            @if (old('nombresDocente'))                        
                                <small class="text-danger">*El campo Nombres solo puede contener letras.</small>
                            @else                        
                                <small class="text-warning">*@lang('validation.required', ['attribute' => 'Nombres'])</small>
                            @endif
                        @endif 
                        
                    @enderror
                </div>        

                <div class="form-group">
                    <label>Apellido Paterno</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input class="form-control" type="text" name="apellidopDocente" value="{{old('apellidopDocente')}}" pattern="^[A-Za-zñÑáéíóúÁÉÍÓÚ\s]+" required>
                    </div>
                    @error('apellidopDocente')

                        @if ($errors->has('apellidopDocente'))
                            @if (old('apellidopDocente'))                        
                                <small class="text-danger">*El campo Apellido Paterno solo puede contener letras.</small>
                            @else                        
                                <small class="text-warning">*@lang('validation.required', ['attribute' => 'Apellido Paterno'])</small>
                            @endif
                        @endif 
                        
                    @enderror
                </div>                

                <div class="form-group">
                    <label>Apellido Materno</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input class="form-control" type="text" name="apellidomDocente" value="{{old('apellidomDocente')}}" pattern="^[A-Za-zñÑáéíóúÁÉÍÓÚ\s]+" required>
                    </div>
                    @error('apellidomDocente')

                        @if ($errors->has('apellidomDocente'))
                            @if (old('apellidomDocente'))
                                <small class="text-danger">*El campo Apellido Materno solo puede contener letras.</small>
                            @else
                                <small class="text-warning">*@lang('validation.required', ['attribute' => 'Apellido Materno'])</small>
                            @endif
                        @endif 
                        
                    @enderror
                </div>

                <div class="form-group">
                    <label>Teléfono</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-phone"></i></span>
                        </div>
                        <input class="form-control" placeholder="Teléfono" type="text" name="telefonoDocente" value="{{old('telefonoDocente')}}" pattern="^(9[0-9]{8}|[1-9][0-9]{8,})$" required>
                    </div>
                    @error('telefonoDocente')
                        @if ($errors->has('telefonoDocente'))
                            @if (old('telefonoDocente'))                        
                                <small class="text-danger">*El campo Teléfono debe ser verídico.</small>
                            @else                        
                                <small class="text-warning">*@lang('validation.required', ['attribute' => 'Teléfono'])</small>
                            @endif
                        @endif  
                    @enderror
                </div>                

                <div class="form-group">
                    <label>Correo</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                        </div>
                        <input class="form-control" placeholder="Correo" type="text" name="correoDocente" value="{{old('correoDocente')}}" required>
                    </div>
                    @error('correoDocente')

                        @if ($errors->has('correoDocente'))
                            @if (old('correoDocente'))
                                @if ($message == "El campo correo docente debe ser una dirección de correo válida.")
                                    <small class="text-danger">*@lang('validation.email', ['attribute' => 'Correo'])</small>
                                @else
                                    <small class="text-danger">*{{$message}}</small>
                                @endif
                            @else
                                <small class="text-warning">*@lang('validation.required', ['attribute' => 'Correo'])</small>
                            @endif
                        @endif            
                    
                    @enderror
                </div>                

                <button type="submit" class="btn btn-block btn-success">Enviar Formulario</button>

            </form>
        </div>
    </div>
@stop
