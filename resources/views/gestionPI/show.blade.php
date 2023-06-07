@extends('adminlte::page')

@php
    use Carbon\Carbon;
@endphp

@section('title', 'Plan: ' . $gestionPI->id)

@section('content_header')
    <div class="d-flex justify-content-between">
        <h1>Se encuentra en el registro del Plan de Funcionamiento y Desarrollo: {{$gestionPI->descripcionPFD}}</h1>
        <a style="background-color: rgb(108, 117, 125)" href="{{route('gestionPI.index')}}" class="btn d-flex align-items-center">
            <i class="fas fa-chevron-circle-left" style="color: #ffffff;">   Volver a Plan FD</i>
        </a>
    </div>
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
                <i class="fas fa-angle-left fa-xs">   Planificación Institucional   </i>
            </a>
        </li>
        <li>
            <a href="{{route('gestionPI.index')}}">
                <i class="fas fa-angle-left fa-xs">   Plan de Funcionamiento y Desarrollo    </i>                
            </a>
        </li>
        <li class="active">
            <i class="fas fa-angle-left fa-xs">   {{$gestionPI->descripcionPFD}}   </i>
        </li>        
    </ol>

    <table class="table table-striped table-bordered dataTable dtr-inline collapsed">
        <thead class="thead-light">
            <tr class="text-center">
                <th colspan="2">
                    {{$gestionPI->descripcionPFD}}
                </th>
            </tr>
            <tr>
                <th>ID</th>
                <td>{{$gestionPI->id}}</td>
            </tr>
            <tr>
                <th>Cuadro Necesidad</th>
                <td>{{$gestionPI->idCuadroNecesidades}}</td>
            </tr>
            <tr>
                <th>Comisión</th>
                <td>{{$gestionPI->idComision}}</td>
            </tr>
            <tr>
                <th>Revisión</th>
                <td>{{$gestionPI->idRevisionPFD }}</td>
            </tr>
            <tr>
                <th>Acta</th>
                <td>{{$gestionPI->idActaConsejoFacultad}}</td>
            </tr>
            <tr>
                <th>Responsable Elaboración</th>
                <td>{{$gestionPI->idResponsableElaboracion}}</td>
            </tr>
            <tr>
                <th>Descripción</th>
                <td>{{$gestionPI->descripcionPFD}}</td>
            </tr>
            <tr>
                <th>Fecha Elaboración</th>
                <td>{{ Carbon::parse($gestionPI->fechaElaboracionPFD)->locale('es')->isoFormat('ddd D [de] MMMM [del] YYYY [a las] h:mma')}}</td>
            </tr>
            <tr>
                <th>Fecha Aprobación</th>
                <td>{{ Carbon::parse($gestionPI->fechaAprobacionPFD)->locale('es')->isoFormat('ddd D [de] MMMM [del] YYYY [a las] h:mma')}}</td>
            </tr>
            <tr>
                <th>Año</th>
                <td>{{$gestionPI->yearPFD}}</td>
            </tr>
            <tr>
                <th>Fecha Registro</th>
                <td>{{$gestionPI->created_at->isoFormat('dddd, D [de] MMMM [del] YYYY [a las] h:mma')}}</td>
            </tr>
            <tr>
                <th>Última Actualización</th>
                <td>{{$gestionPI->updated_at->isoFormat('dddd, D [de] MMMM [del] YYYY [a las] h:mma')}}</td>
            </tr>
        </thead>
        <tbody>
            <tr style="border: none; background-color: transparent;">
                <td colspan="2">
                    <div class="d-flex justify-content-center">
                        <form action="{{route('gestionPI.destroy', $gestionPI->id)}}" method="POST" onsubmit="return confirm('¿Está seguro de eliminar el registro del docente \'{{$gestionPI->descripcionPFD}}\'?');">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger mr-2"><i class="fas fa-trash-alt" style="color: #ffffff;">    Eliminar</i></button>
                        </form>
                    
                        <a href="{{route('gestionPI.edit', $gestionPI->id)}}">
                            <button class="btn btn-warning mr-2"><i class="fas fa-edit" style="color: #ffffff;">    Editar</i></button>
                        </a>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>

@stop