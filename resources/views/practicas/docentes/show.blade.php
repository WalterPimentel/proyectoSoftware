@extends('adminlte::page')

@section('title', 'Docente: ' . $docente->apellidopDocente)

@section('content_header')
    <div class="d-flex justify-content-between">
        <h1>
            Se encuentra en el registro del docente: 
            {{$docente->apellidopDocente}} 
            {{$docente->apellidomDocente}}, 
            {{$docente->nombresDocente}}
        </h1>
        <a style="background-color: rgb(108, 117, 125)" href="{{route('docentes.index')}}" class="btn">
            <i class="fas fa-chevron-circle-left" style="color: #ffffff;">   Volver a Docentes</i>
        </a>
    </div>
@stop

@section('content')    
    
    <div>
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
            <li>
                <a href="{{route('docentes.index')}}">
                    <i class="fas fa-angle-left fa-xs">   Docentes    </i>                
                </a>
            </li>
            <li class="active">
                <i class="fas fa-angle-left fa-xs">   
                    {{$docente->apellidopDocente}} 
                    {{$docente->apellidomDocente}}, 
                    {{$docente->nombresDocente}}   
                </i>
            </li>            
        </ol>
    </div>

    <table class="table table-striped table-bordered dataTable dtr-inline collapsed">
        <thead class="thead-light">
            <tr class="text-center">
                <th colspan="2">
                    {{$docente->apellidopDocente}} 
                    {{$docente->apellidomDocente}}, 
                    {{$docente->nombresDocente}}
                </th>
            </tr>
            <tr>
                <th>ID</th>
                <td>{{$docente->id}}</td>
            </tr>
            <tr>
                <th>Código</th>
                <td>{{$docente->codigoDocente}}</td>
            </tr>
            <tr>
                <th>Nombres</th>
                <td>{{$docente->nombresDocente}}</td>
            </tr>
            <tr>
                <th>Apellido Paterno</th>
                <td>{{$docente->apellidopDocente}}</td>
            </tr>
            <tr>
                <th>Apellido Materno</th>
                <td>{{$docente->apellidomDocente}}</td>
            </tr>
            <tr>
                <th>Telefono</th>
                <td>{{$docente->telefonoDocente}}</td>
            </tr>
            <tr>
                <th>Correo</th>
                <td>{{$docente->correoDocente}}</td>
            </tr>
            <tr>
                <th>Fecha Registro</th>
                <td>{{$docente->created_at->isoFormat('dddd, D [de] MMMM [del] YYYY [a las] h:mma')}}</td>
            </tr>
            <tr>
                <th>Última Actualización</th>
                <td>{{$docente->updated_at->isoFormat('dddd, D [de] MMMM [del] YYYY [a las] h:mma')}}</td>
            </tr>
        </thead>
        <tbody>
            <tr style="border: none; background-color: transparent;">
                <td colspan="2">
                    <div class="d-flex justify-content-center">
                        <form action="{{route('docentes.destroy', $docente->id)}}" method="POST" onsubmit="return confirm('¿Está seguro de eliminar el registro del docente \'{{$docente->apellidopDocente}}\'?');">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger mr-2"><i class="fas fa-trash-alt" style="color: #ffffff;">    Eliminar</i></button>
                        </form>
                    
                        <a href="{{route('docentes.edit', $docente->id)}}">
                            <button class="btn btn-warning mr-2"><i class="fas fa-edit" style="color: #ffffff;">    Editar</i></button>
                        </a>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>

@stop