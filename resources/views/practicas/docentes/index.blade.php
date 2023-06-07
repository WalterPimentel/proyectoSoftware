@extends('adminlte::page')

@section('title', 'Docentes')

@section('content_header')

    <h1>Bienvenido a la Gestión de Docentes</h1>

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
            <i class="fas fa-angle-left fa-xs">   Docentes    </i>
        </li>
    </ol>
    
    <ul>
        <table class="table table-striped table-bordered table-hover dataTable dtr-inline collapsed">

            <div class="small-box bg-gradient-success">
                <div class="inner">
                    <h3>{{ $docentes->total() }}    </h3>
                    <p>Docentes Registrados</p>
                </div>
                <div class="icon">
                    <i class="fas fa-user-plus"></i>
                </div>
                <a href="{{ route('docentes.create') }}" class="small-box-footer">
                    Nuevo Docente <i class="fas fa-plus-circle"></i>
                </a>
            </div>

            <thead class="thead-light">
                <tr class="text-center align-middle">
                    <th>Acción</th>
                    <!--<th>Foto</th>-->
                    <th>Código</th>
                    <th>Docente</th>
                </tr>
            </thead>        
            <tbody>
                @foreach ($docentes as $docente)
                    <tr>
                        <td style="width: 120px">
                            <div class="text-center d-flex justify-content-center align-items-center">
                                <a title="Editar Registro de '{{$docente->apellidopDocente}}'" class="btn btn-warning mr-2" href="{{route('docentes.edit', $docente->id)}}">
                                    <i class="fas fa-edit" style="color: #ffffff;"></i>
                                </a>
                                <form action="{{route('docentes.destroy', $docente->id)}}" method="POST" onsubmit="return confirm('¿Está seguro de eliminar el registro del docente \'{{$docente->apellidopDocente}}\'?');">
                                    @csrf
                                    @method ('delete')
                                    <button title="Eliminar Registro de '{{$docente->apellidopDocente}}'" class="btn btn-danger mr-2"><i class="fas fa-trash-alt" style="color: #ffffff;"></i></button>
                                </form>
                            </div> 
                        </td>
                        <!--<td>{{$docente->fotoDocente}}</td>-->
                        <td class="text-center align-middle">{{$docente->codigoDocente}}</td>
                        <td onclick="window.location='{{ route('docentes.show', $docente->id) }}';" style="cursor: pointer;" class="align-middle">{{$docente->apellidopDocente}} {{$docente->apellidomDocente}}, {{$docente->nombresDocente}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </ul>
    <div class="pagination">
        @if ($docentes->previousPageUrl())
            <li class="page-item">
                <a class="page-link" href="{{ $docentes->previousPageUrl() }}" rel="prev">
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
    
        @if ($docentes->nextPageUrl())
            <li class="page-item">
                <a class="page-link" href="{{ $docentes->nextPageUrl() }}" rel="next">
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
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mostrando {{ $docentes->firstItem() }} al {{ $docentes->lastItem() }} de {{ $docentes->total() }} resultados
            </p>
        </div>
    </div>

@stop
