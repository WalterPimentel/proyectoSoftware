@extends('adminlte::page')

@section('title', 'Prácticas Preprofesionales')

@section('content_header')

    <h1>Bienvenido a la Gestión de Prácticas Pre Profesionales</h1>

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
        <li class="active">
            <a href="{{route('practicas.index')}}">
                <i class="fas fa-angle-left fa-xs">   Prácticas Pre Profesionales   </i>
            </a>
        </li>
        <li class="active">
            <i class="fas fa-angle-left fa-xs">   Prácticas    </i>
        </li>
    </ol>
    <ul>
        <table class="table table-striped table-bordered table-hover dataTable dtr-inline collapsed">
            <div class="small-box bg-gradient-success">
                <div class="inner">
                    <h3>{{ $practicas->total() }}    </h3>
                    <p>Prácticas Registradas</p>
                </div>
                <div class="icon">
                    <i class="fas fa-briefcase-medical"></i>
                </div>
                <a href="{{ route('practicas.create') }}" class="small-box-footer">
                    Nueva Práctica <i class="fas fa-plus-circle"></i>
                </a>
            </div>

            <thead class="thead-light">
                <tr class="text-center align-middle">
                    <th>Acción</th>
                    <th>Código</th>
                    <th>Título</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($practicas as $practica)                
                    <tr>
                        <td style="width: 120px">
                            <div class="text-center d-flex justify-content-center align-items-center">
                                <a href="{{route('practicas.edit', $practica->id)}}">
                                    <button class="btn btn-warning mr-2" title="Editar Registro '{{$practica->codigo}}'"><i class="fas fa-edit" style="color: #ffffff;"></i></button>
                                </a>
                                <form action="{{route('practicas.destroy', $practica->id)}}" method="POST" onsubmit="return confirm('¿Está seguro de eliminar el registro \'{{ $practica->codigo }}\'?');">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger mr-2" title="Eliminar Registro '{{$practica->codigo}}'"><i class="fas fa-trash-alt" style="color: #ffffff;"></i></button>
                                </form>
                            </div>                            
                        </td>
                        <td class="text-center align-middle">{{$practica->codigo}}</td>
                        <td onclick="window.location='{{ route('practicas.show', $practica->id) }}';" style="cursor: pointer;" class="align-middle">{{$practica->titulo}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>        
    </ul>    
    <div class="pagination">
        @if ($practicas->previousPageUrl())
            <li class="page-item">
                <a class="page-link" href="{{ $practicas->previousPageUrl() }}" rel="prev">
                    <i class="fas fa-angle-double-left"></i> Atrás
                </a>
            </li>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        @else
            <li class="page-item disabled">
                <span class="page-link">
                    <i class="fas fa-angle-double-left"></i> Atrás
                </span>
            </li>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        @endif
    
        @if ($practicas->nextPageUrl())
            <li class="page-item">
                <a class="page-link" href="{{ $practicas->nextPageUrl() }}" rel="next">
                    Siguiente <i class="fas fa-angle-double-right"></i>
                </a>
            </li>
        @else
            <li class="page-item disabled">
                <span class="page-link">
                    Siguiente <i class="fas fa-angle-double-right"></i>
                </span>
            </li>
        @endif
    
        <div class="pagination-text">
            <p class="text-muted">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mostrando de {{ $practicas->firstItem() }} al {{ $practicas->lastItem() }} de {{ $practicas->total() }} resultados
            </p>
        </div>
    </div>    
@stop
