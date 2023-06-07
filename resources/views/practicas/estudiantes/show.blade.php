@extends('adminlte::page')

@section('title', 'Estudiante: ' . $estudiante->apellidopEstudiante)

@section('content_header')
    <div class="d-flex justify-content-between"> 
        <h1>Se encuentra en el registro del Estudiante: {{$estudiante->apellidopEstudiante}} {{$estudiante->apellidomEstudiante}}, {{$estudiante->nombresEstudiante}}</h1>
        <a style="background-color: rgb(108, 117, 125)" href="{{route('estudiantes.index')}}" class="btn">
            <i class="fas fa-chevron-circle-left" style="color: #ffffff;">   Volver a Estudiantes</i>
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
            <a href="{{route('estudiantes.index')}}">
                <i class="fas fa-angle-left fa-xs">   Estudiantes    </i>                
            </a>
        </li>
        <li class="active">
            <i class="fas fa-angle-left fa-xs">   
                {{$estudiante->apellidopEstudiante}} 
                {{$estudiante->apellidomEstudiante}}, 
                {{$estudiante->nombresEstudiante}}   
            </i>
        </li>            
    </ol>
</div>

<table class="table table-striped table-bordered dataTable dtr-inline collapsed">
    <thead class="thead-light">
        <tr class="text-center">
            <th colspan="2">
                {{$estudiante->apellidopEstudiante}} 
                {{$estudiante->apellidomEstudiante}}, 
                {{$estudiante->nombresEstudiante}}
            </th>
        </tr>
        <tr>
            <th>ID</th>
            <td>{{$estudiante->id}}</td>
        </tr>
        <tr>
            <th>Código</th>
            <td>{{$estudiante->codigoEstudiante}}</td>
        </tr>
        <tr>
            <th>Nombres</th>
            <td>{{$estudiante->nombresEstudiante}}</td>
        </tr>
        <tr>
            <th>Apellido Paterno</th>
            <td>{{$estudiante->apellidopEstudiante}}</td>
        </tr>
        <tr>
            <th>Apellido Materno</th>
            <td>{{$estudiante->apellidomEstudiante}}</td>
        </tr>
        <tr>
            <th>Telefono</th>
            <td>{{$estudiante->telefonoEstudiante}}</td>
        </tr>
        <tr>
            <th>Correo</th>
            <td>{{$estudiante->correoEstudiante}}</td>
        </tr>
        <tr>
            <th>Fecha Registro</th>
            <td>{{$estudiante->created_at->isoFormat('dddd, D [de] MMMM [del] YYYY [a las] h:mma')}}</td>
        </tr>
        <tr>
            <th>Última Actualización</th>
            <td>{{$estudiante->updated_at->isoFormat('dddd, D [de] MMMM [del] YYYY [a las] h:mma')}}</td>
        </tr>
    </thead>
    <tbody>
        <tr style="border: none; background-color: transparent;">
            <td colspan="2">
                <div class="d-flex justify-content-center">
                    <form action="{{route('estudiantes.destroy', $estudiante->id)}}" method="POST" onsubmit="return confirm('¿Está seguro de eliminar el registro del Estudiante \'{{$estudiante->apellidopEstudiante}}\'?');">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger mr-2"><i class="fas fa-trash-alt" style="color: #ffffff;">    Eliminar</i></button>
                    </form>
                
                    <a href="{{route('estudiantes.edit', $estudiante->id)}}">
                        <button class="btn btn-warning mr-2"><i class="fas fa-edit" style="color: #ffffff;">    Editar</i></button>
                    </a>
                </div>
            </td>
        </tr>
    </tbody>
</table>

@stop
