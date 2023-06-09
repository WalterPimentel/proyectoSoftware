@extends('adminlte::page')

@section('title', 'Página Principal')

@section('content_header')

    <h1>Bienvenido a la Página Principal</h1>

@stop

@section('content')
    <div class="content px-2">
        <div class="col-12">
            <div style="cursor: pointer;" onclick="window.location.href = '{{ route('admin.home') }}'">
                <div class="info-box">
                    <span class="info-box-icon bg-info"><i class="fas fa-tachometer-alt"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">DashBoard</span>
                    </div>
                </div>
            </div>
            <div  o style="cursor: pointer;" onclick="window.location.href = '{{route('gestionPI.index')}}'">
                <div class="info-box">
                    <span class="info-box-icon bg-info"><i class="fas fa-project-diagram"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Gestión de Planificación Institucional</span>
                        <span class="info-box-number">{{$gestionPIs}}</span>
                    </div>
                </div>
            </div>
            <div style="cursor: pointer;" onclick="window.location.href = '{{route('practicas.index')}}'">
                <div class="info-box">
                    <span class="info-box-icon bg-info"><i class="fas fa-briefcase"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Gestión de Prácticas Preprofesionales</span>
                        <span class="info-box-number">{{$practicas}}</span>
                    </div>
                </div>
            </div>
            <div style="cursor: pointer;" onclick="window.location.href = '{{route('users.index')}}'">
                <div class="info-box">
                    <span class="info-box-icon bg-info"><i class="fas fa-user-friends"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Usuarios del Sistema</span>
                        <span class="info-box-number">{{$users}}</span>
                    </div>
                </div>
            </div>
            <div style="cursor: pointer;" onclick="window.location.href = '{{route('nosotros')}}'">
                <div class="info-box">
                    <span class="info-box-icon bg-info"><i class="fas fa-users"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Nosotros</span>                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop