@extends('adminlte::page')

@section('title', 'Acciones Mejoras')

@section('content_header')

    <h1>Bienvenido a la Gestión de Acciones de Mejora</h1>

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
        <i class="fas fa-angle-left fa-xs">   Acciones de Mejora    </i>
    </li>
</ol>
    <ul>
        <table class="table table-striped table-bordered table-hover dataTable dtr-inline collapsed">

            <div class="small-box bg-gradient-success">
                <div class="inner">
                    <h3>{{ $accionesmejoras->total() }}    </h3>
                    <p>Acciones de Mejora Registradas</p>
                </div>
                <div class="icon">
                    <i class="fas fa-scroll"></i>
                </div>
                <a href="{{ route('accionesmejoras.create') }}" class="small-box-footer">
                    Nueva Acción de Mejora <i class="fas fa-plus-circle"></i>
                </a>
            </div>

            <thead class="thead-light">
                <tr class="text-center">
                    <th class=" align-middle">Acción</th>                    
                    <th class=" align-middle">Acción de Mejora</th>
                    <th class=" align-middle">Descripción de las Acciones de Mejora</th>                    
                </tr>
            </thead>        
            <tbody>
                @foreach ($accionesmejoras as $accionesmejora)
                    <tr>
                        <td class=" align-middle" style="width: 120px" class="align-middle">
                            <div class="text-center d-flex justify-content-center align-items-center">
                                <a title="Editar Registro de '{{$accionesmejora->metasAM}}'" class="btn btn-warning mr-2" href="{{route('accionesmejoras.edit', $accionesmejora->id)}}">
                                    <i class="fas fa-edit" style="color: #ffffff;"></i>
                                </a>
                                <form action="{{route('accionesmejoras.destroy', $accionesmejora->id)}}" method="POST" onsubmit="return confirm('¿Está seguro de eliminar el registro de la Acción \'{{$accionesmejora->metasAM}}\'?');">
                                    @csrf
                                    @method('delete')
                                    <button title="Eliminar Registro de '{{$accionesmejora->metasAM}}'" class="btn btn-danger mr-2" data-toggle="modal" data-target="#modal-danger">
                                        <i class="fas fa-trash-alt" style="color: #ffffff;"></i>
                                    </button>
                                </form>
                            </div> 
                        </td>
                        <td class=" align-middle" title="Clic derecho para copiar texto: '{{$accionesmejora->metasAM}}'" class="align-middle" onclick="window.location='{{ route('accionesmejoras.show', $accionesmejora->id) }}';" oncontextmenu="copyText(event, '{{$accionesmejora->metasAM}}')" style="cursor: pointer;">{{$accionesmejora->metasAM}}</td>
                        <td class=" align-middle" title="Clic derecho para copiar texto: '{{$accionesmejora->descripcionAM}}'" class="align-middle" onclick="window.location='{{ route('accionesmejoras.show', $accionesmejora->id) }}';" oncontextmenu="copyText(event, '{{$accionesmejora->metasAM}}')" style="cursor: pointer;">{{$accionesmejora->descripcionAM}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </ul>    
    <div class="pagination">
        @if ($accionesmejoras->previousPageUrl())
            <li class="page-item">
                <a class="page-link" href="{{ $accionesmejoras->previousPageUrl() }}" rel="prev">
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
    
        @if ($accionesmejoras->nextPageUrl())
            <li class="page-item">
                <a class="page-link" href="{{ $accionesmejoras->nextPageUrl() }}" rel="next">
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
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mostrando {{ $accionesmejoras->firstItem() }} al {{ $accionesmejoras->lastItem() }} de {{ $accionesmejoras->total() }} resultados
            </p>
        </div>
    </div>
    <script>
        function copyText(event, text) {
            event.preventDefault();
            navigator.clipboard.writeText(text);
            showAlert('Texto copiado: ' + text, 1500);
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
