@extends('adminlte::page')

@section('title', 'Crear Empresas')

@section('content_header')
    <div class="d-flex justify-content-between">
        <h1>Crear un nuevo Registro de Empresas.</h1>
        <a style="background-color: rgb(108, 117, 125)" href="{{route('empresas.index')}}" class="btn">
            <i class="fas fa-chevron-circle-left" style="color: #ffffff;">   Volver a Empresas</i>
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
            <a href="{{route('empresas.index')}}">
                <i class="fas fa-angle-left fa-xs">   Empresas    </i>                
            </a>
        </li>
        <li class="active">
            <i class="fas fa-angle-left fa-xs">   Nueva Empresa   </i>
        </li>        
    </ol> 

    <div class="card card-outline card-success">
        <div class="card-header">
          <h3 class="card-title">Rellenar Formulario</h3>
        </div>
        <div class="card-body">
            <form action="{{route('empresas.store')}}" method="POST">
        
                @csrf
        
                <div class="form-group">
                    <label>Empresa</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-building"></i></span>
                        </div>
                        <input class="form-control" type="text" name="nombreEmpresa" value="{{old('nombreEmpresa')}}" required>
                    </div>
                    @error('nombreEmpresa')
        
                        <small class="text-warning">*@lang('validation.required', ['attribute' => 'Empresa'])</small>
                        
                    @enderror
                </div>
        
                <div class="form-group">
                    <label>Encargado</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user-tie"></i></span>
                        </div>
                        <input class="form-control" type="text" name="encargadoEmpresa" value="{{old('encargadoEmpresa')}}" pattern="^[A-Za-zñÑáéíóúÁÉÍÓÚ\s.]+" required>
                    </div>
                    @error('encargadoEmpresa')

                        @if ($errors->has('encargadoEmpresa'))
                            @if (old('encargadoEmpresa'))                        
                                <small class="text-danger">*El campo Encargado solo puede contener letras.</small>
                            @else                        
                                <small class="text-warning">*@lang('validation.required', ['attribute' => 'Encargado'])</small>
                            @endif
                        @endif 
                        
                    @enderror
                </div>
        
                <div class="form-group">
                    <label>Rubro</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-industry"></i></span>
                        </div>
                        <input class="form-control" type="text" name="rubroEmpresa" value="{{old('rubroEmpresa')}}" required>
                    </div>
                    @error('rubroEmpresa')
        
                        <small class="text-warning">*@lang('validation.required', ['attribute' => 'Rubro'])</small>
                        
                    @enderror
                </div>

                <div class="form-group">
                    <label>Dirección</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-map-marked-alt"></i></span>
                        </div>
                        <textarea class="form-control" name="direccionEmpresa" rows="5" required>{{old('direccionEmpresa')}}</textarea>
                    </div>
                    @error('direccionEmpresa')
        
                        <small class="text-warning">*@lang('validation.required', ['attribute' => 'Dirección'])</small>
                        
                    @enderror
                </div>

                <div class="form-group">
                    <label>Teléfono</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-phone"></i></span>
                        </div>
                        <input class="form-control" type="text" name="telefonoEmpresa" value="{{old('telefonoEmpresa')}}" pattern="[1-9]\d*">
                    </div>
                    @error('telefonoEmpresa')

                        <small class="text-danger">*@lang('validation.numeric', ['attribute' => 'Teléfono'])</small>

                    @enderror
                </div>
        
                <button type="submit" class="btn btn-block btn-success">Enviar Formulario</button>
        
            </form>
        </div>
    </div>

@stop
