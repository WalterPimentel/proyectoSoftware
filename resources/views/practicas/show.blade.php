@extends('adminlte::page')

@section('title', 'Practica: ' . $practica->titulo)

@section('content_header')
    <div class="d-flex justify-content-between">    
        <h1>Se encuentra en el registro de la prácatica: {{$practica->titulo}}</h1>
        <a style="background-color: rgb(108, 117, 125)" href="{{route('practicas.index')}}" class="btn">
            <i class="fas fa-chevron-circle-left" style="color: #ffffff;">   Volver a Prácticas</i>
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
            <a href="{{route('practicas.index')}}">
                <i class="fas fa-angle-left fa-xs">   Práctica    </i>                
            </a>
        </li>
        <li class="active">
            <i class="fas fa-angle-left fa-xs"> {{$practica->titulo}}   </i>
        </li>            
    </ol>
</div>

    <table class="table table-striped table-bordered dataTable dtr-inline collapsed">
        <thead class="thead-light">
            <tr class="text-center">
                <th colspan="2">{{$practica->titulo}}</th>
            </tr>
            <tr>
                <th>ID</th>
                <td>{{$practica->id}}</td>
            </tr>
            <tr>
                <th>Código</th>
                <td>{{$practica->codigo}}</td>
            </tr>
            <tr>
                <th>Estudiante</th>
                <td>{{$practica->idEstudiante}}</td>
            </tr>
            <tr>
                <th>Docente</th>
                <td>{{$practica->idDocente}}</td>
            </tr>
            <tr>
                <th>Etapas</th>
                <td>{{$practica->idEtapa}}</td>
            </tr>
            <tr>
                <th>Empresa</th>
                <td>{{$practica->idEmpresa}}</td>
            </tr>
            <tr>
                <th>Título</th>
                <td>{{$practica->titulo}}</td>
            </tr>
            <tr>
                <th>Fecha Registro</th>
                <td>{{$practica->created_at->isoFormat('dddd, D [de] MMMM [del] YYYY [a las] h:mma')}}</td>
            </tr>
            <tr>
                <th>Última Actualización</th>
                <td>{{$practica->updated_at->isoFormat('dddd, D [de] MMMM [del] YYYY [a las] h:mma')}}</td>
            </tr>
        </thead>
        <tbody>
            <tr style="border: none; background-color: transparent;">
                <td colspan="2">
                    <div class="d-flex justify-content-center">
                        <form action="{{route('practicas.destroy', $practica->id)}}" method="POST" onsubmit="return confirm('¿Está seguro de eliminar el registro \'{{ $practica->codigo }}\'?');">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger mr-2"><i class="fas fa-trash-alt" style="color: #ffffff;">    Eliminar</i></button>
                        </form>
                    
                        <a href="{{route('practicas.edit', $practica->id)}}">
                            <button class="btn btn-warning mr-2"><i class="fas fa-edit" style="color: #ffffff;">    Editar</i></button>
                        </a>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>    
    
@stop