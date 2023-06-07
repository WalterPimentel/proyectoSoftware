@extends('adminlte::page')

@section('title', 'Prácticas Requisitos')

@section('content_header')

    <h1>Bienvenido a la Gestión de Prácticas y sus Requisitos</h1>

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
            <i class="fas fa-angle-left fa-xs">   Practicas Requisitos    </i>
        </li>
    </ol>
    
    <table class="table table-striped table-bordered table-hover dataTable dtr-inline collapsed">

        <div class="small-box bg-gradient-success">
            <div class="inner">
                <h3>{{ $practicasRequisitos->total() }}    </h3>
                <p>Registrados</p>
            </div>
            <div class="icon">
                <i class="fas fa-notes-medical"></i>
            </div>
            <a href="{{ route('practicasrequisitos.create') }}" class="small-box-footer">
                Nuevo Registro <i class="fas fa-plus-circle"></i>
            </a>
        </div>

        <thead class="thead-light">
            <tr class="text-center align-middle">
                <th>Acción</th>                
                <th>Practica</th>
                <th>Requisitos</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($practicasRequisitos as $pr)
                <tr>
                    <td style="width: 120px">
                        <div class="text-center d-flex justify-content-center align-items-center">
                            <a title="Editar Registro de '{{$pr->id}}'" class="btn btn-warning mr-2" href="{{route('practicasrequisitos.edit', $pr->id)}}">
                                <i class="fas fa-edit" style="color: #ffffff;"></i>
                            </a>
                            <form action="{{route('practicasrequisitos.destroy', $pr->id)}}" method="POST" onsubmit="return confirm('¿Está seguro de eliminar el registro del docente \'{{$pr->id}}\'?');">
                                @csrf
                                @method('delete')
                                <button title="Eliminar Registro de '{{$pr->id}}'" class="btn btn-danger mr-2"><i class="fas fa-trash-alt" style="color: #ffffff;"></i></button>
                            </form>
                        </div> 
                    </td>
                    <td onclick="window.location='{{ route('practicasrequisitos.show', $pr->id) }}';" style="cursor: pointer;" class="text-center align-middle">{{$pr->idPractica}}</td>
                    <td class="align-middle">{{$pr->idRequisito}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>        
    </ul>
    <div class="pagination">
        @if ($practicasRequisitos->previousPageUrl())
            <li class="page-item">
                <a class="page-link" href="{{ $practicasRequisitos->previousPageUrl() }}" rel="prev">
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
    
        @if ($practicasRequisitos->nextPageUrl())
            <li class="page-item">
                <a class="page-link" href="{{ $practicasRequisitos->nextPageUrl() }}" rel="next">
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
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mostrando {{ $practicasRequisitos->firstItem() }} al {{ $practicasRequisitos->lastItem() }} de {{ $practicasRequisitos->total() }} resultados
            </p>
        </div>
    </div>
@endsection