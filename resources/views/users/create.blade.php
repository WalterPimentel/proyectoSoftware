@extends('adminlte::page')

@section('title', 'Crear Usuarios')

@section('content_header')
    <div class="d-flex justify-content-between">
        <h1>Crear un nuevo Registro de Usuarios del Sistema.</h1>
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
        <li>
            <i class="fas fa-angle-left fa-xs">   Nuevo Usuario del Sistema   </i>
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
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input class="form-control" type="text" name="name" value="{{old('name')}}" pattern="[A-Za-z\sáéíóúÁÉÍÓÚñÑ]+" required>
                    </div>
                    @error('name')

                        @if ($errors->has('name'))
                            @if (old('name'))                        
                                <small class="text-danger">
                                    *@lang('validation.regex', ['attribute' => 'Nombre'])
                                    <ul>
                                        <li>@lang('validation.min.string', ['attribute' => 'Nombre', 'min' => '5'])</li>
                                        <li>@lang('validation.alpha', ['attribute' => 'Nombre'])</li>
                                    </ul>
                                </small>
                            @else                        
                                <small class="text-warning">*@lang('validation.required', ['attribute' => 'Nombre'])</small>
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
                        <input class="form-control" type="text" name="email" value="{{old('email')}}" required>
                    </div>
                    @error('email')

                        @if ($errors->has('email'))
                            @if (old('email'))
                                @if ($message == "El campo email debe ser una dirección de correo válida.")
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

                <div class="form-group">
                    <label>Contraseña</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text toggle-lock" onclick="togglePasswordVisibility()"><i class="fas fa-lock"></i></span>
                        </div>
                        <input class="form-control" type="password" name="password" id="password-input" required>
                        <div class="input-group-append">
                            <span class="input-group-text toggle-password" onclick="togglePasswordVisibility()"><i class="fas fa-eye"></i></span>
                        </div>
                        <script>
                            function togglePasswordVisibility() {
                                var passwordInput = document.getElementById("password-input");
                                var togglePasswordIcon = document.querySelector(".toggle-password i");
                                var toggleLockIcon = document.querySelector(".toggle-lock i");

                                if (passwordInput.type === "password") {
                                    passwordInput.type = "text";
                                    togglePasswordIcon.classList.remove("fa-eye");
                                    togglePasswordIcon.classList.add("fa-eye-slash");
                                    toggleLockIcon.classList.remove("fa-lock");
                                    toggleLockIcon.classList.add("fa-unlock");
                                } else {
                                    passwordInput.type = "password";
                                    togglePasswordIcon.classList.remove("fa-eye-slash");
                                    togglePasswordIcon.classList.add("fa-eye");
                                    toggleLockIcon.classList.remove("fa-unlock");
                                    toggleLockIcon.classList.add("fa-lock");
                                }
                            }
                        </script>
                    </div>
                    @error('password')

                        @if ($errors->has('password'))
                            @if ($message == "El formato del campo password es inválido.")
                                <small class="text-danger">
                                    *@lang('validation.regex', ['attribute' => 'Contraseña'])
                                    <ul>
                                        <li>@lang('validation.password.mixed', ['attribute' => 'Contraseña'])</li>
                                        <li>@lang('validation.password.numbers', ['attribute' => 'Contraseña'])</li>
                                        <li>@lang('validation.password.symbols', ['attribute' => 'Contraseña'])</li>
                                    </ul>
                                </small>
                            @elseif ($errors->first('password', 'min'))
                                <small class="text-warning">*@lang('validation.min.string', ['attribute' => 'Contraseña', 'min' => '8'])</small>
                            @endif
                        @endif
                        
                    @enderror
                </div>

                <div class="form-group">
                    <label>Confirmar Contraseña</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text toggle-lock1" onclick="togglePasswordCVisibility()"><i class="fas fa-lock"></i></span>
                        </div>
                        <input class="form-control" type="password" name="password_confirmation" id="password-input1" required>
                        <div class="input-group-append">
                            <span class="input-group-text toggle-password1" onclick="togglePasswordCVisibility()"><i class="fas fa-eye"></i></span>
                        </div>
                        <script>
                            function togglePasswordCVisibility() {
                                var passwordInput = document.getElementById("password-input1");
                                var togglePasswordIcon = document.querySelector(".toggle-password1 i");
                                var toggleLockIcon = document.querySelector(".toggle-lock1 i");

                                if (passwordInput.type === "password") {
                                    passwordInput.type = "text";
                                    togglePasswordIcon.classList.remove("fa-eye");
                                    togglePasswordIcon.classList.add("fa-eye-slash");
                                    toggleLockIcon.classList.remove("fa-lock");
                                    toggleLockIcon.classList.add("fa-unlock");
                                } else {
                                    passwordInput.type = "password";
                                    togglePasswordIcon.classList.remove("fa-eye-slash");
                                    togglePasswordIcon.classList.add("fa-eye");
                                    toggleLockIcon.classList.remove("fa-unlock");
                                    toggleLockIcon.classList.add("fa-lock");
                                }
                            }
                        </script>
                    </div>
                    @error('password')                        
                        @if ($errors->first('password', 'password'))
                            <small class="text-danger">@lang('validation.password.confirmed', ['attribute' => 'Contraseña'])</small>
                        @endif
                    @enderror
                </div>

                <button type="submit" class="btn btn-block btn-success">Enviar Formulario</button>

            </form>
        </div>
    </div>
@stop
