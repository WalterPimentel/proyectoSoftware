@extends('adminlte::page')

@section('title', 'Crear Usuarios')

@section('content_header')
    <div class="d-flex justify-content-between">     
        <h1>Crear un nuevo Registro de Usuarios.</h1>
        <a style="background-color: rgb(108, 117, 125)" href="{{route('users.index')}}" class="btn">
            <i class="fas fa-chevron-circle-left" style="color: #ffffff;">   Volver a Usuarios</i>
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
            <a href="{{route('users.index')}}">
                <i class="fas fa-angle-left fa-xs">   Usuarios del Sistema   </i>
            </a>
        </li>
    </ol>

    <div class="card card-outline card-success">
        <div class="card-header">
          <h3 class="card-title">Rellenar Formulario</h3>
        </div>
        <div class="card-body">
            <form action="{{route('users.store')}}" method="POST">
                
                @csrf

                <div class="form-group">
                    <label>Nombre</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input class="form-control" type="text" name="name" value="{{old('name')}}">
                    </div>
                    @error('name')

                        @if ($errors->has('name'))
                            @if (old('name'))                        
                                <small class="text-danger">*El campo Código debe ser mayor a 1.</small>
                            @else                        
                                <small class="text-warning">*@lang('validation.required', ['attribute' => 'Código'])</small>
                            @endif
                        @endif
                        
                    @enderror
                </div>        

                <div class="form-group">
                    <label>Correo</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input class="form-control" type="text" name="email " value="{{old('email ')}}">
                    </div>
                    @error('email ')

                        @if ($errors->has('email '))
                            @if (old('email '))                        
                                <small class="text-danger">*El campo Correo solo puede contener letras.</small>
                            @else                        
                                <small class="text-warning">*@lang('validation.required', ['attribute' => 'Correo'])</small>
                            @endif
                        @endif 
                        
                    @enderror
                </div>        

                <div class="form-group">
                    <label>Contraseña</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input class="form-control" type="text" name="password" value="{{old('password')}}">
                    </div>
                    @error('password')

                        @if ($errors->has('password'))
                            @if (old('password'))                        
                                <small class="text-danger">*El campo Contraseña solo puede contener letras.</small>
                            @else                        
                                <small class="text-warning">*@lang('validation.required', ['attribute' => 'Contraseña'])</small>
                            @endif
                        @endif 
                        
                    @enderror
                </div>                

                <div class="form-group">
                    <label>Confirmar Contraseña</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input class="form-control" type="text" name="password" value="{{old('password')}}">
                    </div>
                    @error('password')

                        @if ($errors->has('password'))
                            @if (old('password'))
                                <small class="text-danger">*El campo Confirmar Contraseña solo puede contener letras.</small>
                            @else
                                <small class="text-warning">*@lang('validation.required', ['attribute' => 'Confirmar Contraseña'])</small>
                            @endif
                        @endif 
                        
                    @enderror
                </div> 

                <button type="submit" class="btn btn-block btn-success">Enviar Formulario</button>

            </form>
        </div>
    </div>
@stop
