@extends('adminlte::page')

@section('title', 'N°: ' . $practicasrequisito->id)

@section('content_header')
    <div class="d-flex justify-content-between">
        <h1>
            Se encuentra en el registro de la Práctica: {{$practicasrequisito->idPractica}}
        </h1>
        <a style="background-color: rgb(108, 117, 125)" href="{{route('practicasrequisitos.index')}}" class="btn">
            <i class="fas fa-chevron-circle-left" style="color: #ffffff;">   Volver a Prácticas y sus Requisitos</i>
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
                <a href="{{route('practicasrequisitos.index')}}">
                    <i class="fas fa-angle-left fa-xs">   Prácticas y sus Requisitos    </i>                
                </a>
            </li>
            <li class="active">
                <i class="fas fa-angle-left fa-xs">   
                    {{$practicasrequisito->idPractica}}
                </i>
            </li>            
        </ol>
    </div>

    <table class="table table-striped table-bordered dataTable dtr-inline collapsed">
        <thead class="thead-light">
            <tr class="text-center">
                <th colspan="2">
                    Relación de {{$practicasrequisito->idPractica}}
                </th>
            </tr>
            <tr class="text-center">
                <th>
                    Práctica N° {{$practicasrequisito->id}}
                </th>
                <th>
                    Requisitos que debe cumplir
                </th>
            </tr>
            <tr>
                <th class="text-center">{{$practicasrequisito->idPractica}}</th>
                <td><ol>{{$practicasrequisito->idRequisito}}</ol></td>
            </tr>
            <tr>
                <th>Fecha Registro</th>
                <td>{{$practicasrequisito->created_at->isoFormat('dddd, D [de] MMMM [del] YYYY [a las] h:mma')}}</td>
            </tr>
            <tr>
                <th>Última Actualización</th>
                <td>{{$practicasrequisito->updated_at->isoFormat('dddd, D [de] MMMM [del] YYYY [a las] h:mma')}}</td>
            </tr>
        </thead>
        <tbody>
            <tr style="border: none; background-color: transparent;">
                <td colspan="2">
                    <div class="d-flex justify-content-center">
                        <form action="{{route('practicasrequisitos.destroy', $practicasrequisito->id)}}" method="POST" onsubmit="return confirm('¿Está seguro de eliminar el registro de la practica \'{{$practicasrequisito->idPractica}}\'?');">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger mr-2"><i class="fas fa-trash-alt" style="color: #ffffff;">    Eliminar</i></button>
                        </form>
                    
                        <a href="{{route('practicasrequisitos.edit', $practicasrequisito->id)}}">
                            <button class="btn btn-warning mr-2"><i class="fas fa-edit" style="color: #ffffff;">    Editar</i></button>
                        </a>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>

@stop