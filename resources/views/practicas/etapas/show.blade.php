@extends('adminlte::page')

@section('title', 'Etapa: ' . $etapa->nombreEtapa)

@section('content_header')
    <div class="d-flex justify-content-between"> 
        <h1>Se encuentra en el registro de la Etapa: {{$etapa->nombreEtapa}}</h1>
        <a style="background-color: rgb(108, 117, 125)" href="{{route('etapas.index')}}" class="btn">
            <i class="fas fa-chevron-circle-left" style="color: #ffffff;">   Volver a Etapas</i>
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
                <a href="{{route('etapas.index')}}">
                    <i class="fas fa-angle-left fa-xs">   Etapas    </i>                
                </a>
            </li>
            <li class="active">
                <i class="fas fa-angle-left fa-xs">   
                    {{$etapa->nombreEtapa}}  
                </i>
            </li>            
        </ol>
    </div>

    <table class="table table-striped table-bordered dataTable dtr-inline collapsed">
        <thead class="thead-light">
            <tr class="text-center">
                <th colspan="2">{{$etapa->nombreEtapa}}</th>
            </tr>
            <tr>
                <th>ID</th>
                <td>{{$etapa->id}}</td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>{{$etapa->nombreEtapa}}</td>
            </tr>
            <tr>
                <th>Descripción</th>
                <td>{{$etapa->descripcionEtapa}}</td>
            </tr>
            <tr>
                <th>Fecha Registro</th>
                <td>{{$etapa->created_at->isoFormat('dddd, D [de] MMMM [del] YYYY [a las] h:mma')}}</td>
            </tr>
            <tr>
                <th>Última Actualización</th>
                <td>{{$etapa->updated_at->isoFormat('dddd, D [de] MMMM [del] YYYY [a las] h:mma')}}</td>
            </tr>
        </thead>
        <tbody>
            <tr style="border: none; background-color: transparent;">
                <td colspan="2">
                    <div class="d-flex justify-content-center">
                        <form action="{{route('etapas.destroy', $etapa->id)}}" method="POST" onsubmit="return confirm('¿Está seguro de eliminar el registro de la etapa \'{{$etapa->nombreEtapa}}\'?');">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger mr-2"><i class="fas fa-trash-alt" style="color: #ffffff;">    Eliminar</i></button>
                        </form>
                    
                        <a href="{{route('etapas.edit', $etapa->id)}}">
                            <button class="btn btn-warning mr-2"><i class="fas fa-edit" style="color: #ffffff;">    Editar</i></button>
                        </a>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>

@stop
