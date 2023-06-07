@extends('adminlte::page')

@section('title', 'Crear Estudiantes')

@section('content_header')

<div class="d-flex justify-content-between">     
    <h1>Crear un nuevo Registro de Estudiantes.</h1>
    <a style="background-color: rgb(108, 117, 125)" href="{{route('estudiantes.index')}}" class="btn">
        <i class="fas fa-chevron-circle-left" style="color: #ffffff;">   Volver a Estudiantes</i>
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
            <a href="{{route('estudiantes.index')}}">
                <i class="fas fa-angle-left fa-xs">   Estudiantes    </i>                
            </a>
        </li>
        <li class="active">
            <i class="fas fa-angle-left fa-xs">   Nuevo Estudiante   </i>
        </li>        
    </ol>    
    <div class="card card-outline card-success">
        <div class="card-header">
        <h3 class="card-title">Rellenar Formulario</h3>
        </div>
        <div class="card-body">
            <form action="{{route('estudiantes.store')}}" method="POST">
                
                @csrf

                <div class="form-group">
                    <label>Código</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input class="form-control" type="number" name="codigoEstudiante" value="{{old('codigoEstudiante')}}" min="1" pattern="\d+" required>
                    </div>
                    @error('codigoEstudiante')

                        @if ($errors->has('codigoEstudiante'))
                            @if (old('codigoEstudiante'))                        
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
                        <input class="form-control" type="text" name="nombresEstudiante" value="{{old('nombresEstudiante')}}" pattern="^[A-Za-zñÑáéíóúÁÉÍÓÚ\s.]+" required>
                    </div>
                    @error('nombresEstudiante')

                        @if ($errors->has('nombresEstudiante'))
                            @if (old('nombresEstudiante'))                        
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
                        <input class="form-control" type="text" name="apellidopEstudiante" value="{{old('apellidopEstudiante')}}" pattern="^[A-Za-zñÑáéíóúÁÉÍÓÚ\s]+" required>
                    </div>
                    @error('apellidopEstudiante')

                        @if ($errors->has('apellidopEstudiante'))
                            @if (old('apellidopEstudiante'))                        
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
                        <input class="form-control" type="text" name="apellidomEstudiante" value="{{old('apellidomEstudiante')}}" pattern="^[A-Za-zñÑáéíóúÁÉÍÓÚ\s]+" required>
                    </div>
                    @error('apellidomEstudiante')

                        @if ($errors->has('apellidomEstudiante'))
                            @if (old('apellidomEstudiante'))
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
                        <input class="form-control" placeholder="Teléfono" type="text" name="telefonoEstudiante" value="{{old('telefonoEstudiante')}}" pattern="^(9[0-9]{8}|[1-9][0-9]{8,})$" required>
                    </div>
                    @error('telefonoEstudiante')
                        @if ($errors->has('telefonoEstudiante'))
                            @if (old('telefonoEstudiante'))                        
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
                        <input class="form-control" placeholder="Correo" type="text" name="correoEstudiante" value="{{old('correoEstudiante')}}" required>
                    </div>
                    @error('correoEstudiante')

                        @if ($errors->has('correoEstudiante'))
                            @if (old('correoEstudiante'))
                                @if ($message == "El campo correo estudiante debe ser una dirección de correo válida.")
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
