@extends('adminlte::page')

@section('title', 'Estudiantes')

@section('content_header')

    <h1>Bienvenido a la Gestión de Estudiantes</h1>

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
            <i class="fas fa-angle-left fa-xs">   Estudiantes    </i>
        </li>
    </ol>

    <ul>
        <table class="table table-striped table-bordered table-hover dataTable dtr-inline collapsed">

            <div class="small-box bg-gradient-success">
                <div class="inner">
                    <h3>{{$estudiantes->total()}}    </h3>
                    <p>Estudiantes Registrados</p>
                </div>
                <div class="icon">
                    <i class="fas fa-user-plus"></i>
                </div>
                <a href="{{ route('estudiantes.create') }}" class="small-box-footer">
                    Nuevo Estudiante <i class="fas fa-plus-circle"></i>
                </a>
            </div>

            <thead class="thead-light">
                <tr class="text-center align-middle">
                    <th>Acción</th>
                    <!--<th>Foto</th>-->
                    <th>Código</th>
                    <th>Estudiante</th>
                </tr>
            </thead>        
            <tbody>
                @foreach ($estudiantes as $estudiante)
                    <tr>
                        <td style="width: 120px">
                            <div class="text-center d-flex justify-content-center align-items-center">
                                <a title="Editar Registro de '{{$estudiante->apellidopEstudiante}}'" class="btn btn-warning mr-2" href="{{route('estudiantes.edit', $estudiante->id)}}">
                                    <i class="fas fa-edit" style="color: #ffffff;"></i>
                                </a>
                                <form action="{{route('estudiantes.destroy', $estudiante->id)}}" method="POST" onsubmit="return confirm('¿Está seguro de eliminar el registro del Estudiante \'{{$estudiante->apellidopEstudiante}}\'?');">
                                    @csrf
                                    @method('delete')
                                    <button title="Eliminar Registro de '{{$estudiante->apellidopEstudiante}}'" class="btn btn-danger mr-2"><i class="fas fa-trash-alt" style="color: #ffffff;"></i></button>
                                </form>
                            </div> 
                        </td>
                        <!--<td>{{$estudiante->fotoEstudiante}}</td>-->
                        <td class="text-center align-middle">{{$estudiante->codigoEstudiante}}</td>
                        <td onclick="window.location='{{ route('estudiantes.show', $estudiante->id) }}';" style="cursor: pointer;" class="align-middle">{{$estudiante->apellidopEstudiante}} {{$estudiante->apellidomEstudiante}}, {{$estudiante->nombresEstudiante}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </ul>
    <div class="pagination">
        @if ($estudiantes->previousPageUrl())
            <li class="page-item">
                <a class="page-link" href="{{ $estudiantes->previousPageUrl() }}" rel="prev">
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
    
        @if ($estudiantes->nextPageUrl())
            <li class="page-item">
                <a class="page-link" href="{{ $estudiantes->nextPageUrl() }}" rel="next">
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
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mostrando {{ $estudiantes->firstItem() }} al {{ $estudiantes->lastItem() }} de {{ $estudiantes->total() }} resultados
            </p>
        </div>
    </div>

@stop
