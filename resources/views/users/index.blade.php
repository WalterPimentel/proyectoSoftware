@extends('adminlte::page')

@section('title', 'Usuarios')

@section('content_header')

    <h1>Bienvenido a la Gestión de Usuarios</h1>

@stop

@section('content')
    <ol class="breadcrumb">
        <li>
            <a href="{{route('home')}}">
                <i class="fas fa-home fa-xs">   Home   </i>
            </a>
        </li>
        <li>
            <a href="{{route('users.index')}}">
                <i class="fas fa-angle-left fa-xs">   Usuarios del Sistema   </i>
            </a>
        </li>
    </ol>
    
    <ul>
        <table class="table table-striped table-bordered table-hover dataTable dtr-inline collapsed">

            <div class="small-box bg-gradient-success">
                <div class="inner">
                    <h3>{{ $users->total() }}    </h3>
                    <p>Usuarios Registrados</p>
                </div>
                <div class="icon">
                    <i class="fas fa-user-plus"></i>
                </div>
                <a href="{{ route('users.create') }}" class="small-box-footer">
                    Nuevo Usuario <i class="fas fa-plus-circle"></i>
                </a>
            </div>

            <thead class="thead-light">
                <tr class="text-center align-middle">
                    <th>Acción</th>
                    <!--<th>Foto</th>-->
                    <th>Usuario</th>
                    <th>Correo</th>
                </tr>
            </thead>        
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td style="width: 120px">
                            <div class="text-center d-flex justify-content-center align-items-center">
                                <a title="Editar Registro de '{{$user->name}}'" class="btn btn-warning mr-2" href="{{route('users.edit', $user->id)}}">
                                    <i class="fas fa-edit" style="color: #ffffff;"></i>
                                </a>
                                <form action="{{route('users.destroy', $user->id)}}" method="POST" onsubmit="return confirm('¿Está seguro de eliminar el registro del Usuario \'{{$user->name}}\'?');">
                                    @csrf
                                    @method ('delete')
                                    <button title="Eliminar Registro de '{{$user->name}}'" class="btn btn-danger mr-2"><i class="fas fa-trash-alt" style="color: #ffffff;"></i></button>
                                </form>
                            </div> 
                        </td>
                        <!--<td>{{$user->avatar}}</td>-->
                        <td title="Clic derecho para copiar a {{$user->name}}" onclick="window.location='{{ route('users.show', $user->id) }}';" oncontextmenu="copyText(event, '{{$user->name}}')" style="cursor: pointer;" class="align-middle">{{$user->name}}</td>
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
                        <td class="align-middle" oncontextmenu="copyText(event, '{{$user->email}}')">{{$user->email}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </ul>
    <div class="pagination">
        @if ($users->previousPageUrl())
            <li class="page-item">
                <a class="page-link" href="{{ $users->previousPageUrl() }}" rel="prev">
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
    
        @if ($users->nextPageUrl())
            <li class="page-item">
                <a class="page-link" href="{{ $users->nextPageUrl() }}" rel="next">
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
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mostrando {{ $users->firstItem() }} al {{ $users->lastItem() }} de {{ $users->total() }} resultados
            </p>
        </div>
    </div>

@stop
