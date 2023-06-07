@extends('adminlte::page')

@section('title', 'Etapas')

@section('content_header')

    <h1>Bienvenido a la Gestión de Etapas</h1>

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
        <li class="active">
            <i class="fas fa-angle-left fa-xs">   Etapas    </i>
        </li>
    </ol>

    <ul>
        <table class="table table-striped table-bordered table-hover dataTable dtr-inline collapsed">

            <div class="small-box bg-gradient-success">
                <div class="inner">
                    <h3>{{ $etapas->total() }}    </h3>
                    <p>Etapas Registradss</p>
                </div>
                <div class="icon">
                    <i class="fas fa-chart-line"></i>
                </div>
                <a href="{{ route('etapas.create') }}" class="small-box-footer">
                    Nueva Etapa <i class="fas fa-plus-circle"></i>
                </a>
            </div>

            <thead class="thead-light">
                <tr class="text-center align-middle">
                    <th>Acción</th>
                    <th>Etapa</th>
                </tr>
            </thead>        
            <tbody>
                @foreach ($etapas as $etapa)
                    <tr>
                        <td style="width: 120px">
                            <div class="text-center d-flex justify-content-center align-items-center">
                                <a title="Editar Registro de '{{$etapa->nombreEtapa}}'" class="btn btn-warning mr-2" href="{{route('etapas.edit', $etapa->id)}}">
                                    <i class="fas fa-edit" style="color: #ffffff;"></i>
                                </a>
                                <form action="{{route('etapas.destroy', $etapa->id)}}" method="POST" onsubmit="return confirm('¿Está seguro de eliminar el registro de la etapa \'{{$etapa->nombreEtapa}}\'?');">
                                    @csrf
                                    @method('delete')
                                    <button title="Eliminar Registro de '{{$etapa->nombreEtapa}}'" class="btn btn-danger mr-2"><i class="fas fa-trash-alt" style="color: #ffffff;"></i></button>
                                </form>
                            </div> 
                        </td>                        
                        <td onclick="window.location='{{ route('etapas.show', $etapa->id) }}';" style="cursor: pointer;" class="align-middle">{{$etapa->nombreEtapa}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </ul>
    <div class="pagination">
        @if ($etapas->previousPageUrl())
            <li class="page-item">
                <a class="page-link" href="{{ $etapas->previousPageUrl() }}" rel="prev">
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
    
        @if ($etapas->nextPageUrl())
            <li class="page-item">
                <a class="page-link" href="{{ $etapas->nextPageUrl() }}" rel="next">
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
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mostrando {{ $etapas->firstItem() }} al {{ $etapas->lastItem() }} de {{ $etapas->total() }} resultados
            </p>
        </div>
    </div>

@stop
