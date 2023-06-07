@extends('adminlte::page')

@section('title', 'Empresas')

@section('content_header')

    <h1>Bienvenido a la Gestión de Empresas</h1>

@stop

@section('content')

    <ol class="breadcrumb">
        <li>
            <a href="{{route('home')}}">
                <i class="fas fa-home fa-xs">   Home   </i>
            </a>
        </li>
        <li>
            <a href="{{route('practicas.index')}}">
                <i class="fas fa-angle-left fa-xs">   Macroprocesos   </i>
            </a>
        </li>
        <li>
            <a href="{{route('practicas.index')}}">
                <i class="fas fa-angle-left fa-xs">   Misionales  </i>
            </a>
        </li>
        <li>
            <a href="{{route('practicas.index')}}">
                <i class="fas fa-angle-left fa-xs">   Prácticas Pre Profesionales   </i>
            </a>
        </li>
        <li class="active">
            <i class="fas fa-angle-left fa-xs">   Empresas    </i>
        </li>
    </ol>

    <ul>
        <table class="table table-striped table-bordered table-hover dataTable dtr-inline collapsed">

            <div class="small-box bg-gradient-success">
                <div class="inner">
                    <h3>{{ $empresas->total() }}    </h3>
                    <p>Empresas Registradas</p>
                </div>
                <div class="icon">
                    <i class="far fa-building"></i>
                </div>
                <a href="{{ route('empresas.create') }}" class="small-box-footer">
                    Nueva Empresa <i class="fas fa-plus-circle"></i>
                </a>
            </div>

            <thead class="thead-light">
                <tr class="text-center align-middle">
                    <th>Acción</th>
                    <th>Empresa</th>
                    <th>Rubro</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($empresas as $empresa)                
                    <tr>
                        <td style="width: 120px">
                            <div class="text-center d-flex justify-content-center align-items-center">
                                <a href="{{route('empresas.edit', $empresa->id)}}">
                                    <button class="btn btn-warning mr-2" title="Editar Registro '{{$empresa->nombreEmpresa}}'"><i class="fas fa-edit" style="color: #ffffff;"></i></button>
                                </a>
                                <form action="{{route('empresas.destroy', $empresa->id)}}" method="POST" onsubmit="return confirm('¿Está seguro de eliminar el registro \'{{ $empresa->nombreEmpresa }}\'?');">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger mr-2" title="Eliminar Registro '{{$empresa->nombreEmpresa}}'"><i class="fas fa-trash-alt" style="color: #ffffff;"></i></button>
                                </form>
                            </div>                            
                        </td>
                        <td onclick="window.location='{{ route('empresas.show', $empresa->id) }}';" style="cursor: pointer;" class="text-center align-middle">{{$empresa->nombreEmpresa}}</td>
                        <td onclick="window.location='{{ route('empresas.show', $empresa->id) }}';" style="cursor: pointer;" class="align-middle">{{$empresa->rubroEmpresa}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>        
    </ul>    
    <div class="pagination">
        @if ($empresas->previousPageUrl())
            <li class="page-item">
                <a class="page-link" href="{{ $empresas->previousPageUrl() }}" rel="prev">
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
    
        @if ($empresas->nextPageUrl())
            <li class="page-item">
                <a class="page-link" href="{{ $empresas->nextPageUrl() }}" rel="next">
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
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mostrando de {{ $empresas->firstItem() }} al {{ $empresas->lastItem() }} de {{ $empresas->total() }} resultados
            </p>
        </div>
    </div>

@stop
