@extends('adminlte::page')

@section('title', 'Requisito: ' . $requisito->nombreRequisito)

@section('content_header')
    <div class="d-flex justify-content-between">
        <h1>Se encuentra en el registro del Requisito: {{$requisito->nombreRequisito}}</h1>
        <a style="background-color: rgb(108, 117, 125)" href="{{route('requisitos.index')}}" class="btn">
            <i class="fas fa-chevron-circle-left" style="color: #ffffff;">   Volver a Requisitos</i>
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
                <a href="{{route('requisitos.index')}}">
                    <i class="fas fa-angle-left fa-xs">   Requisitos    </i>                
                </a>
            </li>
            <li class="active">
                <i class="fas fa-angle-left fa-xs">   {{$requisito->nombreRequisito}}   </i>
            </li>        
        </ol>  
    </div>  
    <table class="table table-striped table-bordered dataTable dtr-inline collapsed">
        <thead class="thead-light">
            <tr class="text-center">
                <th colspan="2">
                    {{$requisito->nombreRequisito}} 
                </th>
            </tr>
            <tr>
                <th>ID</th>
                <td>{{$requisito->id}}</td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>{{$requisito->nombreRequisito}}</td>
            </tr>
            <tr>
                <th>Descripción</th>
                <td>{{$requisito->descripcionRequisito}}</td>
            </tr>
            <tr>
                <th>Estado</th>
                <td class="{{ $requisito->estado == 1 ? 'text-success' : 'text-danger' }}">
                    {{ $requisito->estado == 1 ? 'Cumplido' : 'Incumplido' }}
                </td>
            </tr>
            <tr>
                <th>Fecha Registro</th>
                <td>{{$requisito->created_at->isoFormat('dddd, D [de] MMMM [del] YYYY [a las] h:mma')}}</td>
            </tr>
            <tr>
                <th>Última Actualización</th>
                <td>{{$requisito->updated_at->isoFormat('dddd, D [de] MMMM [del] YYYY [a las] h:mma')}}</td>
            </tr>
        </thead>
        <tbody>
            <tr style="border: none; background-color: transparent;">
                <td colspan="2">
                    <div class="d-flex justify-content-center">
                        <form action="{{route('requisitos.destroy', $requisito->id)}}" method="POST" onsubmit="return confirm('¿Está seguro de eliminar el registro del docente \'{{$requisito->nombreRequisito}}\'?');">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger mr-2"><i class="fas fa-trash-alt" style="color: #ffffff;">    Eliminar</i></button>
                        </form>
                    
                        <a href="{{route('requisitos.edit', $requisito->id)}}">
                            <button class="btn btn-warning mr-2"><i class="fas fa-edit" style="color: #ffffff;">    Editar</i></button>
                        </a>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
@stop
