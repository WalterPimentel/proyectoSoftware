@extends('adminlte::page')

@php
    use Carbon\Carbon;
@endphp

@section('title', 'Planificación Institucional')

@section('content_header')

    <h1>Bienvenido a la Página Principal de la Gestión de Planificación Institucional</h1>

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
                <i class="fas fa-angle-left fa-xs">   Estratégicos  </i>
            </a>
        </li>
        <li>
            <a href="{{route('gestionPI.index')}}">
                <i class="fas fa-angle-left fa-xs">   Planificacion Institucional   </i>
            </a>
        </li>
        <li class="active">
            <i class="fas fa-angle-left fa-xs">   Plan de Funcionamiento y Desarrollo    </i>
        </li>
    </ol>

    <ul>
        <table class="table table-striped table-bordered table-hover dataTable dtr-inline collapsed">

            <div class="small-box bg-gradient-success">
                <div class="inner">
                    <h3>{{ $pfds->total() }}    </h3>
                    <p>Planes Registrados</p>
                </div>
                <div class="icon">
                    <i class="fas fa-scroll"></i>
                </div>
                <a href="{{ route('gestionPI.create') }}" class="small-box-footer">
                    Nuevo Plan <i class="fas fa-plus-circle"></i>
                </a>
            </div>

            <thead class="thead-light">
                <tr class="text-center align-middle">
                    <th>Acción</th>
                    <th>Descripción</th>
                    <th>Elaborado</th>
                    <th>Aprobado</th>
                    <th>Año</th>
                </tr>
            </thead>        
            <tbody>
            @foreach ($pfds as $pfd)
                <tr>
                    <td style="width: 120px" class="align-middle">
                        <div class="text-center d-flex justify-content-center align-items-center">
                            <a title="Editar Registro de '{{$pfd->descripcionPFD}}'" class="btn btn-warning mr-2" href="{{route('gestionPI.edit', $pfd->id)}}">
                                <i class="fas fa-edit" style="color: #ffffff;"></i>
                            </a>
                            <form action="{{route('gestionPI.destroy', $pfd->id)}}" method="POST" onsubmit="return confirm('¿Está seguro de eliminar el registro del Plan \'{{$pfd->descripcionPFD}}\'?');">
                                @csrf
                                @method('delete')
                                <button title="Eliminar Registro de '{{$pfd->descripcionPFD}}'" class="btn btn-danger mr-2" data-toggle="modal" data-target="#modal-danger">
                                    <i class="fas fa-trash-alt" style="color: #ffffff;"></i>
                                </button>
                            </form>
                        </div> 
                    </td>
                    <td title="Clic derecho para copiar texto: '{{$pfd->descripcionPFD}}'" class="align-middle" onclick="window.location='{{ route('gestionPI.show', $pfd->id) }}';" oncontextmenu="copyText(event, '{{$pfd->descripcionPFD}}')" style="cursor: pointer;">{{$pfd->descripcionPFD}}</td>
                    <td class="text-center align-middle">{{ Carbon::parse($pfd->fechaElaboracionPFD)->locale('es')->isoFormat('ddd D [de] MMMM [del] YYYY [a las] h:mma') }}</td>
                    <td class="text-center align-middle">{{ Carbon::parse($pfd->fechaAprobacionPFD)->locale('es')->isoFormat('ddd D [de] MMMM [del] YYYY [a las] h:mma') }}</td>
                    <td class="text-center align-middle">{{$pfd->yearPFD}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </ul>    
    <div class="pagination">
        @if ($pfds->previousPageUrl())
            <li class="page-item">
                <a class="page-link" href="{{ $pfds->previousPageUrl() }}" rel="prev">
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
    
        @if ($pfds->nextPageUrl())
            <li class="page-item">
                <a class="page-link" href="{{ $pfds->nextPageUrl() }}" rel="next">
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
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mostrando {{ $pfds->firstItem() }} al {{ $pfds->lastItem() }} de {{ $pfds->total() }} resultados
            </p>
        </div>
    </div>
    <script>
        function copyText(event, text) {
            event.preventDefault(); // Evita el menú contextual predeterminado
            navigator.clipboard.writeText(text); // Copia el texto al portapapeles
            showAlert('Texto copiado: ' + text, 1500); // Muestra la alerta por 2 segundos
        }
    
        function showAlert(message, duration) {
            var alertElement = document.createElement('div');
            alertElement.innerText = message;
            alertElement.style.position = 'fixed';
            alertElement.style.top = '50%';
            alertElement.style.left = '50%';
            alertElement.style.transform = 'translate(-50%, -50%)';
            alertElement.style.background = 'rgba(0, 0, 0, 0.8)';
            alertElement.style.color = '#fff';
            alertElement.style.padding = '10px';
            alertElement.style.borderRadius = '5px';
            alertElement.style.zIndex = '9999';
    
            document.body.appendChild(alertElement);
    
            setTimeout(function() {
                alertElement.remove();
            }, duration);
        }
    </script>
@stop
