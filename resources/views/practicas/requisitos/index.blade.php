@extends('adminlte::page')

@section('title', 'Requisitos')

@section('content_header')

    <h1>Bienvenido a la Gestión de Requisitos</h1>

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
            <i class="fas fa-angle-left fa-xs">   Requisitos    </i>
        </li>
    </ol>

    <ul>
        <table class="table table-striped table-bordered table-hover dataTable dtr-inline collapsed">

            <div class="small-box bg-gradient-success">
                <div class="inner">
                    <h3>{{ $requisitos->total() }}    </h3>
                    <p>Requisitos Registrados</p>
                </div>
                <div class="icon">
                    <i class="fas fa-spell-check"></i>
                </div>
                <a href="{{ route('requisitos.create') }}" class="small-box-footer">
                    Nuevo Requisito <i class="fas fa-plus-circle"></i>
                </a>
            </div>

            <thead class="thead-light">
                <tr class="text-center align-middle">
                    <th>Acción</th>
                    <th>Requisito</th>
                    <th>Estado</th>
                </tr>
            </thead>        
            <tbody>
                @foreach ($requisitos as $requisito)
                    <tr>
                        <td style="width: 120px">
                            <div class="text-center d-flex justify-content-center align-items-center">
                                <a title="Editar Registro de '{{$requisito->nombreRequisito}}'" class="btn btn-warning mr-2" href="{{route('requisitos.edit', $requisito->id)}}">
                                    <i class="fas fa-edit" style="color: #ffffff;"></i>
                                </a>
                                <form action="{{route('requisitos.destroy', $requisito->id)}}" method="POST" onsubmit="return confirm('¿Está seguro de eliminar el registro del Requisito \'{{$requisito->nombreRequisito}}\'?');">
                                    @csrf
                                    @method('delete')
                                    <button title="Eliminar Registro de '{{$requisito->nombreRequisito}}'" class="btn btn-danger mr-2"><i class="fas fa-trash-alt" style="color: #ffffff;"></i></button>
                                </form>
                            </div> 
                        </td>                        
                        <td onclick="window.location='{{ route('requisitos.show', $requisito->id) }}';" style="cursor: pointer;" class="text-center align-middle">{{$requisito->nombreRequisito}}</td>
                        <td class="text-center align-middle {{ $requisito->estado == 1 ? 'text-success' : 'text-danger' }}">
                            {{ $requisito->estado == 1 ? 'Cumplido' : 'Incumplido' }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </ul>
    <div class="pagination">
        @if ($requisitos->previousPageUrl())
            <li class="page-item">
                <a class="page-link" href="{{ $requisitos->previousPageUrl() }}" rel="prev">
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
    
        @if ($requisitos->nextPageUrl())
            <li class="page-item">
                <a class="page-link" href="{{ $requisitos->nextPageUrl() }}" rel="next">
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
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mostrando {{ $requisitos->firstItem() }} al {{ $requisitos->lastItem() }} de {{ $requisitos->total() }} resultados
            </p>
        </div>
    </div>

@stop
